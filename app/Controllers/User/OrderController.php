<?php

namespace App\Controllers\User;

use App\Middlewares\AuthMiddleware;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Support\Authentication\Auth;
use Fantom\Controller;
use Fantom\Session;

/**
 * OrderController
 */
class OrderController extends Controller
{
	protected function create()
	{
		$user = Auth::user();

		$cart = Cart::where('user_id', $user->id)->first();
		$cart_items = CartItem::where('cart_id', $cart->id)->get();

		$gross_total = 0;
		$discount = 0;
		$sub_total = 0;

		$products = [];
		foreach ($cart_items as $ci) {
			$product = Product::find($ci->product_id)->first();
			$products[] = $product;

			$gross_total += $product->price_mp;
			$discount += $product->price_mp - $product->price_sp;
			// $sub_total += $product->price_mp - ($product->price_mp - $product->price_sp);
		}
		$sub_total = $gross_total - $discount;

		$order = new Order();
		$order->user_id = $user->id;
		$order->order_date = date("Y-m-d H:i:s");
		$order->gross_total = $gross_total;
		$order->sub_total = $sub_total;
		$order->discount = $discount;

		$order->save();

		// Create order items
		foreach ($products as $index => $p) {
			$qty = $cart_items[$index]->quantity;

			$order_item = new OrderItem();
			$order_item->product_id = $p->id;
			$order_item->order_id = $order->lastId();
			$order_item->price_mp = $p->price_mp;
			$order_item->price_sp = $p->price_sp;
			$order_item->discount = $p->price_mp - $p->price_sp;
			$order_item->quantity = $cart_items[$index]->quantity;
			$order_item->order_price = 0;

			$order_item->save();
		}

		// Empty the cart of the user
		// Delete cart items
		foreach ($cart_items as $ci) {
			$ci->delete();
		}
		$cart->delete();

		Session::flash('success', 'Your order is placed successfully! Your food is ont the way, stay hungry!');
		redirect('user/order/success');
	}



	protected function success()
	{
		$this->view->render('/User/Payment/index.php');
	}


    protected function history()
    {
        $user = Auth::user();

		$orders = Order::where('user_id', $user->id)->get();
		foreach ($orders as $order) {
			$order_items = OrderItem::where('order_id', $order->id)->get();
			$order->order_items = $order_items;

			foreach ($order->order_items as $oi) {
				$product = Product::find($oi->product_id)->first();
				$oi->product = $product;
			}
		}

        // $orders = Order::where('user_id', $user->id)->with('items')->get();
    
        $this->view->render('User/Orderhistory/index.php', [
            'orders'	 => $orders,
        ]);
    }

	protected function before()
	{
		return (new AuthMiddleware)();
	}
}