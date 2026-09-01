<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){ //go to index

            return view('index');
    }

     public function about (){ //go to about

            return view('about');
    }

     public function contact (){//go to index

            return view('contact');
    }
     public function blog (){//go to index

            return view('post/index');
    }

    
}
