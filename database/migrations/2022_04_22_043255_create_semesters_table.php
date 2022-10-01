<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  

  public function up()
    {
    
    Schema::create('semesters', function (Blueprint $table) {
            	$table->id();
  
	$table->string('name');

	$table->float('total_credit');
 
	$table->integer('total_course');

$table->integer('theory');

$table->integer('practical');
 
$table->integer('project')->nullable();
      
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
   
     Schema::dropIfExists('semesters');
  
  }

}
