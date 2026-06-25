<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Adminstrador extends Controller
{
    function indexAdminstrador(){
        return view('adminstrador.index');
    }

    function createAdminstrador(Request $dados){

        $validator = Validator::make(
		      $dados->all(),
	            [
	                'nome' => 'required|min:3|max:255',
                    'email' => 'required|unique:Adminstrador',
                    'telefone' => 'required|min:11|max:11',
                    'cpf' => 'required|min:11|max:11|unique:Adminstrador',
                    'usuario_nome' => 'required|min:3|max:255',
                    'senha' => 'required|min:7|max:255',
                    'status' => 'required|min:3|max:50'
                    
	            ],
	            [
	                'nome.required' => 'O campo nome é obrigatório.',
	                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
	                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                    'email.required' => 'O campo e-mail é obrigatório.',
                    'email.unique' => 'O campo e-mail deve ser unico.',
                    'telefone.required' => 'O campo telefone é obrigatório.',
            	    'telefone.min' => 'O campo telefone deve conter no mínimo 11 caracteres.',
	                'telefone.max' => 'O campo telefone deve conter no máximo 11 caracteres.',
                    'cpf.required' => 'O campo cpf é obrigatório.',
                    'cpf.min' => 'O campo cpf deve conter no mínimo 11 caracteres.',
	                'cpf.max' => 'O campo cpf deve conter no máximo 11 caracteres.',
                    'cpf.unique' => 'O campo cpf deve ser unico.',
                    'usuario_nome.required' => 'O campo nome de usuario é obrigatório.',
            	    'usuario_nome.min' => 'O campo nome de usuario deve conter no mínimo 3 caracteres.',
	                'usuario_nome.max' => 'O campo nome de usuario deve conter no máximo 255 caracteres.',
                    'senha.required' => 'O campo senha é obrigatório.',
                    'senha.min' => 'O campo status deve conter no mínimo 3 caracteres.',
	                'senha.max' => 'O campo status deve conter no máximo 255 caracteres.',
                    'status.required' => 'O campo status é obrigatório.',
                    'status.min' => 'O campo status deve conter no mínimo 3 caracteres.',
	                'status.max' => 'O campo status deve conter no máximo 50 caracteres.'
	            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->route('adminstrador.index')
                ->withErrors($validator)
                ->withInput();
        }
        
        $adminstrador = new \App\Models\Adminstrador();
        $adminstrador::create($dados->all());

        $adminstradores = new \App\Models\Adminstrador();
        return view('adminstrador.index', ['success'=>'Cadastrado de adminstrador realizado!']);
    }

    function readAdminstrador(){
        $adminstrador = new \App\Models\Adminstrador();

        return view('adminstrador.read', ['adminstradores'=>$adminstrador::all()]);
    }

    function updateAdminstrador(string $id){
        $adminstrador = new \App\Models\Adminstrador();
        $adminstrador = $adminstrador::find($id);

        return view('adminstrador.update', ['adminstrador'=>$adminstrador]);
    }

    function deleteAdminstrador(string $id) {
            $adminstrador = new \App\Models\Adminstrador();
            $adminstrador::destroy($id);
    
            return view('adminstrador.index', ['success'=>'Removido!', 'adminstrador'=>$adminstrador::all()]);
    
        }
    
        function saveAdminstrador(Request $dados){
       
        $adminstrador = new \App\Models\Adminstrador();
        $adminstrador = $adminstrador::find($dados->id);
        $adminstrador->update($dados->all());

        return view('adminstrador.index', ['success'=>'Atualizado', 'adminstrador'=>$adminstrador]);
    }
}
