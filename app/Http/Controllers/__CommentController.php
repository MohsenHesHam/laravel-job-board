<?php

namespace App\Http\Controllers;

use App\Models\Comment ;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

    $comment=Comment::all();
    //return view('comments/comment', ['comment'=>$comment]);
    return response([
            "massage"=>"Successfully  !!",
            "data"=> $comment
        ]
        , 200);
    
    }


     public function create(){

        // comment::create([
            
        //     'content'=>'agant 747',
        //     'auther'=>'mohsen hesham',
        //     'post_id'=>2
           
        // ]);
        Comment::factory(5)->create();
        return response([
            "massage"=>"Successfully Created !!",
            "postes"=> "5"
        ]
        , 200);
    }
    

    // public function record($id){

    //     $comment=comment::find($id);
    //     return view('/components/comment',['comment'=>$comment,"pagetitle"=>$comment->title]);
    // }
    

}
