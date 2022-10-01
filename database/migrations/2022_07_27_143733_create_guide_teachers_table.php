<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('semester');
            $table->integer('g_t_id');
            $table->string('guide_teacher');
            $table->integer('ag_t_id')->nullable();
            $table->string('asst_guide_teacher')->nullable();
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
        Schema::dropIfExists('guide_teachers');
    }
}
