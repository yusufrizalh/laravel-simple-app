<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // $posts = Post::get(); 
        // $posts = Post::paginate(2); 
        // $posts = Post::simplePaginate(2); 
        // return view('posts/index', ['posts' => $posts]); 
        return view('posts/index', [
            'posts' => Post::latest()->paginate(3), 
        ]);
    }

    public function show(Post $post) {  // untuk Read more 
        return view('posts/show', compact('post'));
    }

    public function create() {
        return view('posts/create'); 
    }

    public function store(Request $request) {
        $post = new Post;   // model 
        $post->title = $request->title; // This is my post 
        $post->slug = \Str::slug($request->title); // this-is-my-post 
        $post->body = $request->body;
        $post->save();  

        return redirect()->to('/posts'); 
    }

}
