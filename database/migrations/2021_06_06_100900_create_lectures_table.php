<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('video');
            $table->boolean('clicked')->default(false);
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('section_id');

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('section_id')->references('id')->on('sections');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
