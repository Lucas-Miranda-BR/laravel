<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function indexComponente(){
        return view('componente.index');
    }

    function createComponente(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Cadastrado de componente realizado!']);
    }

    function readComponente(){
        $componente = new \App\Models\ComponenteModel();

        return view('componente.read', ['componentes'=>$componente::all()]);
    }

    function updateComponente(string $id){
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('componente.update', ['componente'=>$componente]);
    }

    function deleteComponente(string $id) {
            $componente = new \App\Models\ComponenteModel();
            $componente::destroy($id);
    
            return view('componente.index', ['success'=>'Removido!', 'componentes'=>$componente::all()]);
    
        }
    
    function saveComponente(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('componente.index', ['success'=>'Atualizado', 'componente'=>$componente]);
    }
}
