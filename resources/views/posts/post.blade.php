@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-default">

                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
                    {{ $post->body }}
                </div>
                <div class="panel-footer">
        		    <div class="row">
        		        <div class="col-md-12 small">
        		        	<div class="pull-left"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> {{ $post->user->username }}</div>
                            <div class="pull-right">
                            	{{$post->created_at}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
