<?php

namespace App\Controllers\User;

use App\Middlewares\AuthMiddleware;
use App\Models\Product;
use Fantom\Controller;

/**
 * SearchController
 */
class SearchController extends Controller
{
	protected function index()
	{
		$query = $_GET['q'];

		$sql = "SELECT * FROM products WHERE product_name LIKE '%$query%'";

		$products = Product::raw($sql)->get();

		$this->view->render('User/Search/index.php', [
			'query' => $query,
			'products' => $products,
		]);
	}

	protected function before()
	{
		return (new AuthMiddleware)();
	}
}