<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function showComponente(){
        $componentes = [
            (object)[
                'nome' => 'Analise e Desenvolvimento de Sistemas - Programação Web',
                'horario' => '100 Minutos'
            ],

            (object)[
                'nome' => 'Analise e Desenvolvimento de Sistemas - Banco de Dados',
                'horario' => '100 Minutos'
            ]
        ];

        return view('componente', compact('componentes'));
    }
}
