<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($turma_id)
    {
        $turma = Turma::find($turma_id);
        $instrutor = DB::table('instrutors')
                ->join('turmas', 'instrutors.id', '=', 'turmas.instrutor_id')
                ->where('turmas.id', '=', $turma_id)->first();
        $alunos = DB::table('alunos')
                ->join('matriculas', 'alunos.id', '=', 'matriculas.aluno_id')
                ->join('turmas', 'turmas.id', '=', 'turma_id')
                ->where('matriculas.turma_id', '=', $turma_id)
                ->get();
        $qtde = DB::table('alunos')
                ->join('matriculas', 'alunos.id', '=', 'matriculas.aluno_id')
                ->join('turmas', 'turmas.id', '=', 'turma_id')
                ->where('matriculas.turma_id', '=', $turma_id)
                ->count();        
        return view('turmas')->with('turma', $turma)->with('alunos', $alunos)->with('qtde', $qtde)->with('instrutor',$instrutor);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resumo(){
        
        $matriculas = DB::table('matriculas')
            ->join('turmas', 'turmas.id', '=', 'turma_id')
            ->select(DB::raw('SUM(investimento)  as total, turmas.desc_turma'))
            ->groupBy('turmas.desc_turma')->get();
        return $matriculas;
    }
    public function top_turmas(){
        $matriculas = DB::table('matriculas')
            ->join('turmas', 'turmas.id', '=', 'turma_id')
            ->select(DB::raw('SUM(investimento)  as total, turmas.desc_turma'))
            ->groupBy('turmas.desc_turma')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();   
            return $matriculas;     
    }
    public function cursos_turmas(){
        $cursos = DB::table('cursos')
            ->join('turmas', 'cursos.id', '=', 'curso_id')
            ->join('matriculas', 'turmas.id', '=', 'turma_id')
            ->select(DB::raw('count(*) as qtde, cursos.nome, turmas.desc_turma'))
            ->groupBy('cursos.nome', 'turmas.desc_turma')
            ->havingRaw('qtde > 15')
            ->get();
            return $cursos;
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
    }
}
