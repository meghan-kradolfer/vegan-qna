<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Answer;

class AnswerController extends Controller
{
	/**
	 * Insert an answer
	 */
    public function insert() {
        Answer::insert(Request::get('answer'),Request::get('question_id'));
        Session::flash('flash_message','<p>Thanks for answering the question!</p>');
        return Redirect::to('questions/question/'.Request::get('question_id'));
    }
}
