<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\Gallery;
use App\Services;
use App;

class TextController extends Controller
{
    public function show($id){

        $about=Text::findOrFail($id);

    	$data = array(
    		'about' => $about,
    	);

    	return view('text.show')->with($data);
    }


     public function about_us(){

        $about=Text::findOrFail(2);
        $services = Services::orderBy('sort','ASC')->get();

    	$data = array(
    		'about' => $about,
            'services' => $services,
    	);

    	return view('text.about')->with($data);
    }

}
