<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Attributes;
use App\Contact;
use App\Text;
use App\Metas;
use App\Cities;
use Cookie;

use App;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

          view()->composer('*', function ($view) {
             $lang = App::getLocale();
             $title = 'title_'.$lang; 
             $text = 'text_'.$lang;
             $desc = 'desc_'.$lang;
             $keywords = 'keywords_'.$lang;
             $button1_text = 'button1_text_'.$lang;
             $address = 'address_'.$lang;

             $contact = Contact::get()->first();
             $metas = Metas::get()->first();
             

             $cities = Cities::orderBy('sort','ASC')->get();

            $data = array(
                'lang' => $lang,
                'title' => $title,
                'text' => $text,
                'desc' => $desc,
                'keywords' => $keywords,
                'button1_text' => $button1_text,
                'address' => $address,
                'contact' => $contact,
                'metas' => $metas,
                'cities' => $cities,
                 
            );

            view()->share($data);
        } );


        //მენიუ
        view()->composer('inc.menu', function ($view) {
            
            $lang = App::getLocale();
            
            
             if($lang=='en'){$choosen_lang = 'Eng'; }
             elseif ($lang=='ka'){$choosen_lang = 'ქარ'; }
             else{$choosen_lang = 'Рус';}

              //ქუქიის შექმნა
            if(\Request::cookie('cart')==null){
                $value = str_replace('.', null, \Request::ip());
                $value = $value.time().uniqid();
                Cookie::queue(cookie('cart', $value, $minute = ( 60 * 60 * 28)));
            }
                
            $cartCookie =  \Request::cookie('cart');
            $ip = \Request::ip();

            
            $data = array(
                'choosen_lang'    => $choosen_lang,
                
            );

            $view->with($data);
        } );


      

        //ფუტერი
        view()->composer('inc.footer', function ($view) {

            $footer_pages = Text::where('main',0)->orderBy('sort','ASC')->get(); 

            $data = array(
                'footer_pages' => $footer_pages,
            );

            $view->with($data);
        } );



    }
}
