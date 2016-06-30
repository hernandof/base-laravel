<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;
use App\Post;

class DashboardController extends Controller
{
    public function index()
    {
    	$products = Product::get();
    	$posts = Post::get();
    	
    	return view('dashboard.index', [
    		'products' => $products ,
    		'posts' => $posts ,
    	]);
    }
}
