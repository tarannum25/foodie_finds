<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use App\Models\Category;
use App\Models\Product;
use Fantom\Controller;
use Fantom\Session;

class ProductController extends Controller
{
    protected function index()
    {
        $products = Product::all()->get();

        $this->view->render("Admin/Product/index.php", [
            'products' => $products,
        ]);
    }

    protected function create()
    {
        $categories = Category::all()->get();

        $this->view->render('Admin/Product/create.php', [
            'categories' => $categories,
        ]);
    }


    protected function edit()
    // {
    //     if (!$product) {
    //         Session::flash("error", "Product not found!");
    //         redirect("admin/product/index");
    //     }

    //     $this->view->render('Admin/Product/edit.php', [
    //         'product' => $product,
    //     ]);
    // }
    {
        $id = $this->route_params['id'];
        // 1. Find the product by ID
        $product = product::find($id)->first();
        $categories = Category::all()->get();

        // 2. If not found, redirect back with error
        if (is_null($product)) {
            Session::flash("error", "product not found!");
            redirect("admin/product/index");
        }

        // 3. Load the edit view with product data
        $this->view->render("Admin/Product/edit.php", [
            'product' => $product,
            'categories' => $categories,
        ]);
    }
    protected function store()
    {
       $product = new product();


        // 3. Fill the model with data
       $product->product_name = $_POST['product_name'];
       $product->description = $_POST['description'];
       $product->category_id = $_POST['category_id'];
       $product->price_mp = $_POST['price_mp'];
       $product->price_sp = $_POST['price_sp'];

        // 4. Save the model in DB
       $product->save();

        // 5. Redict to product list page with Success message
       Session::flash("success", "product created scuccessfully!");
       redirect("admin/product/index");
       $this->view->render('Admin/Product/show.php');
   }

   protected function update()
   {
        $id = $this->route_params['id'];
        // 1. Find the product by ID
        $product = product::find($id)->first();

        // 2. If not found, redirect back with error
        if (is_null($product)) {
            Session::flash("error", "product not found!");
            redirect("admin/product/index");
        }

        // 1. Validate data
        // @TODO

        // 3. Fill the model with data
        $product->product_name = $_POST['product_name'];
        $product->description = $_POST['description'];
        $product->price_mp = $_POST['price_mp'];
        $product->price_sp = $_POST['price_sp'];
        $product->category_id = $_POST['category_id'];


        // 4. Save the model in DB
        $product->save();

        // 5. Redict to product list page with Success message
        Session::flash("success", "product updated scuccessfully!");
        redirect("admin/product/index");
    }

    protected function before()
    {
        return (new AdminAuthMiddleware)();
    }
}