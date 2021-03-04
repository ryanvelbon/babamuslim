<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->bigInteger('user_id')->unsigned();
            $table->boolean('gender');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->date('dob');
            $table->bigInteger('nationality')->unsigned();

            $table->tinyInteger('height')->unsigned();
            $table->tinyInteger('weight')->unsigned();
            $table->char('skin_color', 7);
            $table->char('hair_color', 7);
            $table->char('eye_color', 7);

            $table->string('muslim_since', 20)->nullable();
            $table->tinyInteger('salat')->nullable();
            $table->tinyInteger('quran_knowledge')->nullable();
            $table->boolean('tattoos')->nullable();
            $table->tinyInteger('smoking_freq')->nullable();
            $table->tinyInteger('drinking_freq')->nullable();

            $table->string('edu', 50)->nullable();
            $table->string('job', 100);
            $table->tinyInteger('salary');
            $table->string('relationship_status', 30)->nullable();
            $table->tinyInteger('kids');

            $table->string('bio', 300);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('nationality')->references('id')->on('countries');
            $table->primary('user_id');


            // if 'na' skip or simply remove value from HTML, latter solution is safer just in case some users actually want to enter "na" such as in a first_name
            // actually no... this doesn't work because radio element will send a value of "on"
            // revise all fields to check for : unique, nullable, unsigned

        });
    }

    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
