<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVgaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
      CREATE VIEW vgalerias AS
      (
      SELECT  e.nome, eg.nome , eg.descricao ,eg.estado, u.nome, eg.created_at FROM exposicaos e, exposicao_galerias eg, users u WHERE u.id=eg.usuario_id
      )
        and e.id=eg.exposicao_id ");
//        Schema::create('vgalerias', function (Blueprint $table) {
//            $table->increments('id');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS v__patios');
//        Schema::dropIfExists('vgalerias');
    }
}
