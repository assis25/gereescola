<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(AlunosTabelaSeeder::class);
      	$this->call(CursosTabelaSeeder::class);
      	$this->call(InstrutorsTabelaSeeder::class);
      	$this->call(TurmasTabelaSeeder::class);
      	$this->call(MatriculaTabelaSeeder::class);
       
    }
}
