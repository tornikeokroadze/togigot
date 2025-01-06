<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Attributes;
use App\Cities;
use App\Question;
use App;

class DashboardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //მომხარებელი
        $user_id = auth()->user()->id;

      
        //იუზერებისთვის
            $user_id  = auth()->user()->id;
            $user     = User::find($user_id);
            $question = Question::orderBy('created_at','DESC')->paginate('21');
            $Attributes = new Attributes();

            $date = array(
                'user'     => $user,
                'question'    => $question,
                'Attributes'    => $Attributes,
            );

            return view('users.dashboard')->with($date);
    }   


  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => ['required', 'sometimes', 'unique:users,email,'.auth()->user()->id],
        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');
        $personal_number = $request->input('personal_number');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $address = $request->input('address');
        $email = $request->input('email');

        $user = User::findOrFail(auth()->user()->id);

        
        $user->name = $name;
        $user->surname= $surname;
        $user->personal_number= $personal_number;
        $user->phone= $phone;
        $user->city= $city;
        $user->address= $address;
        $user->email= $email;
        $user->save();

        if($user) return redirect('/dashboard')->with('success',trans('title.success-edit'));
        else return redirect()->back()->with('error',trans('title.error'));
    }
    
}
