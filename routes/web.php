<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

Route::get('/', [IndexController::class, 'index']);  //go to index
Route::get('/index', [IndexController::class, 'index']);  //go to index
Route::get('/contact', [ContactController::class, 'contact']);  //go to contact
Route::get('/about', [AboutController::class, 'about']);        //go to about
Route::get('/blog', [PostController::class, 'index']);          //go to blog


Route::get('/blog/create', [PostController::class, 'create']); //create posts
Route::get('/comment', [CommentController::class, 'create']);   //create Comments
Route::get('/create/tag', [TagController::class, 'create']);  //create tags
Route::get('/create/tag/tag_post', [TagController::class, 'post_tag']); //create relation

Route::get('/getcomment', [CommentController::class, 'index']);

Route::get('/blog/{id}', [PostController::class, 'record']);


//Route::get('/job', [JobController::class, 'index']);


//Route::get('/', [JobController::class, 'index']);