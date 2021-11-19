<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Campo inteiro
            $table->integer('user_id');
            // Chave estrangeira - ligação com usuário
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('saldo_bsn',8,2);
            $table->string('nome_chave_bsn');
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
        Schema::dropIfExists('contas');
    }
}
