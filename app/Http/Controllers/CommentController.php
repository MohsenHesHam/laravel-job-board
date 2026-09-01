<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
         $comment=Comment::all();
        return redirect("/comments/commect");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          Comment::factory(5)->create();
        return redirect("/comments/createComment");
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
        $comment=comment::find($id);
         return view('/comment/comment',['comment'=>$comment,"pagetitle"=>$comment->title]);
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
        Comment::destroy($id);
        return redirect("post/index");
    }
}
