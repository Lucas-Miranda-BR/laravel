<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function showAluno(){
        $alunos = [
            (object)[
                'nome' => 'João Silva',
                'telefone' => '123456789',
                'email' => 'joao.silva@example.com'
            ],

            (object)[
                'nome' => 'Maria Oliveira',
                'telefone' => '987654321',
                'email' => 'maria.oliveira@example.com'
            ],

            (object)[
                'nome' => 'Carlos Santos',
                'telefone' => '456123789',
                'email' => 'carlos.santos@example.com'
            ]
        ];

        return view('aluno', compact('alunos'));
    }

    
}

