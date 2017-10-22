<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaApatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_apatios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->string('descricao');
            $table->integer('usuario_id')->unsigned();
            $table->integer('apatio_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->foreign('apatio_id')->references('id')->on('apatios')->onDelete('NO ACTION');
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
        Schema::dropIfExists('resposta_apatios');
    }
}
