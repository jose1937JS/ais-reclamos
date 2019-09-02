<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->unsignedInteger('transmitter_people_id');
            $table->unsignedInteger('receiver_people_id');
            $table->timestamps();

            $table->foreign('transmitter_people_id')->references('id')->on('people_id');
            $table->foreign('receiver_people_id')->references('id')->on('people_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
