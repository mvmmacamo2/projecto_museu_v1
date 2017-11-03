<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComtarioExposicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comtario_exposicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario');
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
        Schema::dropIfExists('comtario_exposicaos');
    }
}
