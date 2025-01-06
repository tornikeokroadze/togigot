<?php

namespace App;
use App\Gallery;
use App\UserQuestion;
use App\User;
use App;

class Attributes
{

    public function checkUserQut($user_id, $q_id){
        $chek = UserQuestion::where('user_id',$user_id)->where('question_id',$q_id)->get();
        return count($chek);
    }

    public function checkUserQutItem($user_id, $q_id){
        $chek = UserQuestion::where('user_id',$user_id)->where('question_item_id',$q_id)->get();
        return count($chek);
    }
    
    //გალერიიდან მტავრი სურათი
    public function gallery($appid){

        $gallery = Gallery::where('app_id',$appid)->where('main_status',1)->first();

        if($gallery) return Gallery::where('app_id',$appid)->where('main_status',1)->firstOrFail();
        else return false;
    }

   
  
      
    //ცვლადის დეკოდირება
    public function encodeVariable($variable){

        //ჩუმათობის პრინციპით აპლიკაციისთვის უსაფრტხო სტრინგი (უასფრთხოების სიმძლავრე)
        $safe = 94000185;

        //შიფრისთვის გამზადება
        $encode = $variable * $safe;
        $result = base64_encode($encode);

        return $result;
    }

    //ცვლადის გაშიფრვა
    public function decodeVariable($encode){

        $safe = 94000185;

        //შიფრისთვის გამზადება
        $encode = base64_decode($encode);
        $result = $encode/$safe;

        return $result;
    }

     public function ON($date,$n){

        return 'ORDER-'.$n;

    }

    
}