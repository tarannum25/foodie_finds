<?php
namespace App\Controllers\User;

use App\Middlewares\AuthMiddleware;
use App\Models\Cart;
use App\Models\CartItem;
use App\Support\Authentication\Auth;
use Fantom\Controller;
use Fantom\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = new Cart();
    }

    protected function add()
    {
        // $_GET
        // $_POST

        $product_id = (int) $_POST['product_id'];
        $user = Auth::user();

        // Create empty cart for the user
        $cart_id = null;
        $cart = Cart::where('user_id', $user->id)->first();
        if (is_null($cart)) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->save();
            $cart_id = $cart->lastId();
        } else {
            $cart_id = $cart->id;
        }

        $cart_item = new CartItem();
        $cart_item->product_id = $product_id;
        $cart_item->user_id = $user->id;
        $cart_item->cart_id = $cart_id;
        $cart_item->quantity = 1;
        $cart_item->save();

        Session::flash("success", "Successfully Added");
        redirect("/user/home/index");
    }

    protected function before()
    {
        return (new AuthMiddleware)();
    }

}

    