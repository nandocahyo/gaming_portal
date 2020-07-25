<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tandings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_team');
            $table->foreign('id_team')->references('id')->on('teams')->onDelete('cascade');
            $table->unsignedBigInteger('id_tournament');
            $table->foreign('id_tournament')->references('id')->on('tournaments')->onDelete('cascade');
            $table->integer('score');
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
        Schema::dropIfExists('tandings');
        $table->dropForeign(['id_team']);
        $table->dropForeign(['id_tournament']);
    }
}
