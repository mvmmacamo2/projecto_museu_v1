<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComtarioEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comtario_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario');
            $table->integer('evento_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('NO Action');
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
        Schema::dropIfExists('comtario_eventos');
    }
}
