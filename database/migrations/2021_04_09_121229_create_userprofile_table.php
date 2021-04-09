<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->string('phone_number');
            $table->string('organization');
            $table->string('role');
            $table->string('start_year');
            $table->string('end_year');
            $table->string('School');
            $table->string('course');
            $table->string('qualification');
            $table->string('year_completed');
            $table->string('tech_experience');
            $table->string('purpose');
            $table->string('os');
            $table->string('desired_job');
            $table->string('instagram');
            $table->string('website');
            $table->string('facebook');
            $table->string('github');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('physical_disablity');
            $table->string('nationality');
            $table->string('resident_country');
            $table->string('address');
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
        Schema::dropIfExists('userprofile');
    }
}
