<?php

namespace App\Http\Controllers;

use App\Models\Post ;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

    $post=Post::paginate (5);
    return view('post/index', ['title'=>$post]);
    

    }
     public function create(){

        // Post::create([
        //     'title'=>'my second post',
        //     'body'=>'agant 47',
        //     'auther'=>'mohsen',
        //     'published'=>true
        // ]);
         Post::factory(5)->create();
        return response([
            "massage"=>"Successfully Created !!",
            "postes"=> "5"
        ]
        , 200);
    }
    

    public function record($id){

        $post=Post::find($id);
        //return view('/components/show',['post'=>$post,"pagetitle"=>$post->title]);
        return response([
            "massage"=>"found the post record",
            "title"=>"$post->title",
            "body"=>"$post->body",
            "auther"=>"$post->auther",
            
            
            
            ],200);
    }
    

}
