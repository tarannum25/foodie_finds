<?php

namespace App\Controllers\User;

use App\Middlewares\AuthMiddleware;
use App\Models\Product;
use App\Support\Authentication\Auth;
use Fantom\Controller;

/**
 * HomeController class
 */
class HomeController extends Controller
{
	protected function index()
	{
		// $category = Category::where('name', 'Starter')->first();


		// $products = $category ? $category->products()->get() : [];

		// $category_id = 1;
		// $starters = Product::where("category_id", $category_id)->get();

		// $this->view->render('User/Home/index.php', ['starters' => $starters]);
	
    	
		$desserts = Product::where("category_id", 1)->get();
		$drinks = Product::where("category_id", 2)->get();
		$starters = Product::where("category_id", 3)->get();
		$main_course = Product::where("category_id", 4)->get();

		$this->view->render('User/Home/index.php', [
		    'starters' => $starters,
		    'main_course' => $main_course,
		    'desserts' => $desserts,
		    'drinks' => $drinks
		]);
    }

	protected function before()
	{
		return (new AuthMiddleware)();
	}

	
}