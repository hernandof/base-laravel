<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = new Product;
        $productsAvailableForSell = $products->active()->inStock();
        return view('products.index', ['products', $productsAvailableForSell->get()]);
    }

    public function view($slug)
    {
    	$product = Product::where(['slug'=> $slug])->first();
    	return view('products.view', [
    		'product' => $product
		]);
    }

    public function create(){
    	return view('products.new');
    }

    public function add(Request $request){

    }
}
