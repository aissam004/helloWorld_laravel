<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Rules\Lowercase;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){

        $posts=Post::orderBy('created_at')->get();

        return view('welcome',compact('posts'));
    }
    public function show($id){

        $post=Post::findOrfail($id);

        return view('post',compact('post'));
    }
    public function create(){

        return view('create');
    }
    public function store(Request $request){

        $validated=$request->validate([
           'title' => ['required','min:5','max:30',new Lowercase()],
           'content'=> 'required'
       ]);

//        $post =new Post();
////        $post->title=$request->title;
////        $post->content=$request->input("content");
////        $post->save();

        Post::create([
            'title' => $request->title,
            'content'=>$request->input('content')
        ]);
        return view('create');
    }
}
