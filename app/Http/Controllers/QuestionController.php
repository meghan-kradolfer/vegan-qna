<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
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
		return view('questions/questions', [
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

        return view('questions/question', ['question' => $question, 'answers' => Answer::get_sorted($question_id)]);
	}

	/**
	 * Insert a single question
	 */
	public function insert()
	{
		Question::insert(Request::get('question'));
        Session::flash('flash_message','<p>Thank you for submitting a question!</p>');
        return Redirect::to('questions');
	}
}
