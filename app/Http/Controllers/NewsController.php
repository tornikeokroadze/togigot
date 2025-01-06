<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\News;

use DB;
use App;

class NewsController extends Controller
{
     public function index(Request $request){
       
       $news    = News::orderBy('date','DESC')->paginate('21');

        $data = array(
            'news'    => $news
        );
      
        return view('news.index')->with($data);
    }
  

     public function show($id, Request $request) {   
       
        $news = News::findorfail($id);  
      

        $data = array(
            'news' => $news
        );
    
        return view('news.show')->with($data);
       
    }


}
