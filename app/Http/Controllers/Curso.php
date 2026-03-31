<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function showCurso(){
        $cursos = [
            (object)[
                'nome' => 'Analise e Desenvolvimento de Sistemas - Manhã',
                'horario' => '7:30 - 11:30'
            ],

            (object)[
                'nome' => 'Analise e Desenvolvimento de Sistemas - Tarde',
                'horario' => '12:30 - 16:30'
            ]
        ];

        return view('curso', compact('cursos'));
    }
}
