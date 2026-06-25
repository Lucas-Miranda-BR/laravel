<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Curso extends Controller
{
    function indexCurso(){
        return view('curso.index');
    }

    function createCurso(Request $dados){

        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'perido' => 'required'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'periodo.required' => 'O campo periodo é obrigatório.'
              ]
              );
        
        $curso = new \App\Models\Curso();
        $curso::create($dados->all());

        $cursos = new \App\Models\Curso();
        return view('curso.index', ['success'=>'Cadastrado de curso realizado!']);
    }

    function readCurso(){
        $curso = new \App\Models\Curso();

        return view('curso.read', ['cursos'=>$curso::all()]);
    }

    function updateCurso(string $id){
        $curso = new \App\Models\Curso();
        $curso = $curso::find($id);

        return view('curso.update', ['curso'=>$curso]);
    }

    function deleteCurso(string $id) {
            $curso = new \App\Models\Curso();
            $curso::destroy($id);
    
            return view('curso.index', ['success'=>'Removido!', 'cursos'=>$curso::all()]);
    
        }
    
    function saveCurso(Request $dados){

        $curso = new \App\Models\Curso();
        $curso = $curso::find($dados->id);
        $curso->update($dados->all());

        return view('curso.index', ['success'=>'Atualizado', 'curso'=>$curso]);
    }
}
