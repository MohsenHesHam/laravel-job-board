<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use PHPUnit\Metadata\Group;

Route::get('/', [IndexController::class, 'index']);  
Route::get('/index', [IndexController::class, 'index']); 
Route::get('/contact', [IndexController::class, 'contact']); 
      
Route::get('/blog', [IndexController::class, 'blog']); 
Route::get('/login', [AuthController::class, 'ShowLogIn']); 
Route::post('/login', [AuthController::class, 'LogIn'])->name('login'); 
Route::get('/signin', [AuthController::class, 'ShowSignIn']); 
Route::post('/signin', [AuthController::class, 'SignIn']); 
Route::get('/logout', [AuthController::class, 'LogOut']); 


Route::middleware('auth')->group(function(){

Route::resource('post',PostController::class);

Route::resource('comment',CommentController::class);

Route::resource('tag',TagController::class);
});

route::middleware('Onlyme')->group(function(){
Route::get('/about', [IndexController::class, 'about']); 


});














// Route::get('/blog', [PostController::class, 'index']);          //go to blog
// Route::get('/blog/create', [PostController::class, 'create']); //create posts
// Route::get('/comment', [CommentController::class, 'create']);   //create Comments
// Route::get('/create/tag', [TagController::class, 'create']);  //create tags
// Route::get('/create/tag/tag_post', [TagController::class, 'post_tag']); //create relation

// Route::get('/getcomment', [CommentController::class, 'index']);

// Route::get('/blog/{id}', [PostController::class, 'record']);

//Route::get('/job', [JobController::class, 'index']);


//Route::get('/', [JobController::class, 'index']);