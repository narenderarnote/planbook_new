<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreWeightingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_weightings', function (Blueprint $table) {
        	$table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->double('percent_marks')->nullable();
            $table->integer('standard_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_weightings');
    }
}
