<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function indexProfessor(){
        return view('Professor.index');
    }

    function createProfessor(Request $dados){
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        $professores = new \App\Models\ProfessorModel();
        return view('professor.index', ['success'=>'Cadastrado de professor realizado!', 'professores'=>$professores::all()]);
    }

    function readProfessor(){

    }

    function updateProfessor(){

    }

    function deleteProfessor(){

    }
}
