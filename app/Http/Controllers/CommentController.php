<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($id,Request $request){

        Comment::create([
            'content'=>$request->comment,
            'post_id'=>$id
        ]);
        return redirect()->route('post.show',[$id]);
    }
}
