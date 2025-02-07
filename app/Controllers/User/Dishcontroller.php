<?php

namespace App\Controllers\Auth;

use App\Middlewares\GuestMiddleware;
use App\Support\Authentication\Auth;
use App\Support\Authentication\Authentication;
use App\Support\Validations\AuthValidator;
use App\Support\Validations\Validations;
use Fantom\Controller;
use Fantom\Session;


class DishController extends Controller
{
    public function index() {
        $starters = Dish::where('category', 'starters')->get(); 
      
        $this->view->render('User/Home/index.php');;
    }

}