<?php

namespace App\Controllers\Auth;

use App\Middlewares\GuestMiddleware;
use App\Models\User;
use App\Support\Authentication\Auth;
use App\Support\Validations\AuthValidator;
use Fantom\Controller;
use Fantom\Session;

/**
 * RegisterController
 */
class RegisterController extends Controller
{
	protected function index()
	{
		$this->view->render("Auth/Register/index.php");
	}

	protected function store()
	{
		// 1. Validate form
		$v = AuthValidator::validateRegistration();
		if ($v->hasError()) {
			redirect('auth/register/index');
		}

		// 2. Populate user data in user model
		// 3. Save the model in the database
		// 4. Redirect to login

		// 2. Pouplate the user data in User model class
		$user = new User();
		$user->first_name 	= $_POST['first_name'];
		$user->phone 		= $_POST['phone'];
		$user->email 		= $_POST['email'];
		$user->password 	= password_hash($_POST['password'], PASSWORD_DEFAULT);

		// 3. Save user
		if (! $user->save()) {
			Session::flash("error", "Failed to create your account, try later.");
			redirect("auth/register");
		}

		// 4. Redirect to login
		if (!Auth::attempt($user->email, $_POST['password'])) {
			Session::flash('error', 'Invalid email or password.');
			redirect('auth/login');
		}

		Session::flash('success', "Welcome {$user->first_name} to Foodie Finds – Where every craving finds its delight! 🍔🍕🍰");
		redirect('user/home/index');
	}

	protected function before()
	{
		return (new GuestMiddleware)();
	}

}