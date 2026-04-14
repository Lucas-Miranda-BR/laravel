<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function indexAluno(){
        return view('aluno.index');
    }

    function createAluno(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());
        return view('aluno.index', ['success' => 'Cadastro realizado']);
    }

    function readAluno(){

    }

    function updateAluno(){

    }

    function deleteAluno(){

    }
}
