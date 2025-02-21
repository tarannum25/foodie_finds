<?php

namespace App\Controllers\User;
use App\Middlewares\AuthMiddleware;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Product;
use App\Support\Authentication\Auth;
use App\Support\Authentication\Authentication;
use Fantom\Controller;

class CheckoutController extends Controller
{
    protected function index()
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first(); // cart / null
        $cart_items = CartItem::where('cart_id', $cart->id)->get(); // array of cart items / []

        // echo "<pre>";
        // print_r($cart_items);
        // exit;

        $products = [];
        foreach ($cart_items as $item) {
            $product_id = $item->product_id;
            $product = Product::find($product_id)->first();
            $products[] = $product;
        }

        // echo "<pre>";
        // print_r($products);
        // exit;


        $discount = 0;
        
        if (!$cart) {
            $cart_items = [];
            $subtotal = 0;
        } else {
            $cart_items = CartItem::where('cart_id', $cart->id)->get(); 


            $subtotal = 0;
            $products = [];

            foreach ($cart_items as $item) {
                $product = Product::find($item->product_id)->first();
                if ($product) {
                    $product->quantity = $item->quantity; 
                    $product->total_price = $product->price_sp * $item->quantity;
                    $discount += ($product->price_mp - $product->price_sp) * $item->quantity;

                    $products[] = $product;
                    $subtotal += $product->total_price;
                }
            }
        }

        $delivery_charge = 99;
        $total = $subtotal - $discount + $delivery_charge;

        $this->view->render('User/Checkout/index.php', [
            'products'  => $products,
            'subtotal'  => $subtotal,
            'discount'  => $discount,
            'total'     => $total,
            'delivery_charge' => $delivery_charge,
            'cart_items' => $cart_items,
        ]);

        //           $this->view->render('User/Checkout/index.php', [
        //     'products' => $products,
        // ]);

    }

    protected function before()
    {
        return (new AuthMiddleware)();
    }
}
