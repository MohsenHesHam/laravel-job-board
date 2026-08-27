<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $post=Post::paginate (5);
        return view('post/index', ['title'=>$post]);
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          Post::factory(5)->create();
        return response([
            "massage"=>"Successfully Created !!",
            "postes"=> "5"
        ]
        , 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post=Post::find($id);
        //return view('/components/show',['post'=>$post,"pagetitle"=>$post->title]);
        return response([
            "massage"=>"found the post record",
            "title"=>"$post->title",
            "body"=>"$post->body",
            "auther"=>"$post->auther",
            
            
            
            ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Post::destroy($id);
        return response([
            "massage"=> "deleted successfully!!",
        
            ],204);
        
    }
}
