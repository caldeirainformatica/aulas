<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function getAlunos(){
        $alunos = Aluno::all();
        return view('aluno/list', compact('alunos'));
    }

    public function salvarAluno(Request $request){
        return Aluno::create($request->input());
    }

    public function deletarAluno(){

    }

    public function alterarAluno(){

    }

    public function form(){
        return view('aluno/form');
    }
}
