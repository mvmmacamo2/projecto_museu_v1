<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaVisitaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_visita_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('to');
            $table->string('estado');
            $table->string('descricao');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->integer('pedido_id')->unsigned()->references('id')->on('visita_gusers');
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
        Schema::dropIfExists('resposta_visita_users');
    }
}
