<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function test($id)
    {
        $products = Product::find($id);
        return view('front.product.product_detail',compact('products'));
    }

    public function addCart(Request $request)
    {

        $product=Product::find($request->id);

        if ($product){

            \Cart::add(array(
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,

                    'attributes' => array(),
            ));

            $cartTotalQuantity = \Cart::getTotalQuantity();
           
            return  $cartTotalQuantity;
        }
        else{
            return 'false';
        }
    }

}
