<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/home', 'HomeController@index');

// Posts
Route::get('/post/new', ['as'=> 'new_post', 'uses' => 'PostsController@write'] )->middleware('auth');
Route::get('/post/{post}', ['as' => 'view_post', 'uses' => 'HomeController@view']);
Route::post('/post/add', ['as' => 'new_post_add' , '' => 'PostsController@add']);

// Products
Route::get('/product/new', ['as'=> 'new_product', 'uses' => 'ProductsController@create'])->middleware('auth');
Route::post('/product/add', ['as'=> 'new_product_add', 'uses' => 'ProductsController@add'])->middleware('auth');

Route::get('/product/{product}/edit', ['as'=> 'edit_product', 'uses' => 'ProductsController@edit'])->middleware('auth');
Route::get('/product/{slug}', ['as'=> 'view_post', 'uses' => 'ProductsController@view']);
Route::get('/product/{product}/buy', ['as'=> 'buy_product', 'uses' => 'ProductsController@buy']);


// dashboard
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');