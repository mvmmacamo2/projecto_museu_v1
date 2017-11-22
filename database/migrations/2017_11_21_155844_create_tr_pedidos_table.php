<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tr_pedidos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        // DB::unprepared('
        //     CREATE PROCEDURE sp_Create_Default_Task_1(IN _kid_id INT)
        //     BEGIN
        //     INSERT INTO tasks (kid_id, name) VALUES (_kid_id, \'daily\');
        //     END'
        // );

        // DB::unprepared('
        // CREATE TRIGGER tr_Task_Default AFTER INSERT ON `kids` FOR EACH ROW
        //     INSERT INTO tasks (`kid_id`, `name`) VALUES (NEW.id, \'Default\');
        // ');

        DB::unprepared('
            CREATE TRIGGER tr_relatorio_pedido AFTER INSERT ON `visita_gusers` FOR EACH ROW
            INSERT INTO relatio_pedidos (`nomeservico`, `user_id`,`descricao`) VALUES (\'Visita Guiada Individual\',NEW.usuario_id, NEW.descricao, NOW(),NOW());
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tr_pedidos');
       DB::unprepared('DROP TRIGGER `tr_relatorio_pedido`');
   }
}
