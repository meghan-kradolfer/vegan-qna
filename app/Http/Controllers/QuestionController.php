<?php

namespace App\Http\Controllers;

use App\Question;

class QuestionController extends Controller
{
	/**
	 * Display all questions
	 * @return Response
	 */
	public function showAll()
	{
		$questions = Question::orderBy('created_at', 'asc')->get();
		return view('questions/questions', [
			'questions' => $questions
		]);
	}

	/**
	 * Display a single question
	 * @param  int  $question_id
	 * @return Response
	 */
	public function show($question_id)
	{
		//
	}

	/**
	 * Insert a single question
	 * POST /question
	 * @return Response
	 */
	public function insert()
	{
		// 
	}
}
