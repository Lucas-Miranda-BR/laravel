<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Aluno extends Controller
{
    function indexAluno(){
        return view('aluno.index');
    }

    function createAluno(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.'
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('adminstrador.index')
              ->withErrors($validator)
              ->withInput();
      }
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
    
        function saveAluno(Request $dados) {
            $validator = Validator::make(
                $dados->all(),
                  [
                      'nome' => 'required|min:3|max:255',
                      
                  ],
                  [
                      'nome.required' => 'O campo nome é obrigatório.',
                      'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                      'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  ]
          );
  
          if ($validator->fails()) {
              return redirect()
                  ->route('adminstrador.index')
                  ->withErrors($validator)
                  ->withInput();
          }
            $aluno = new \App\Models\AlunoModel();
            $aluno = $aluno::find($dados->id);
            $aluno->update($dados->all());
    
            return view('aluno.index', ['success'=>'Atualizado!', 'alunos'=>$aluno::all()]);
        }
}
