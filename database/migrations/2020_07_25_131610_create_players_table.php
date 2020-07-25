<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams')->onDelete('cascade');
            $table->string('player1');
            $table->string('level1');
            $table->string('player2');
            $table->string('level2');
            $table->string('player3');
            $table->string('level3');
            $table->string('player4');
            $table->string('level4');
            $table->string('player5');
            $table->string('level5');
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
        Schema::dropIfExists('players');
        $table->dropForeign(['id_tournament']);
    }
}
