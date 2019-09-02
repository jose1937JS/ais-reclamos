<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('request');
            $table->string('note_report')->nullable();
            $table->unsignedInteger('subject_id');
            $table->string('status')->default('Pendiente');
            $table->unsignedInteger('people_stu_id');
            $table->unsignedInteger('people_tea_id');
            $table->timestamps();

            $table->foreign('subject_id')->references('id')->on('subject');
            $table->foreign('people_stu_id')->references('id')->on('people');
            $table->foreign('people_tea_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
