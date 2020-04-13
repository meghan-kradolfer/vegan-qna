<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{	
	/**
	 * Display all questions
	 */
	public function showAll()
	{
		$questions = Question::orderBy('created_at', 'desc')->get();
		return view('index', [
			'questions' => $questions
		]);
	}

	/**
	 * Display a single question
	 */
	public function show($question_id)
	{
		$question = Question::find($question_id);

        if (!$question)
            abort(404, "Page Not Found");

        return view('question', ['question' => $question, 'answers' => Answer::get_sorted($question_id)]);
	}

	/**
	 * Insert a single question
	 */
	public function insert(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'question' =>["required" , "min:5", "max:255", "regex:(\?$)"]  
		]);

        if ($validator->fails()) {
            Session::flash('flash_message','<div class="alert alert-danger">Questions must be greater than 5 characters and contain a question mark</div>');
		} else {
			Question::insert($request->get('question'));
			Session::flash('flash_message','<div class="alert alert-success">Your question has been submitted!</div>');
		}
		
		return Redirect::to('/');

		

		// if($validatedData) {
		// 	Question::insert($validatedData );
		// 	Session::flash('flash_message','<p>Your question has been submitted!</p>');
			
		// 	return Redirect::to('/');
		// } else {
		// 	Session::flash('flash_message','<p>Your question has been submitted!</p>');
		// }
	}
}
