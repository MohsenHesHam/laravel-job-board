<?php

namespace App\Http\Controllers;

use App\Http\Requests\postvalid;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts=Post::latest()->cursorPaginate(5);
        return view('post/index', ['posts'=>$posts]);
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Post::factory(5)->create();
        return view('/post/createpost');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(postvalid $request)
    {
       $post=new Post();
       $post->title=$request->input('title');
       $post->body=$request->input('body');
       $post->auther=$request->input('auther');
       $post->published=$request->has('published');

       $post->save();

       return redirect('/post')->with('success','Created Successflly!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('components.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post/editpost');
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
      return redirect()->route('posts.index');
        
    }
}
