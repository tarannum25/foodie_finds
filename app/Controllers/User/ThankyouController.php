<?php

namespace App\Controllers\User;

use Fantom\Controller;

/**
 * Home controller
 */
class ThankyouController extends Controller
{
	public function index()
	{
		$this->view->render('/User/Thankyou/index.php');
	}
}
