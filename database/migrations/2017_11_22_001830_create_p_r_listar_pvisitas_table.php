<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePRListarPvisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('p_r_listar_pvisitas', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        DB::unprepared('
            CREATE PROCEDURE pr_pedidos_visitas(IN u_id INT)
            BEGIN

            SELECT * FROM visita_gusers where usuario_id=u_id order by id desc;
            END'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('p_r_listar_pvisitas');
        DB::unprepared('DROP  PROCEDURE `pr_pedidos_visitas`');
    }
}
