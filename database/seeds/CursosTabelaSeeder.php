<?php

use Illuminate\Database\Seeder;

class CursosTabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('cursos')->insert([
	[
		'nome'=> 'LINUX SECURITY',
		'descricao'=> 'MANTENHA VOCÊ E SUA EMPRESA FORA DOS ATAQUES CIBERNÉTICOS. PROTEGENDO SEUS SISTEMAS LINUX DE HACKERS. CRACKERS E DE CURIOSOS! ',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '12',
		'pre_requisitos'=> 'SÓLIDOS CONHECIMENTOS EM SISTEMA LINUX'
	],
	[
		'nome'=> 'ADMINISTRADOR DE REDES LINUX',
		'descricao'=> 'O OBJETIVO PRINCIPAL DO CURSO DE ADMINISTRADOR DE REDES LINUX. DESENVOLVIDO PELA UNIVERSIDADE DO LINUX. É PROJETAR NOSSOS ALUNOS PARA O MERCADO DO TRABALHO. APLICANDO-LHES TODO O CONHECIMENTO COM BASE NA EXPERIÊNCIA VIVIDA POR NOSSOS PROFISSIONAIS NA ÁREA',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '15',
		'pre_requisitos'=> 'NOÇÕES BÁSICAS DE LINUX E NOÇÕES BÁSICAS DE INFORMÁTICA E HARDWARE'
	],
	[
		'nome'=> 'AUTOMAÇÃO RESIDENCIAL COM ARDUINO',
		'descricao'=> 'APRENDA A DESENVOLVER UMA AUTOMAÇÃO UTILIZANDO O ARDUINO E O ANDROID.',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '5',
		'pre_requisitos'=> 'VOCÊ DEVE TER UMA NOÇÃO BÁSICA DE COMO USAR UM PC.'
	],
	[
		'nome'=> 'MICROSOFT AZURE',
		'descricao'=> 'CRIAR UM CURSO ONDE IRÁ TE POSSIBILITAR CRIAR O SEU PRIMEIRO DATA CENTER EM NUVEM. TOTALMENTE DO ZERO! (UTILIZANDO A PLATAFORMA DE COMPUTAÇÃO EM NUVEM QUE MAIS CRESCE NO MUNDO. SEGUNDO A REVISTA FORBES=> O ICROSOFT AZURE)',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '25',
		'pre_requisitos'=> 'VOCÊ DEVE TER NOÇÃO BÁSICA DE INFORMÁTICA'
	],
	[
		'nome'=> 'JAVA',
		'descricao'=> 'CURSO COMPLETO DE JAVA E ORIENTAÇÃO A OBJETOS. PROJETOS REAIS COM UML. SPRING BOOT. MONGODB E MUITO MAIS ',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '60',
		'pre_requisitos'=> 'É DESEJÁVEL UM CONHECIMENTO BÁSICO DE LÓGICA DE PROGRAMAÇÃO EM QUALQUER LINGUAGEM'
	],
	[
		'nome'=> 'C# CURSO COMPLETO',
		'descricao'=> 'C# É UMA LINGUAGEM MODERNA ORIENTADA A OBJETOS QUE POSSUI UMA SÉRIE DE RECURSOS FANTÁSTICOS E É UMA DAS MELHORES OPÇÕES PARA SE INICIAR NO MUNDO DA PROGRAMAÇÃO. A LINGUAGEM C# FAZ PARTE DO .NET FRAMEWORK DESENVOLVIDO PELA MICROSOFT.',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '40',
		'pre_requisitos'=> 'DESEJÁVEL CONHECIMENTO BÁSICO DE ALGORITMO'
	],
	[
		'nome'=> 'RUBY ON RAILS 5.X',
		'descricao'=> 'O CURSO VISA MOSTRAR AOS ALUNOS COMO CONSTRUIR APLICAÇÕES USANDO O FRAMEWORK RUBY ON RAILS. ESTÁ DIVIDIDO EM 7 MÓDULOS QUE MOSTRARÃO DETALHADAMENTE CADA UMA DAS ETAPAS ENFRENTADAS POR QUEM ESTÁ INICIANDO NESSE MUNDO DE DESENVOLVIMENTO WEB COM RAILS.',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '36',
		'pre_requisitos'=> 'CONCEITOS DE ALGORITMOS'
	],
	[
		'nome'=> 'LARAVEL 5.6',
		'descricao'=> 'O LARAVEL CONSISTE EM UM FRAMEWORK BACK-END ROBUSTO QUE LHE OFERECE UM TIME-TO-MARKET REDUZIDO E TAMBÉM UMA ARQUITETURA DE CÓDIGO MUITO ORGANIZADA. O QUE FACILITA A MANUTENÇÃO DE SEU SISTEMA E TAMBÉM O TRABALHO EM EQUIPE.',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '50',
		'pre_requisitos'=> 'É DESEJÁVEL PARA SEU MAIOR APROVEITAMENTO DO CURSO'
	],
	[
		'nome'=> 'PYTHON 3',
		'descricao'=> 'PYTHON É UMA DAS LINGUAGENS QUE MAIS CRESCE ATUALMENTE. SEU ENFOQUE NA CLAREZA DO CÓDIGO. SUA SIMPLICIDADE. A PROGRAMAÇÃO MAIS DINÂMICA DESDE SEUS ALICERCES. SUPORTE A DIVERSOS PARADIGMAS DE PROGRAMAÇÃO E UMA ENORME BIBLIOTECA PADRÃO',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '40',
		'pre_requisitos'=> 'NOÇÕES DE LÓGICA DE PROGRAMAÇÃO'
	],
	[
		'nome'=> 'HTML5 E CSS3 PARA INICIANTES',
		'descricao'=> 'ESSE CURSO PASSO-A-PASSO DE HTML E CSS VAI TE AJUDAR A APRENDER A PROGRAMAR RÁPIDO E COM UM INSTRUTOR QUE REALMENTE SE IMPORTA COM SEUS ALUNOS.',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '20',
		'pre_requisitos'=> 'NADA! QUALQUER INICIANTE COM CONHECIMENTO ZERO PODE FAZER ESTE CURSO!'
	],
	[
		'nome'=> 'JAVASCRIPT',
		'descricao'=> 'PRIMEIRO VOCÊ APRENDERÁ SOBRE A LINGUAGEM JAVASCRIPT DESDE O BÁSICO DA ESTRUTURA. ORIENTAÇÃO A OBJETOS E RECURSOS AVANÇADOS. DEPOIS COMO UTILIZÁ-LA NA PRÁTICA CONSTRUINDO PROJETOS PASSO A PASSO COM DOIS ESPECIALISTAS EM JAVASCRIPT',
		'publico_alvo'=> 'ESTUDANTES E PROFISSIONAIS DE TECNOLOGIA',
		'carga_horaria'=> '60',
		'pre_requisitos'=> 'VOCÊ JÁ DEVE ESTAR FAMILIARIZADO COM A INTERNET.'
	]
		]);
    }
}
