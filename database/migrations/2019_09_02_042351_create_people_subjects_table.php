<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('people_id');
            $table->unsignedInteger('subject_id');
            $table->timestamps();

            $table->foreign('people_id')->references('id')->on('people');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_subjects');
    }
}
