<?php

namespace App\Controllers;

use Fantom\Controller;

/**
 * Home controller
 */
class HomeController extends Controller
{
	public function index()
	{
		$this->view->render('Home/index.php');
	}
}
