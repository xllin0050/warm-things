<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function productDetail($id)
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
                    'quantity' =>$request->qty,
                    'attributes' => array(),
            ));

            $cartTotalQuantity = \Cart::getTotalQuantity();

            return  $cartTotalQuantity;
        }
        else{
            return 'false';
        }
    }

    public function delCart(Request $request)
    {
        // 刪除車子內符合ID的產品
        // $request->id
        \Cart::remove($request->id);
        // 抓出所有存在購物車產品的數量
        $cartTotalQuantity=\Cart::getTotalQuantity();
        // 返回購物車中產品總數
        return $cartTotalQuantity;
    }

    public function updateCart(Request $request)
    {
        \Cart::update($request->id,array(
            'quantity'=>array(
                'relative'=>false,
                'value'=>$request->qty

            ),
        ));

        $cartTotalQuantity=\Cart::getTotalQuantity();
        return $cartTotalQuantity;

    }
}
