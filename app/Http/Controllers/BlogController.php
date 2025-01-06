<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\News;
use App\Blog;
use DB;
use App;

class BlogController extends Controller
{
     public function index(Request $request){
       
        $blog = Blog::orderBy('date','DESC')->paginate('21');

        $data = array(
            'blog'    => $blog
        );
      
        return view('blog.index')->with($data);
    }
  

     public function show($id, Request $request) {   
       
        $blog = Blog::findorfail($id);  
      

        $data = array(
            'blog' => $blog
        );
    
        return view('blog.show')->with($data);
       
    }
}
