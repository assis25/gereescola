<?php

use Illuminate\Database\Seeder;

class InstrutorsTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrutors')->insert([
        	'nome'=>'ASSIS BARBOSA',
        	'cpf_cnpj'=>'002.985.891-09',
        	'email'=>'assis@gmail.com',
        	'nascimento'=>'1979-04-17',
        	'telefone'=>'(84) 99909-1256',
        	'endereco'=>'RUA DA PAZ, 01',
        	'bairro'=>'ALECRIM',
        	'cidade'=>'NATAL',
        	'uf'=>'RN',
        	'cep'=>'59030-320'
        ]);
        DB::table('instrutors')->insert([
        	'nome'=>'JOSÉ EDUARDO',
        	'cpf_cnpj'=>'018.985.741-09',
        	'email'=>'joseeduardo@gmail.com',
        	'nascimento'=>'1990-01-01',
        	'telefone'=>'(84) 99987-0001',
        	'endereco'=>'RUA DA SOLIDÃO, 1020',
        	'bairro'=>'BARRO VERMELHO',
        	'cidade'=>'NATAL',
        	'uf'=>'RN',
        	'cep'=>'59430-420'
        ]);        
    }
}
