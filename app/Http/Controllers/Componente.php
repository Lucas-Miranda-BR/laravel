<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Componente extends Controller
{
    function indexComponente(){
        return view('componente.index');
    }

    function createComponente(Request $dados){

        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'hora_inicio' => 'required',
                  'hora_fim' => 'required'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'hora_inicio.required' => 'O campo hora_inicio é obrigatório.',
                  'hora_fim.required' => 'O campo hora_fim é obrigatório.',
              ]
      );
        $componente = new \App\Models\Componente();
        $componente::create($dados->all());

        $componentes = new \App\Models\Componente();
        return view('componente.index', ['success'=>'Cadastrado de componente realizado!']);
    }

    function readComponente(){
        $componente = new \App\Models\Componente();

        return view('componente.read', ['componentes'=>$componente::all()]);
    }

    function updateComponente(string $id){
        $componente = new \App\Models\Componente();
        $componente = $componente::find($id);

        return view('componente.update', ['componente'=>$componente]);
    }

    function deleteComponente(string $id) {
            $componente = new \App\Models\Componente();
            $componente::destroy($id);
    
            return view('componente.index', ['success'=>'Removido!', 'componentes'=>$componente::all()]);
    
        }
    
    function saveComponente(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'hora_inicio' => 'required',
                  'hora_fim' => 'required'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'hora_inicio.required' => 'O campo inicio é obrigatório.',
                  'hora_fim.required' => 'O campo fim é obrigatório.',
              ]
      );

      if ($validator->fails()) {
        return redirect()
            ->route('componente.update')
            ->withErrors($validator)
            ->withInput();
    }

        $componente = new \App\Models\Componente();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('componente.update', ['success'=>'Atualizado', 'componente'=>$componente]);
    }
}
