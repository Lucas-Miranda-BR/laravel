<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminstradorController extends Controller
{
    function indexAdminstrador(){
        return view('Adminstrador.index');
    }

    function createAdminstrador(Request $dados){
        $adminstrador = new \App\Models\AdminstradorModel();
        $adminstrador::create($dados->all());

        $adminstradores = new \App\Models\AdminstradorModel();
        return view('adminstrador.index', ['success'=>'Cadastrado de adminstrador realizado!', 'adminstradors'=>$adminstradores::all()]);
    }

    function readAdminstrador(){

    }

    function updateAdminstrador(){

    }

    function deleteAdminstrador(){

    }
}
