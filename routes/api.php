<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\PostApiController;
use Illuminate\Support\Facades\Route;


        Route::get('index',[PostApiController::class,'index']);

Route::prefix('auth')->group(function(){

        Route::post('login',[AuthController::class,'login']);

    Route::middleware('auth:api')->group(function(){
        Route::get('me',[AuthController::class,'me']);
        Route::get('logout',[AuthController::class,'logout']);
});
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('post', PostApiController::class)->except('index');
});




// Route::post('/blog/create', [PostController::class, 'create']); //create posts
// Route::get('/blog/{id}', [PostController::class, 'record']);


// Route::post('/comment', [CommentController::class, 'create']);   //create Comments
// Route::get('/getcomment', [CommentController::class, 'index']);


// Route::post('/create/tag', [TagController::class, 'create']);  //create tags
// Route::get('/create/tag/tag_post', [TagController::class, 'post_tag']); //create relation
