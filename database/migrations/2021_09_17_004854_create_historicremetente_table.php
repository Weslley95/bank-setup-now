<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricremetenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicremetente', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Campo inteiro
            $table->integer('cliente_id');
            // Chave estrangeira - ligação com usuário
            //$table->foreign('cliente_id')->references('id')->on('contas');
            $table->string('cliente_destino');
            $table->float('saldo_enviado');
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
        Schema::dropIfExists('historicremetente');
    }
}
