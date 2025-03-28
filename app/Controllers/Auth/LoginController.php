<?php

namespace App\Controllers\Auth;

use Fantom\Session;
use Fantom\Controller;
use App\Middlewares\GuestMiddleware;
use App\Support\Authentication\Auth;
use App\Support\Validations\AuthValidator;

/**
 * LoginController
 */
class LoginController extends Controller
{
	protected function index()
	{
		$this->view->render("Auth/Login/index.php");
	}

	protected function authenticate()
	{
		$validator = AuthValidator::validateLogin();

		if ($validator->hasError()) {
			redirect('auth/login');
		}

		if (!Auth::attempt($_POST['email'], $_POST['password'])) {
			Session::flash('error', 'Invalid email number or password.');
			redirect('auth/login');
		}

		if (Auth::isAdmin()) {
			redirect('admin');
		} else {
			redirect('user');
		}
	}

	public function logout()
	{
		Auth::logout();
		redirect('/');
	}

	protected function before()
	{
		return (new GuestMiddleware)();
	}
}