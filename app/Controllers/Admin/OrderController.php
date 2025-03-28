<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use Fantom\Controller;

class OrderController extends Controller
{
     public function index()
    {
        $this->view->render('Admin/Order/index.php');
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
