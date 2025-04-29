<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use App\Models\Order;
use Fantom\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all()->get();

        $this->view->render("Admin/Order/index.php", [
            'orders' => $orders,
        ]);
    }

    public function show()
    {
        $this->view->render('Admin/Order/show.php');
    }

    protected function before()
    {
        return (new AdminAuthMiddleware)();
    }
}
