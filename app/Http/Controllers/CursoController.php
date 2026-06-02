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

        $cursos = new \App\Models\CursoModel();
        return view('curso.index', ['success'=>'Cadastrado de curso realizado!']);
    }

    function readCurso(){
        $curso = new \App\Models\CursoModel();

        return view('curso.read', ['cursos'=>$curso::all()]);
    }

    function updateCurso(string $id){
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($id);

        return view('curso.update', ['curso'=>$curso]);
    }

    function deleteCurso(string $id) {
            $curso = new \App\Models\CursoModel();
            $curso::destroy($id);
    
            return view('curso.index', ['success'=>'Removido!', 'cursos'=>$curso::all()]);
    
        }
    
    function saveCurso(Request $dados){
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($dados->id);
        $curso->update($dados->all());

        return view('curso.index', ['success'=>'Atualizado', 'curso'=>$curso]);
    }
}
