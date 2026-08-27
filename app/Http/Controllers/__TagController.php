<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
      public function index(){

    $tag=Tag::all();
    return view('post/index', ['tags'=>$tag]);
    

    }
     public function create(){

        // Tag::create([
        //     'name'=>'sofware',
        
        // ]);

         tag::factory(25)->create();
        return redirect('blog');
    }
    
    public function post_tag(){
        $post1=Post::find(1);
         $post2=Post::find(2);
         $post1->tags()->attach([1,1]);   
          $post2->tags()->attach([2,1]);

          return response()->json([
            'post1'=>$post1->tags,
            'post2'=>$post1->tags

          ]);
    }

    // public function record($id){

    //     $post=Post::find($id);
    //     return view('/components/show',['post'=>$post,"pagetätle"]=>"=>$post->title]);
    // }
    

}
