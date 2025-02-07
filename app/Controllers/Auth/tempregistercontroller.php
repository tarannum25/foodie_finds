<?php

namespace App\Controllers\Auth;

use Fantom\Session;
use Fantom\Controller;

class RegisterController extends Controller
{
	protected function index()
	{
		$this->view->render("Auth/Register/index.php");
	}

	protected function store()
	{
		// 1. Validate form
		// 2. Populate user data in user model
		// 3. Save the model in the database
		// 4. Redirect to login




