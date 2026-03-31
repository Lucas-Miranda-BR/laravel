<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function showProfessor(){
        $professores = [
            (object)[
                'nome' => 'Roberta Angelica',
                'telefone' => '12346678944',
            ],

            (object)[
                'nome' => 'Ana Silva',
                'telefone' => '28128912377',
            ]
        ];

        return view('professor', compact('professores'));
    }
}
