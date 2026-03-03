<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('sobre');
    }

    function contato(){
        return view('contato');
    }

    function cursoMa(){
        return view('meio-ambiente');
    }

    function cursoAdm(){
        return view('adminstracao');
    }

    function cursoAds(){
        return view('analise-e-desenvolvimento-de-sistemas');
    }

    
}
 

