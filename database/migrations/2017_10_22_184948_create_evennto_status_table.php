<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenntoStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evennto_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario');
            $table->integer('like');

            $table->integer('usuario_id')->unsigned();
            $table->integer('evento_id')->unsigned();

            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('usuario_id')->references('id')->on('users');
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
        Schema::dropIfExists('evennto_status');
    }
}
