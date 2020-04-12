<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQnaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('questions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('question');
            $table->timestamps();
		});

		Schema::create('answers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->text('answer');
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('questions');
        Schema::dropIfExists('answers');
    }
}
