<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function indexProfessor(){
        return view('professor.index');
    }

    function createProfessor(Request $dados){
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        $professors = new \App\Models\ProfessorModel();
        return view('professor.index', ['success'=>'Cadastrado de professor realizado!']);
    }

    function readProfessor(){
        $professor = new \App\Models\ProfessorModel();

        return view('professor.read', ['professors'=>$professor::all()]);
    }

    function updateProfessor(string $id){
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.update', ['professor'=>$professor]);
    }

    function deleteProfessor(string $id) {
            $professor = new \App\Models\ProfessorModel();
            $professor::destroy($id);
    
            return view('professor.index', ['success'=>'Removido!', 'professors'=>$professor::all()]);
    
        }
    
    function saveProfessor(Request $dados){
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado', 'professor'=>$professor]);
    }
}
