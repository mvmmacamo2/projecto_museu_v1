<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVPatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
      CREATE VIEW v__patios AS
      (
      SELECT  u.name, u.email , v.data ,v.hora, v.descricao, v.estado,v.created_at FROM apatios v, users u WHERE u.id=v.usuario_id
      )
    ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS v__patios');
//        Schema::dropIfExists('v__patios');
    }
}
