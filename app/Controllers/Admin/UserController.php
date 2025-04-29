<?php

namespace App\Controllers\Admin;

use App\Config;
use App\Middlewares\AdminAuthMiddleware;
use App\Models\User;
use Fantom\Controller;
use Fantom\Session;

/**
 * UserController
 */
class UserController extends Controller
{
	protected function index()
	{
		// URL: /admin/user/index    OR  /admin/user
		// User list

		$users = User::all()->get();

		return $this->view->render("Admin/User/index.php", [
			'users' => $users,
		]);
	}

	protected function show()
	{
		// URL: /admin/user/USER_ID/show
		// User detail / show


		$user = User::find($id);

		if (!$user) {
			Session::flash("error", "User not found!");
			redirect("/admin/user");
			return;
		}

		return $this->view->render("Admin/User/show.php", [
			'user' => $user,
		]);
	}

	protected function create()
	{
		// URL: /admin/user/create
		// User create
		return $this->view->render("Admin/User/create.php");
	}

	protected function edit()
	{
		// URL: /admin/user/USER_ID/edit
		// User edit

		$user = User::find($id);

		if (!$user) {
			Session::flash("error", "User not found!");
			redirect("/admin/user");
			return;
		}

		return $this->view->render("Admin/User/edit.php", [
			'user' => $user,
		]);
	}

	public function store()
    {
        $user = new User();    

        // 3. Fill the model with data
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->phone = $_POST['phone'];
        $user->email = $_POST['email'];
        $user->password = password_hash(Config::get('default_password'), PASSWORD_DEFAULT);

        // 4. Save the model in DB
        $user->save();

        // 5. Redict to user list page with Success message
        Session::flash("success", "User created scuccessfully!");
        redirect("admin/user/index");
    }


	protected function before()
	{
		return (new AdminAuthMiddleware)();
	}
}