<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function indexComponente(){
        return view('Componente.index');
    }

    function createComponente(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        $componentes = new \App\Models\ComponenteModel();
        return view('componente.index', ['success'=>'Cadastrado de Componente realizado!', 'componentes'=>$componentes::all()]);
    }

    function readComponente(){

    }

    function updateComponente(){

    }

    function deleteComponente(){

    }
}
