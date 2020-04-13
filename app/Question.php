<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question'];

	public function answers()
	{
		return $this->hasMany('App\Answer');
	}

	/**
	 * Insert a question
	 */
	public static function insert($question_text)
	{
		$question = new Question;
		$question->question = $question_text;
		$question->save();
		return $question;
	}

	/**
	 * Get the number of answers for a question
	 */
	public function answer_count()
	{
		return $this->answers()
					->selectRaw('count(*) as total, question_id')
					->groupBy('question_id');
	}
}
