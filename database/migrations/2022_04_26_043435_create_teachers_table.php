<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {

            $table->id();
            $table->integer('t_id');
            $table->string('name');
            $table->string('initial');
            $table->string('designation');
            $table->integer('class')->nullable();
            $table->string('gender');
            $table->string('contact')->nullable();
            $table->text('email')->nullable();
            $table->text('address')->nullable();
            $table->text('type')->nullable();
            $table->text('image')->nullable();
            $table->string('blood')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
