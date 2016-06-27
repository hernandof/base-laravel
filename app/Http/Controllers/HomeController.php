<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Product;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $products = new Product;
        $productsAvailableForSell = $products->active()->inStock();

        return view('home', [
            'products' => $productsAvailableForSell->get(),
            'posts' => $posts
        ]);
    }

    function view(Post $post)
    {
        return view('posts.post', ['post' => $post]);
    }
    
}
