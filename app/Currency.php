<?php

namespace App;


class Currency
{
    public function currency($currencyString){
    	
    	$replace_array = array(
                            '<table border="0">',
                            '</table>',
                            '<td><img  src="https://www.nbg.gov.ge/images/green.gif"></td>',
                            '<td><img  src="https://www.nbg.gov.ge/images/red.gif"></td>',
                            '<tr>',
                            '</tr>',
                            '<td>',
                            '/\s+/'
                        );
	    $array_currency  =array();

	    $feeds = array(
	        "http://www.nbg.ge/rss.php"
	    );
	    
	    $currency = $currencyString;
	    $itemKey  = 0;
	    
	    $entries = array();
	    foreach($feeds as $feed) {
	        $xml = simplexml_load_file($feed);
	        $entries = array_merge($entries, $xml->xpath("//item"));
	    }
	    
	    usort($entries, function ($feed1, $feed2) {
	        return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
	    });


	    foreach($entries as $entry){
	        foreach ($replace_array  as $value) {
	           $entry->description = str_replace($value, '', $entry->description);
	        }
	        $entry->description = str_replace('</td>', ",", $entry->description);

	    }

	    $array_currency = explode(",",$entry->description);

	    foreach ($array_currency as $key => $value) {
	        if (strpos($value, $currency) != false) $itemKey=$key;
	    }
	    
	    $currencyValue = $array_currency[$itemKey+2];
		
    
		return $currencyValue;
    }


}