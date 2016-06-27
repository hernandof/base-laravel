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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Posts
Route::get('/post/new', 'PostsController@write');
Route::get('/post/{post}', 'HomeController@view');
Route::post('/post/add', 'PostsController@add');

// Products
Route::get('/product/new', 'ProductsController@create');
Route::get('/product/{slug}', 'ProductsController@view');
