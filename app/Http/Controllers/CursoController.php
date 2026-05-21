<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    function indexCurso(){
        return view('curso.index');
    }

    function createCurso(Request $dados){
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());

        $cursos = new \App\Models\AlunoModel();
        return view('curso.index', ['success' => 'Cadastro de curso realizado!', 'cursos'=>$cursos::all()]);
    }

    function readCurso(){

    }

    function updateCurso(){

    }

    function deleteCurso(){

    }
}
