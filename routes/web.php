<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'QuestionController@showAll');
Route::get('question/{id}', 'QuestionController@show');

Route::post('questions/question', array('before'=>'csfr', 'uses'=>'QuestionController@insert') );
Route::post('questions/answer', array('before'=>'csfr', 'uses'=>'AnswerController@insert') );