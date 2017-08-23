<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id1');
            $table->string('team_1');
            $table->integer('1_player1_id');
            $table->integer('1_player2_id');
            $table->integer('1_player3_id');
            $table->integer('1_player4_id');
            $table->integer('1_player5_id');
            $table->integer('user_id2');
            $table->string('team_2');
            $table->integer('2_player1_id');
            $table->integer('2_player2_id');
            $table->integer('2_player3_id');
            $table->integer('2_player4_id');
            $table->integer('2_player5_id');
            $table->integer('winner_number');
            $table->text('battle_log');
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
        Schema::dropIfExists('matches');
    }
}
