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
        return view('aluno.index', ['success'=>'Cadastrado de aluno realizado!']);
    }

    function readAluno(){
        $aluno = new \App\Models\AlunoModel();

        return view('aluno.read', ['alunos'=>$aluno::all()]);
    }

    function updateAluno(string $id){
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($id);

        return view('aluno.update', ['aluno'=>$aluno]);
    }

    function deleteAluno(string $id) {
            $aluno = new \App\Models\AlunoModel();
            $aluno::destroy($id);
    
            return view('aluno.index', ['success'=>'Removido!', 'alunos'=>$aluno::all()]);
    
        }
    
    function saveAluno(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($dados->id);
        $aluno->update($dados->all());

        return view('aluno.update', ['success'=>'Atualizado', 'aluno=>$aluno']);
    }
}
