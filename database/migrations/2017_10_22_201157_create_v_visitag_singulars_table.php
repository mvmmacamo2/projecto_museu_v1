<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVVisitagSingularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("
      CREATE VIEW v_visitag_singulars AS
      (
      SELECT  u.name, u.email , v.id, v.data ,v.hora, v.descricao, v.created_at FROM visita_gusers v, users u WHERE u.id=v.usuario_id
      orderby('id', 'desc'))
    ");
//        Schema::create('v_visitag_singulars', function (Blueprint $table) {
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
        DB::statement('DROP VIEW IF EXISTS v_visitag_singulars');
       // Schema::dropIfExists('v_visitag_singulars');
    }
}
