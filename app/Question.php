<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['question'];
	
	/**
     * Insert a question
     */
    public static function insert($question_text) {
        $question = new Question;
        $question->question = $question_text;
        $question->save();
        return $question;
	}
}
