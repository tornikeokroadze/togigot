<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\Question;
use App\QuestionItem;
use App\UserQuestion;
use App\User;
use App\Attributes;
use DB;
use App;

class QuestionController extends Controller
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


    public function index(Request $request){

        $Attributes = new Attributes();
       
        $question = Question::orderBy('created_at','DESC')->paginate('21');

        $user = User::findOrFail(auth()->user()->id);

        $UserQuestionCheck = UserQuestion::where('user_id',$user->id)->get();

        $data = array(
            'Attributes'    => $Attributes,
            'user'    => $user,
            'question'    => $question,
        );
      
        return view('question.index')->with($data);
    }

    public function save(Request $request){

        $user = User::findOrFail(auth()->user()->id);

        $UserQuestionCheck = UserQuestion::where('user_id',$user->id)->get();

        //if(count($UserQuestionCheck)>0) return redirect()->to('/')->with('error',$user->name.', თქვენი პასუხები უკვე მიღებულია!');

        //აუცილებელი ველები
        $this->validate($request, [
            'question_item' => ['required'],
        ]);

        $question_item = $request->input('question_item');

        foreach ($question_item as $key => $value) {

            $question_item_id = QuestionItem::find($value);

            $UserQuestion = new UserQuestion();
            $UserQuestion->ip=$request->ip();
            $UserQuestion->user_id=$user->id;
            $UserQuestion->question_id=$key;
            $UserQuestion->question_item_id=$value;
            $UserQuestion->point=$question_item_id->point;
            $UserQuestion->comment=$request->comment;
            $UserQuestion->save();
        }

        return redirect()->to('/')->with('success','მადლობა '.$user->name.', თქვენი პასუხები მიღებულია!');
    }


    public function update(Request $request){

        $user = User::findOrFail(auth()->user()->id);

        $UserQuestionCheck = UserQuestion::where('user_id',$user->id)->get();

        //აუცილებელი ველები
        $this->validate($request, [
            'question_item' => ['required'],
        ]);

        $question_item = $request->input('question_item');

        foreach ($question_item as $key => $value) {

            $question_item_id = QuestionItem::find($value);
            $UserQuestion = UserQuestion::where('question_id',$key)->where('user_id',$user->id)->first();
            $UserQuestion->ip=$request->ip();
            $UserQuestion->question_item_id=$value;
            $UserQuestion->point=$question_item_id->point;
            $UserQuestion->save();


        }

        return redirect()->to('/dashboard')->with('success','მადლობა '.$user->name.', თქვენი პასუხები მიღებულია!');
    }
}
