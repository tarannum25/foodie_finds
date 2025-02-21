<?php

namespace App\Controllers\User;
use App\Middlewares\AuthMiddleware;
use App\Models\Order;
use App\Support\Authentication\Auth;
use Fantom\Controller;


class OrderHistoryController extends Controller
{
     
    protected function index()
    {

        $user = Auth::user(); 
        if (!$user) {

        $this->view->render('auth/login'); 
                }
    

   
        $orders = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

          
        $this->view->render('user/orderhistory/index.php');
    }

       protected function before()
       {
           return (new AuthMiddleware)();
       }

}


       




