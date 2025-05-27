<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use App\Models\Order;
use App\Models\OrderItem;
use App\Support\Authentication\user;
use Fantom\Controller;
use Fantom\Session;

class OrderController extends Controller
{
    protected function index()
    {
        $orders = Order::all()->get();

        $this->view->render("Admin/Order/index.php", [
            'orders' => $orders,
        ]);
    }

    protected function show()
{
    // URL: /admin/order/ORDER_ID/show
    // Order detail / show

    $id = $this->route_params['id'];

    $order = Order::find($id)->first();
    

    if (!$order) {
        Session::flash("error", "Order not found!");
        redirect("/admin/order");
       
    } 


    
    // $order_items = OrderItem::where("order_id", $order->id)->get();
    // $order = Order::with("user",$user->fullName)->get();
    // $order = Order::with('user')->find($order->id);
    $order_items = OrderItem::where('order_id', $order->id)->get();
    $user = $order->user();
    // $user = User::find($order->user_id);
    // $user = User::where('id', $order->user_id)->first();




    // echo "<pre>";
    // print_r($user);
    // exit;


    $this->view->render("Admin/Order/show.php", [
        'order'        => $order,
        'order_items'  => $order_items,
        'user'         => $user,
    ]);
}

    protected function before()
    {
        return (new AdminAuthMiddleware)();
    }
}
