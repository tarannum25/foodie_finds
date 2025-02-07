<?php

namespace App\Controllers\User;

use App\Middlewares\AuthMiddleware;
use App\Support\Authentication\Authentication;
use App\Middlewares\Middlewares;
use App\Models\Product;
use App\Support\Authentication\Auth;
use App\Support\Validations\Validations;
use Fantom\Controller;

/**
 * HomeController class
 */
class FoodController extends Controller
{
	protected function details()
	{
		// @TODO handle corner cases.
		// $product_id = $_GET['id'];
		$product_id = get_or_empty('id');
		$food = Product::where("id", $product_id)->first();

		$this->view->render('User/Food/details.php', [
			'food' => $food,
		]);
	}

	protected function before()
	{
		return (new AuthMiddleware)();
	}
}