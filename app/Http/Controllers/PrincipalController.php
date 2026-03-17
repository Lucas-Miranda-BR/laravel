<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        echo 'Página Principal';
    }
    function contato(){
        echo 'Página de Contato';
    }
    function contatoNome(string $nome){
        echo 'Página de Contato de ' . $nome;
    }
    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo 'Página de Contato de ' . $nome . ' ' . $sobrenome;
    }
    function contatoMensagem(string $nome, string $sobrenome, string $mensagem){
        echo 'Página de Contato de ' . $nome . ' ' . $sobrenome . '<br>';
        echo 'Mensagem atribuida: ' . $mensagem;
    }
    function contatoTelefone(string $nome, string $sobrenome, string $mensagem, string $telefone, string $email = 'N/A.'){
        echo 'Página de Contato de ' . $nome . ' ' . $sobrenome . '<br>';
        echo 'Mensagem atribuida: ' . $mensagem . '<br>';
        echo 'N. telefone: ' . $telefone . '<br>';
        echo 'E-mail: ' . $email;
    }

    
}


