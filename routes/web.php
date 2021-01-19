<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product','FrontController@product');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
    Route::group(['prefix'=>'product'],function(){
        Route::get('/','ProductController@index')->name('product');
        Route::get('/create','ProductController@create');
        Route::post('/store','ProductController@store');
        Route::get('/edit/{id}','ProductController@edit');
        Route::post('/update/{id}','ProductController@update');
        Route::get('/destroy/{id}','ProductController@destroy');
    });

    Route::group(['prefix'=>'product_type'],function(){
        Route::get('/','ProductTypeController@index');
        Route::get('/create','ProductTypeController@create');
        Route::post('/store','ProductTypeController@store');
        Route::get('/edit/{id}','ProductTypeController@edit');
        Route::post('/update/{id}','ProductTypeController@update');
        Route::get('/destroy/{id}','ProductTypeController@destroy');
    });

    Route::group(['prefix'=>'inform'],function(){
        Route::get('/','InformController@index');
        Route::get('/create','InformController@create');
        Route::post('/store','InformController@store');
        Route::get('/edit/{id}','InformController@edit');
        Route::post('/update/{id}','InformController@update');
        Route::get('/destroy/{id}','InformController@destroy');
    });

});
