<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        echo 'Página Principal';
    }
    function contatoNome(string $nome){
        echo 'Página de Contado de ' . $nome;
    }
    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo 'Página de Contato de ' . $nome . ' ' . $sobrenome;
    }
    function contatoMensagem(string $nome, string $sobrenome, string $mensagem){
        echo 'Página de Contato de ' . $nome . ' ' . $sobrenome;
        echo 'Mensagem atribuida: ' . $mensagem;
    }

    
}


