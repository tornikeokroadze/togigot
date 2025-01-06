<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\News;
use App\Text;
use App\Essey;
use DB;
use App;

class EsseyController extends Controller
{
     public function index(Request $request){

        $id = $request->id;

        $text = Text::findorfail($id);
       
        $esseyItem = Essey::where('status',$text->page)->orderBy('date','DESC')->paginate(10);

        $essey = Text::whereIn('page',['მემარცხენე','იდეოლოგიური','მემარჯვენე'])->orderBy('sort','ASC')->get();

        $data = array(
            'esseyItem'    => $esseyItem,
            'essey'    => $essey,
            'text'    => $text,
            'id'    => $id,
        );
      
        return view('essey.index')->with($data);
    }
  

     public function show($id, Request $request) {   

        $id = $request->id;
        $eid = $request->eid;
       
        $essey = Essey::findorfail($eid);  

        $data = array(
            'essey' => $essey
        );
    
        return view('essey.show')->with($data);
       
    }


}
