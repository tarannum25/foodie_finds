<?php

namespace App\Controllers\Auth;

use App\Middlewares\GuestMiddleware;
use App\Support\Authentication\Auth;
use App\Support\Authentication\Authentication;
use App\Support\Validations\AuthValidator;
use App\Support\Validations\Validations;
use Fantom\Controller;
use Fantom\Session;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required|string|max:255',
            'description'  => 'nullable|string',
            'price_mp'     => 'required|numeric',
            'price_sp'     => 'required|numeric',
            'image_url'    => 'required|string',
            'category_id'  => 'required|integer',
        ]);

        $product = Product::make($data);
        $product->save();

        
    }
}
