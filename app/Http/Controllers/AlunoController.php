<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function indexAluno(){
        return view('aluno.index');
    }

    function createAluno(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        $alunos = new \App\Models\AlunoModel();
        return view('aluno.index', ['success'=>'Cadastrado de aluno realizado!', 'alunos'=>$alunos::all()]);
    }

    function readAluno(){

    }

    function updateAluno(){

    }

    function deleteAluno(){

    }
}
