<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeeventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likeeventos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('like');
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
        Schema::dropIfExists('likeeventos');
    }
}
