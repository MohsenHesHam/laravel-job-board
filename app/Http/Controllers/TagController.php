<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $tag=Tag::all();
        return view('post/index', ['tags'=>$tag]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        tag::factory(25)->create();
        return redirect('blog');
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
        return view('/components/show',['post'=>$post,"pagetätle"=>$post->title]);
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
        //
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
}
