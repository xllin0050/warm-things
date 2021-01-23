<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function product()
    {
        $products = Product::get();
        $productTypes = ProductType::get();
        return view('front.product.product_index',compact('products','productTypes'));
    }

    public function checkout()
    {
        $carts=\Cart::getContent();
        return view('front.checkout.index',compact('carts'));
    }

}
