<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricdestinatarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicdestinatario', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Campo inteiro
            $table->integer('cliente_id');
            // Chave estrangeira - ligação com usuário
            //$table->foreign('cliente_id')->references('id')->on('contas');
            $table->string('cliente_remetente');
            $table->float('saldo_recebido');
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
        Schema::dropIfExists('historicdestinatario');
    }
}
