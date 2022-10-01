<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 
   public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
          
  $table->id();
  
$table->string('semester');
 
$table->integer('code');

$table->string('course_name');

$table->float('credit');

$table->string('type')->nullable();


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
        Schema::dropIfExists('courses');
    }
}
