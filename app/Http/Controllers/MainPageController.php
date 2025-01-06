<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes;
use App\Slider;
use App\Text;
use App\News;
use App\Services;
use Cookie;
use App;


class MainPageController extends Controller
{
    public function index(){


        $slider = Slider::orderBy('sort','ASC')->get();

        $about = Text::find(1);
        
        $services = Services::orderBy('sort','ASC')->get();

        $news = News::orderBy('date','DESC')->take(6)->get();

        $essey = Text::whereIn('page',['მემარცხენე','იდეოლოგიური','მემარჯვენე'])->orderBy('sort','ASC')->get();

    	$data = array(
    		'slider' => $slider,
            'about' => $about,
            'services' => $services,
            'news' => $news,
            'essey' => $essey,
    	);

    	return view('page.index')->with($data);
    }


}
