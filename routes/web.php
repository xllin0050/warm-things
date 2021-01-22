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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth'], 'prefix'=>'member'],function(){
    Route::get('/{id}','MemberController@index')->name('userID');
    Route::post('/{id}','MemberController@update');
   

});

Route::group(['middleware'=>['auth','is.admin'],'prefix'=>'admin'],function(){
    
    Route::get('/', 'UserRegController@index');
    Route::get('/reg', 'UserRegController@showAdminRegistrationForm');
    Route::post('/reg', 'UserRegController@adminRegister')->name('adminRegister');

    Route::group(['prefix'=>'product'],function(){
        Route::get('/','ProductController@index');
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


    Route::group(['prefix'=>'report'],function(){
        Route::get('/','ReportController@index');
        Route::get('/create','ReportController@create');
        Route::post('/store','ReportController@store');
        Route::get('/edit/{id}','ReportController@edit');
        Route::post('/update/{id}','ReportController@update');
        Route::get('/destroy/{id}','ReportController@destroy');
    });

});
