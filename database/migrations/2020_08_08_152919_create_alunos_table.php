<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('estado');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('nomePai')->nullable();
            $table->string('nomeMae');
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo')->nullable();
            $table->string('pagamento')->nullable();
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
        Schema::dropIfExists('alunos');
    }
}
