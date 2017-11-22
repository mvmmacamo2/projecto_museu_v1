<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePRListarPpedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('p_r_listar_ppedidos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

          // CREATE PROCEDURE pr_pedidos_patio(IN _kid_id INT)
       // INSERT INTO tasks (kid_id, name) VALUES (_kid_id, \'daily\');

        DB::unprepared('
            CREATE PROCEDURE pr_pedidos_patio(IN u_id INT)
            BEGIN

            SELECT * FROM apatios where usuario_id=u_id order by id desc;
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
        //Schema::dropIfExists('p_r_listar_ppedidos');
    DB::unprepared('DROP  PROCEDURE `pr_pedidos_patio`');
}
}
