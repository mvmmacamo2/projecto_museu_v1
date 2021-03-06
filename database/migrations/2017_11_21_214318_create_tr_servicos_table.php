<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tr_servicos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->timestamps();
        // });

        DB::unprepared('
            CREATE TRIGGER tr_servicos AFTER INSERT ON `apatios` FOR EACH ROW
            INSERT INTO relatio_pedidos (`nomeservico`, `user_id`,`descricao`,`created_at`,`updated_at`) VALUES (\'Aluguer Patio\',NEW.usuario_id, NEW.descricao,NOW(),now());
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('tr_servicos');
        DB::unprepared('DROP TRIGGER `tr_servicos`');
    }
}
