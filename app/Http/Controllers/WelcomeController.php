<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\News;
use App\Welcome;
use DB;
use App;

class WelcomeController extends Controller
{
    
    public function index(Request $request){
       
        $welcome = Welcome::orderBy('date','DESC')->paginate('21');

        $data = array(
            'welcome'    => $welcome
        );
      
        return view('welcome.index')->with($data);
    }
  


}
