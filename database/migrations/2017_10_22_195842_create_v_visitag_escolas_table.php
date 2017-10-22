<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVVisitagEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("
      CREATE VIEW v_visitag_escolas AS
      (
      SELECT  u.nome, u.email, u.nome_responsavel , v.data ,v.hora, v.descricao, v.created_at FROM visitag_escolas v, escolas u WHERE u.id=v.escola_id
      )
    ");
//        Schema::create('v_visitag_escolas', function (Blueprint $table) {
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
       // Schema::dropIfExists('v_visitag_escolas');
        DB::statement('DROP VIEW IF EXISTS v_visitag_escolas');
    }
}
