<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Rules\Lowercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

        $path = $request->file('avatar')->store('avatars',"public");

        $validated=$request->validate([
           'title' => ['required','min:5','max:30',new Lowercase()],
           'content'=> 'required'
       ]);

//        $post =new Post();
////        $post->title=$request->title;
////        $post->content=$request->input("content");
////        $post->save();

        $post=Post::create([
            'title' => $request->title,
            'content'=>$request->input('content')
        ]);

        $image = new Image();
        $image->path=$path;
        $post->image()->save($image);
        return view('create');
    }
}
