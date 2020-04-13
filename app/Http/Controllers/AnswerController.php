<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Answer;

class AnswerController extends Controller
{	
	/**
	 * Insert an answer
	 */
    public function insert(Request $request) {
		$validator = Validator::make($request->all(), [
			'answer' => ["required", "min:5"],
			'question_id' => ["required"]
		]);

		if ($validator->fails()) {
			Session::flash('flash_message','<div class="alert alert-danger">Please make sure your answer is over 5 characters long</div>');
			return redirect()->back()->withInput();
		} else {
			Answer::insert($request->get('answer'),$request->get('question_id'));
			Session::flash('flash_message','<div class="alert alert-success">Your answer has been submitted!</div>');
			return Redirect::to('question/'.$request->get('question_id'));
		}
        
    }
}
