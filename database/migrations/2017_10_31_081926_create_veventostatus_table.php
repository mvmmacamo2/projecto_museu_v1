<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeventostatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      DB::statement("
          CREATE VIEW veventostatus AS
          (
          SELECT  u.name, u.email , v.data ,v.hora, v.descricao, v.estado,v.created_at FROM apatios v, users u WHERE u.id=v.usuario_id
          )
          ");


    //   Schema::create('veventostatus', function (Blueprint $table) {
    //     $table->increments('id');
    //     $table->timestamps();
    // });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::statement('DROP VIEW IF EXISTS veventostatus');
      // Schema::dropIfExists('veventostatus');
  }
}
