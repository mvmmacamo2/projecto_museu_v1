<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeExposicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_exposicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('like');
            $table->integer('exposicao_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('exposicao_id')->references('id')->on('exposicaos')->onDelete('NO Action');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('NO ACTION');
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
        Schema::dropIfExists('like_exposicaos');
    }
}
