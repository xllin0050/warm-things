<?php

namespace App\Http\Controllers;

use App\Inform;
use App\Order;
use App\Product;
use App\NewArrival;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller

{
    public function aboutUs()
    {
        return view('front.aboutus.index');
    }

    public function adultUtensils()
    {
        return view('front.adultutensils.index');
    }


    public function newsProduct()
    {
        $newArrivals= NewArrival::get();
        return view('front.news.news', compact('newArrivals'));
    }

    public function newsShow()
    {
        $informs = Inform::get();
        
        return view('front.news.show', compact('informs'));
    }


    public function product()
    {
        $products = Product::get();
        $productTypes = ProductType::get();
        return view('front.product.product_index',compact('products','productTypes'));
    }

    public function productType($id)
    {
        $products = Product::where('type_id', $id)->get();
        $productTypes = ProductType::get();
        return view('front.product.product_index',compact('products','productTypes'));
    }

    public function checkout()
    {
        $carts=\Cart::getContent();
        return view('front.checkout.index',compact('carts'));
    }

    public function createorder()
    {
        $dt=Carbon::now();
        $order_number='DP'.$dt->year. $dt->month. $dt->day. $dt->hour. $dt->minute. $dt->second;
        // 建立訂單

        $cartCollection=\Cart::getContent();

        foreach($cartCollection as $item){
             $product = Product::find($item->id);
                $order= Order::create([
                    'user_id'=>Auth::user()->id,
                    'product_id'=>$product->id,
                    'name'=>$product->name,
                    'price'=>$product->price,
                    'qty'=>$item->quantity,
                    'img'=>$product->img,
                    'total_price'=>\Cart::getTotal(),
                    'order_number'=>$order_number,
                    'order_status'=>1,
                ]);

        }

        \Cart::clear();
        return redirect('/member');




    }

}
