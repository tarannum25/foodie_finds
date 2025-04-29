<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use App\Models\Category;
use Fantom\Controller;
use Fantom\Session;

class CategoryController extends Controller

{
    protected function index()
    {
        $categories = Category::all()->get();

        $this->view->render("Admin/Category/index.php", [
            'categories' => $categories,
        ]);
    }

    protected function create()
    {
        $this->view->render("Admin/Category/create.php");
    }

    protected function edit()
    {
        // 1. Find the category by ID
        $category = Category::find($id);

        // 2. If not found, redirect back with error
        if (!$category) {
            Session::flash("error", "Category not found!");
            redirect("admin/category/index");
            return;
        }

        // 3. Load the edit view with category data
        return view("admin/Category/edit", ['category' => $category]);
            $this->view->render("Admin/Category/edit.php");
    }

    protected function store()
    {
        // 1. Validate data
        // @TODO

        // 2. Create category model object
        $category = new Category();

        // 3. Fill the model with data
        $category->name = $_POST['name'];
        $category->description = $_POST['description'];

        // 4. Save the model in DB
        $category->save();

        // 5. Redict to category list page with Success message
        Session::flash("success", "Category created scuccessfully!");
        redirect("admin/category/index");
    }



    protected function before()
    {
        return (new AdminAuthMiddleware)();
    }

}







   

