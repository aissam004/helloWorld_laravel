<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'index'])->name('welcome');
Route::get('post/{id}',[PostController::class,'show'])->whereNumber('id')->name("post.show");
Route::get('posts/create',[PostController::class,'create'])->name("posts.create");
Route::post('posts/create',[PostController::class,'store'])->name("posts.store");

Route::post('post/{id}/comments/create',[CommentController::class,'store'])->name("comments.store");
Route::get('tags/{id}',[TagController::class,'show'])->name("tags.show");