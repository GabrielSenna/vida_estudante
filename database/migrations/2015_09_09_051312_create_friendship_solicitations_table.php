<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipSolicitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendship_solicitations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requester')->unsigned();
            $table->foreign('id_requester')->references('id')->on('users');
            $table->integer('id_requested')->unsigned();
            $table->foreign('id_requested')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('friendship_solicitations');
    }
}
