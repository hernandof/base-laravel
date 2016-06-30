@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6">
            @foreach($products as $product)
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/600x200" alt="{{ $product->title }}">
                    <div class="caption">
                        <h3>{{ $product->title }}</h3>
                        <p><i>{{ $product->description }}</i></p>
                        <p><a href="/product/{{$product->slug}}" class="btn btn-success" role="button">Comprar</a></p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/post/{{$post->id}}">{{ $post->title }}</a></div>
                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 small">
                            <div class="pull-left">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i> {{ $post->user->username }}
                            </div>
                            <div class="pull-right">
                                {{$post->created_at}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
