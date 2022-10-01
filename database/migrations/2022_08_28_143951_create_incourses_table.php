<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incourses', function (Blueprint $table) {
            $table->id();
            $table->integer('roll');
            $table->string('name');
            $table->string('section');
            $table->integer('reg')->nullable();
//            $table->string('S1_510201')->nullable();
//            $table->string('S1_510202')->nullable();
//            $table->string('S1_510203')->nullable();
//            $table->string('S1_510204')->nullable();
//            $table->string('S1_510205')->nullable();
//            $table->string('S1_510207')->nullable();
//            $table->string('S1_510209')->nullable();
            $table->integer('S3_530201')->nullable();
            $table->integer('S3_530202')->nullable();
            $table->integer('S3_530203')->nullable();
            $table->integer('S3_530204')->nullable();
            $table->integer('S3_530205')->nullable();
            $table->integer('S3_530206')->nullable();
            $table->integer('S3_530207')->nullable();
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
        Schema::dropIfExists('incourses');
    }
}
