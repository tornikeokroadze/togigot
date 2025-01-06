<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes;
use App\Contact;
use App\ContactLids;
use App;

class ContactController extends Controller
{
    public function index(){

        
        //შემოსული ენა
            $lang = App::getLocale();

            $contact = Contact::get()->first();

        $data = array(
            'contact' => $contact,
            'lang'    => '_'.$lang
        );

        return view('contact.index')->with($data);
    }


    public function message(Request $request){

        //აუცილებელი ველები
            $this->validate($request, [
                'name' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'max:100'],
                'message' => ['required', 'string', 'max:1500']
            ]);

        //გასაგზავნი ინფორმაცია
            $name = $request->input('name');
            $email = $request->input('email');
            $message = $request->input('message');

        //მომხარებელის აიპი მისამართი
            $ip = $request->ip();

        //ინფორმაციის შენახვა
            $lids = new ContactLids();
            $lids->name=$name;
            $lids->email=$email;
            $lids->message=$message;
            $lids->ip=$ip;
            $lids->save();


          /**წერილის გაგზვნა*/

          $contact = Contact::get()->first();

            $headers= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
            $headers .= 'From: ' . "\r\n"; 

            $subject = 'ახალი წერილი საიტიდან';
            $message = '
                        <p><u>ახალი წერილი საიტიდან</u></p>
                         
                        <div>
                        <p><b>სახელი:</b>'.$request->input('name').'</p>
                        <p><b>ტელეფონი:</b>'.$request->input('phone').'</p>
                        <p><b>ელ.ფოსტა:</b>'.$request->input('email').'</p>
                        <p><b>წერილი:</b>'.$request->input('message').'</p>
                        </div>
                        ';
          // mail($contact->email, $subject, $message, $headers);       

        //თუ დამახსოვრდა ან არ დამახსოვრა
            if($lids) return back()->with('success',trans('title.success-contact'));
            else return back()->with('error',trans('title.error'));
    }
}
