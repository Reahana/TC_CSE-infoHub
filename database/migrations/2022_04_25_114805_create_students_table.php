<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
      
      $table->id();

$table->integer('roll');
       
$table->string('name');

 $table->integer('reg')->nullable();

$table->string('batch');
$table->string('session');
$table->string('section');
$table->string('semester');
$table->string('gender');
$table->string('contact')->nullable();

$table->text('email')->nullable();
$table->text('address')->nullable();
$table->string('type');
$table->text('image')->nullable()
;

$table->string('blood')->nullable()
;
$table->date('dob')->nullable()
;
$table->string('father_name')->nullable()
;
$table->string('mother_name')->nullable()
;
$table->text('skill')->nullable()
;
$table->text('attendance')->nullable();

$table->text('result')->nullable();

$table->text('fb')->nullable();

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
        Schema::dropIfExists('students');
    }
}
