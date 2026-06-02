<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminstradorController extends Controller
{
    function indexAdminstrador(){
        return view('adminstrador.index');
    }

    function createAdminstrador(Request $dados){
        $adminstrador = new \App\Models\AdminstradorModel();
        $adminstrador::create($dados->all());

        $adminstradores = new \App\Models\AdminstradorModel();
        return view('adminstrador.index', ['success'=>'Cadastrado de adminstrador realizado!']);
    }

    function readAdminstrador(){
        $adminstrador = new \App\Models\AdminstradorModel();

        return view('adminstrador.read', ['adminstradores'=>$adminstrador::all()]);
    }

    function updateAdminstrador(string $id){
        $adminstrador = new \App\Models\AdminstradorModel();
        $adminstrador = $adminstrador::find($id);

        return view('adminstrador.update', ['adminstrador'=>$adminstrador]);
    }

    function deleteAdminstrador(string $id) {
            $adminstrador = new \App\Models\AdminstradorModel();
            $adminstrador::destroy($id);
    
            return view('adminstrador.index', ['success'=>'Removido!', 'adminstradors'=>$adminstrador::all()]);
    
        }
    
    function saveAdminstrador(Request $dados){
        $adminstrador = new \App\Models\AdminstradorModel();
        $adminstrador = $adminstrador::find($dados->id);
        $adminstrador->update($dados->all());

        return view('adminstrador.index', ['success'=>'Atualizado', 'adminstrador'=>$adminstrador]);
    }
}
