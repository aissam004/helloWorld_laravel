<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TagController extends Controller
{
    public function show($id){
        $tag=Tag::findOrfail($id);

        return view('tag',compact('tag'));
    }
}
