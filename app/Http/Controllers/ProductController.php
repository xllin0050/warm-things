<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productTypes = ProductType::get();
        return view('admin.product.create',compact('productTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        // $request->hasFile() 查詢是否有檔案
        if($request->hasFile('img')){
            //disk 指定位置
            //put 存放檔案
            $filePath = Storage::disk('public')->put('/images/product',$request->file('img'));
            //更新產品資料中的img
            $product->img = Storage::url($filePath);
            $product->save();
        }else{
            $product->img = '/images/noimg.jpg';
            $product->save();
        }
     
        return redirect('/admin/product');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $productTypes = ProductType::get();
        return view('admin.product.edit',compact('product','productTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
         //1.讀取舊檔案
         $product = Product::find($id);
         $product->type_id = $request->type_id;
         $product->name = $request->name;
         $product->price = $request->price;
         $product->description = $request->description;
         //2.判斷是否有新圖片
         if($request->hasFile('img')){
             // 判斷舊圖片檔案是否存在
             if(file_exists(public_path().$product->img)){
                 // 由於Stroage::delete() 判斷的根目錄與我們存取資料的位置不同
                 // 故改成使用File::delete()
                 File::delete(public_path().$product->img);
             }
             //儲存圖片取得路徑
             $filePath = Storage::disk('public')->put('/images/product',$request->file('img'));
             //更新圖片路徑
             $product->img = Storage::url($filePath);
         }
         $product->save();
 
         
 
         return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product');
    }

}
