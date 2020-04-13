<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	/**
	 * Insert an answer
	 */
	public static function insert($answer_text, $question_id)
	{
		$answer = new Answer;
		$answer->answer = $answer_text;
		$answer->question_id = $question_id;
		$answer->save();
		return $answer;
	}

	/**
	 * Get answers and sort
	 */
	public static function get_sorted($question_id)
	{
		$answer = Answer::where('question_id', '=', $question_id)->get();
		return $answer->SortByDesc('created_at');
	}
}
