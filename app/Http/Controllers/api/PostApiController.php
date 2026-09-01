<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $data=Post::paginate (5);
        //  return response([
        //     "massage"=>"SUCCESS",
        //     "title"=>"$data->title",
        //     "body"=>"$data->body",
        //     "published"=>"$data->published",
        //     "auther"=>"$data->auther",
        //  ],200);

         return response(["massage"=>"SUCCESS",$data],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $data=Post::create($request->all());
        return response([
            "massage"=>"Successfully Created !!",
            "data"=> $data
        ]
        , 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Post::find($id);
        if(!$data){
        return response(["massage"=>"Post NOT FOUND!!"] , 404);

        }
        return response([
            "massage"=>"found the post record",
           "data"=>$data
            
            
            ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=post::find($id);
        if(!$data){
        return response(["massage"=>"Post NOT FOUND!!"] , 404);

        }
        
        $data->update($request->all());
        return response(["massage"=>"Post Updated Successfully!!","data"=>$data] , 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=post::find($id);
        if(!$data){
        return response(["massage"=>"Post NOT FOUND!!"] , 404);

        }
        $data->delete();
        //post::delete($id);
        return response(["massage"=>"Post Deleted Successfully!!"] , 204);
        
    }
}
