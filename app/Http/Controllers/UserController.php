<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Attributes;
use App\Gallery;
use App\Services;
use App\Country;
use DateTime;
use App;
use DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function update(Request $request){


        //შემოწმება რომ იუზერია და არა ექსრანეტი
        if(auth()->user()->status==0){


         	//ველების ვალიდაცია
    	        $this->validate($request, [
    	            'name' => 'required',
    	            'lastname' => 'required',
    	            'email' => 'required',
    	            'phone' => 'required',
    	            'country' => 'required'
    	        ]);
           
    	    //მომხარებლის მოსული ინფოემაცია
            	$user_id  = auth()->user()->id;
            	$name     = $request->input('name');
            	$lastname = $request->input('lastname');
            	$email    = $request->input('email');
            	$phone    = $request->input('phone');
            	$country  = (int)$request->input('country');

            //ინფრომაციის რედაქტირება
            	$user = User::findOrFail($user_id);
            	$user->name = $name;
            	$user->lastname = $lastname;
            	$user->phone = $phone;
            	$user->country_id = $country;
            	$user->email = $email;
            	$user->save();

            //შემოწმება რომ დარედაქტირდა წარმატებით
            	if($user) return redirect('/dashboard')->with('success',trans('title.success-edit'));
            	else return redirect('/dashboard')->with('error',trans('title.error'));
        }
        else return redirect()->back();
    }


    public function password(){

        //შემოწმება რომ იუზერია და არა ექსრანეტი
        if(auth()->user()->status==0){
            return view('users.password');  
        }
        else return redirect()->back();
    }


    public function passwordUpdate(Request $request){

	//პაროლების ვალიდაცია
		$this->validate($request, [
			'current' => 'required',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required'
		]);

	//მოხმარებელი
		$user = User::find(auth()->user()->id);

	//ახალი პაროლის შექმნა და განახლება
		if (!Hash::check($request->current, $user->password)) {
			$error = response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
			return redirect()->back()->with('error', trans('title.error')); 
		}

		$user->password = Hash::make($request->password);
		$user->save();

	//თუ წარმატებით შეიცვალა პაროლი
		if($user) return redirect()->back()->with('success', trans('title.success-edit')); 
		else redirect()->back()->with('error', trans('title.error')); 
    }

}
