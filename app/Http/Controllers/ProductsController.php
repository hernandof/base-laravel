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

    public function edit(Product $product)
    {
    	return $product;
    }

    public function add(Request $request){
    	$product = new Product;
    	$product->title = $request['title'];
    	$product->slug = str_slug(' ' . uniqid() . ' ' . $request['title'], '-');
    	$product->image = uniqid();
    	$product->description = $request['description'];
    	$product->body = $request['body'];
    	$product->stock = $request['stock'];
    	$product->price = $request['price'];
    	$product->active = $request['active'] == 1;
    	$product->save();

    	return redirect('/product/' . $product->slug );
    }
}
