<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Auth;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function view(Post $post)
	{
		return view('posts.post', ['post' => $post]);
	}

	public function write(Request $request){
		if($request->user()){
			return view('posts.new');
		}
	}

	public function add(Request $request){
		if($request->user()){
			// agrego el post
			$post = new Post();
			$post->title = $request['title'];
			$post->body = $request['body'];
			Auth::user()->posts()->save($post);
			return redirect('/home');
		} else{

		}
	}
}
