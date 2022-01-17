<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
//        $post =new Post();
////        $post->title=$request->title;
////        $post->content=$request->input("content");
////        $post->save();

        Post::create([
            'title' => $request->title,
            'content'=>$request->content
        ]);
        return view('create');
    }
}
