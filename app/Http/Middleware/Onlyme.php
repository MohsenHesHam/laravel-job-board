<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Onlyme
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (auth()->user()->email === 'mohsen123@gmail.com') {
                return $next($request);
            }

           
            return response()->json([
                'message' => 'access denied'
            ], 403);
      
        }

        return redirect('/login');
    }
}