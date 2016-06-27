@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    	<div class="col-md-6 col-md-offset-2">
    		<h3>{{ $product->title }}</h3>
    		<img class="img-responsive" src="http://placehold.it/600x300">
    		<p class="lead">{{$product->description}}</p>
    		<p>{!! nl2br($product->body) !!}</p>
    		<p>En stock: {{$product->stock}}</p>
    		<p>Precio: ${{$product->price}}</p>
    	</div>
    </div>
</div>

@stop