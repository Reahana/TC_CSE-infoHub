<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
          

            $table->id();
  
    $table->string('day');
    $table->string('batch');
    $table->string('semester');
    $table->string('section');
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
        Schema::dropIfExists('routines');
    }
}
