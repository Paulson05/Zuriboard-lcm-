<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
          
             $table->increments('id');
             $table->bigInteger('track_id');
            $table->string('title_heading');
            $table->string('title_body');
            $table->string('task_title');
            $table->string('task_point');
            $table->string('authour');
            $table->string('category');
            $table->dateTime('deadline');

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
        Schema::dropIfExists('post');
    }
}
