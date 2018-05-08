<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('q1');
            // $table->string('q2');
            // $table->string('q3');
            // $table->string('q4');
            // $table->string('q5_1');
            // $table->string('q5_2');
            // $table->string('q5_3');
            // $table->string('q5_4');
            // $table->string('q6');
            // $table->string('q7');
            // $table->string('q8');
            // $table->string('q9');
            // $table->string('q10');
            // $table->string('q11');
            // $table->string('q12');
            $table->string('q13');
            $table->string('q14');
            $table->string('q15');
            $table->string('q16');
            $table->string('q17');
            $table->string('q18');
            $table->string('q19');
            $table->string('q20');
            $table->string('q21');
            $table->string('q22');
            $table->string('q23');
            $table->string('q24');
            $table->string('q25');
            $table->string('nationality');
            $table->string('gender');
            $table->string('age');
            $table->string('height');
            $table->string('weight');
            $table->string('handicap');
            $table->rememberToken();
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
        Schema::dropIfExists('surveys');
    }
}
