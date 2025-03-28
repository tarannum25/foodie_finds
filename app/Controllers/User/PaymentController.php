<?php

namespace App\Controllers\User;

use App\Controllers\User\PaymentController;
use Fantom\Controller;


class PaymentController extends Controller
{
	public function index()
	{
		$this->view->render('/User/Payment/index.php');
	}
}
