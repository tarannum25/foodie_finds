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
         $this->view->render('User/Orderhistory/index.php');


        // if (!$user) {
        //     redirect('auth/login');
        // }

        
        // $orders = Order::where('user_id', $user->id);
                       

        // $this->view->render('User/Orderhistory/index.php');
    }



    protected function before()
    {
        return (new AuthMiddleware)();
    }
}
