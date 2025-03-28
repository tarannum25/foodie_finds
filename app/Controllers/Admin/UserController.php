<?php

namespace App\Controllers\Admin;

use App\Middlewares\AdminAuthMiddleware;
use Fantom\Controller;

/**
 * UserController
 */
class UserController extends Controller
{
	protected function index()
	{
		// URL: /admin/user/index    OR  /admin/user
		// User list
		return $this->view->render("Admin/User/index.php");
	}

	protected function show()
	{
		// URL: /admin/user/USER_ID/show
		// User detail / show
		return $this->view->render("Admin/User/show.php");
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
		return $this->view->render("Admin/User/edit.php");
	}

	protected function before()
	{
		return (new AdminAuthMiddleware)();
	}
}