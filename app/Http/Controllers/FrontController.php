<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function product()
    {
        $products = Product::get();
        return view('front.product.test_index',compact('products'));
    }

    public function checkout()
    {
        $carts=\Cart::getContent();
        return view('front.checkout.index',compact('carts'));
    }

}
