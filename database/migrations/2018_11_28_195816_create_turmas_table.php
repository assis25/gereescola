<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc_turma', 50);
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->integer('instrutor_id')->unsigned();
            $table->foreign('instrutor_id')->references('id')->on('instrutors');
            $table->date('inicio')->nullable();
            $table->date('termino')->nullable();
            $table->string('horario', 35)->nullable();
            $table->string('periodo', 35)->nullable();
            $table->string('local', 25)->nullable();
            $table->decimal('investimento', 8, 2);
            $table->string('concluido', 1)->nullable();
            $table->integer('num_vagas')->nullable();
            $table->integer('num_vagas_restantes')->nullable();
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
        Schema::dropIfExists('turmas');
    }
}
