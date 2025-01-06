<?php

namespace App;


class Security
{
    public function parse($string){
    	$string  = strip_tags($string);                        
		$string  = stripslashes($string);                    
		$string  = htmlspecialchars($string);                
		return $string;
    }


}
