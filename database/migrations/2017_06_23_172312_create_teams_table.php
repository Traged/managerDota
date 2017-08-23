<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('photo_id');
            $table->integer('rank')->unsigned();
            $table->integer('player1_id');
            $table->integer('player2_id');
            $table->integer('player3_id');
            $table->integer('player4_id');
            $table->integer('player5_id');
            $table->integer('spirit_score');
            $table->integer('scrim_score');
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
        Schema::dropIfExists('teams');
    }
}
