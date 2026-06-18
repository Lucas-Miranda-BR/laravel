<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Professor extends Controller
{
    function indexProfessor(){
        return view('professor.index');
    }

    function createProfessor(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|unique:Professor',
                  'telefone' => 'required|min:11|max:11'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'email.required' => 'O campo e-mail é obrigatório.',
                  'email.unique' => 'O campo e-mail deve ser unico.',
                  'telefone.required' => 'O campo telefone é obrigatório.',
                  'telefone.min' => 'O campo telefone deve conter no mínimo 11 caracteres.',
                  'telefone.max' => 'O campo telefone deve conter no máximo 11 caracteres.'
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('adminstrador.index')
              ->withErrors($validator)
              ->withInput();
      }
        $professor = new \App\Models\Professor();
        $professor::create($dados->all());

        $professors = new \App\Models\Professor();
        return view('professor.index', ['success'=>'Cadastrado de professor realizado!']);
    }

    function readProfessor(){
        $professor = new \App\Models\Professor();

        return view('professor.read', ['professors'=>$professor::all()]);
    }

    function updateProfessor(string $id){
        $professor = new \App\Models\Professor();
        $professor = $professor::find($id);

        return view('professor.update', ['professor'=>$professor]);
    }

    function deleteProfessor(string $id) {
            $professor = new \App\Models\Professor();
            $professor::destroy($id);
    
            return view('professor.index', ['success'=>'Removido!', 'professors'=>$professor::all()]);
    
        }
    
    function saveProfessor(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|unique:Professor',
                  'telefone' => 'required|min:11|max:11'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'email.required' => 'O campo e-mail é obrigatório.',
                  'email.unique' => 'O campo e-mail deve ser unico.',
                  'telefone.required' => 'O campo telefone é obrigatório.',
                  'telefone.min' => 'O campo telefone deve conter no mínimo 11 caracteres.',
                  'telefone.max' => 'O campo telefone deve conter no máximo 11 caracteres.'
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('adminstrador.index')
              ->withErrors($validator)
              ->withInput();
      }
        $professor = new \App\Models\Professor();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado', 'professor'=>$professor]);
    }
}
