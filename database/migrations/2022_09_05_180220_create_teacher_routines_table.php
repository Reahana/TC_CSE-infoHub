<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_routines', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->integer('t_id');
            $table->string('teacher');
            $table->string('t_8_50am')->nullable();
            $table->string('t_9_40am')->nullable();
            $table->string('t_10_30am')->nullable();
            $table->string('t_11_20am')->nullable();
            $table->string('t_12_10pm')->nullable();
            $table->string('t_1_30pm')->nullable();
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
        Schema::dropIfExists('teacher_routines');
    }
}
