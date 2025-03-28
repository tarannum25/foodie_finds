<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use Fantom\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $this->view->render('Admin/Product/index.php');
    }

    public function create()
    {
        $this->view->render('Admin/Product/create.php');
    }
    public function edit()
    {
        $this->view->render('Admin/Product/edit.php');
    }
     public function show()
    {
        $this->view->render('Admin/Product/show.php');
    }

    protected function before()
    {
        return (new AdminAuthMiddleware)();
    }
}