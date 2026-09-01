<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
    $credentials= $request->only('email','password');   
    $token=auth('api')->attempt($credentials);
    if(!$token){
        return response(["massage"=> "unautherized user"],401);

    }
    return Response([
        "access_token"=>$token,
        "expires_in"=> auth('api')->factory()->getTTL()*60
    ]);


    }  

    

       public function me(){
        $user=auth('api')->user();
        return response()->json([$user],200);
    
    }
       public function refresh(){
        $refreshToken =auth('api')->refresh();
         return response([
        "access_token"=>$refreshToken,
        "expires_in"=> auth('api')->factory()->getTTL()*60
    ]);
    
    }
  

     public function logout(){
            auth('api')->logout(true);
            return response()->json(["massage"=>"logout succcessfully!!"],200);

    }
}
