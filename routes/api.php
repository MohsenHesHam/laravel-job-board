<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;



Route::post('/blog/create', [PostController::class, 'create']); //create posts
Route::get('/blog/{id}', [PostController::class, 'record']);


Route::post('/comment', [CommentController::class, 'create']);   //create Comments
Route::get('/getcomment', [CommentController::class, 'index']);


Route::post('/create/tag', [TagController::class, 'create']);  //create tags
Route::get('/create/tag/tag_post', [TagController::class, 'post_tag']); //create relation
