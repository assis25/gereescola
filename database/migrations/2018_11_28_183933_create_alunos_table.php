<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nome',100);
            $table->string('cpf_cnpj', 18)->nullable();
            $table->string('email', 50)->nullable();
            $table->date('nascimento')->nullable();
            $table->string('telefone', 15)->nullable();
            $table->string('endereco', 150)->nullable();
            $table->string('bairro', 40)->nullable();
            $table->string('cidade', 40)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('cep', 9)->nullable();            
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
