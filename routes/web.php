<?php

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/detail', 'HomeController@detail')->name('detail');
Route::get('/cart', 'HomeController@cart')->name('cart');
Auth::routes();
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',[
        'as'=>'dashboard',
        'uses'=>'ProductController@getDashboard'
    ]);
    Route::group(['prefix'=>'product'],function(){
        Route::get('list',[
            'as'=>'listproduct',
            'uses'=>'ProductController@getProduct'
        ]);
        Route::get('add',[
            'as'=>'add',
            'uses'=>'ProductController@getAddProduct'
        ]);
        Route::post('add',[
            'as'=>'add',
            'uses'=>'ProductController@postAddProduct'
        ]);
    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',[
            'as'=>'list',
            'uses'=>'CategoryController@getCategory'
        ]);
        Route::get('add',[
            'as'=>'add',
            'uses'=>'CategoryController@getAddCategory'
        ]);
        Route::post('add',[
            'as'=>'add',
            'uses'=>'CategoryController@postAddCategory'
        ]);
    });
});
