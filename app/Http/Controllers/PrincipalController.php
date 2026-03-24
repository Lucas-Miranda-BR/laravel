<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    public function getValues(int $n1, int $n2){
        $values = [
            'n1'=>$n1,
            'n2'=>$n2
        ];
    }

    public function somar(int $n1, int $n2){
        $values = [
            'n1'=>$n1,
            'n2'=>$n2
        ];
        return view('somar', $values);
    }

    public function subtrair(int $n1, int $n2){

        $values = [
            'n1'=>$n1,
            'n2'=>$n2
        ];

        return view('subtrair', $values);
    }

    public function dividir(int $n1, int $n2){

        $values = [
            'n1'=>$n1,
            'n2'=>$n2
        ];

        return view('dividir', $values);
    }

    public function multiplicar(int $n1, int $n2){

        $values = [
            'n1'=>$n1,
            'n2'=>$n2
        ];

        return view('multiplicar', $values);
    }

    public function compras(){

                    $produtos = [
                "produto_0" => [
                    "id" => 0,
                    "nome" => "computador",
                    "valor" => 5788.00
                ],
                "produto_1" => [
                    "id" => 1,
                    "nome" => "teclado",
                    "valor" => 150.00
                ],
                "produto_2" => [
                    "id" => 2,
                    "nome" => "mouse",
                    "valor" => 80.00
                ],
                "produto_3" => [
                    "id" => 3,
                    "nome" => "monitor",
                    "valor" => 1200.00
                ],
                "produto_4" => [
                    "id" => 4,
                    "nome" => "impressora",
                    "valor" => 600.00
                ],
                "produto_5" => [
                    "id" => 5,
                    "nome" => "notebook",
                    "valor" => 4500.00
                ],
                "produto_6" => [
                    "id" => 6,
                    "nome" => "tablet",
                    "valor" => 1800.00
                ],
                "produto_7" => [
                    "id" => 7,
                    "nome" => "smartphone",
                    "valor" => 2500.00
                ],
                "produto_8" => [
                    "id" => 8,
                    "nome" => "fone de ouvido",
                    "valor" => 200.00
                ],
                "produto_9" => [
                    "id" => 9,
                    "nome" => "caixa de som",
                    "valor" => 350.00
                ],
                "produto_10" => [
                    "id" => 10,
                    "nome" => "webcam",
                    "valor" => 220.00
                ],
                "produto_11" => [
                    "id" => 11,
                    "nome" => "microfone",
                    "valor" => 300.00
                ],
                "produto_12" => [
                    "id" => 12,
                    "nome" => "HD externo",
                    "valor" => 400.00
                ],
                "produto_13" => [
                    "id" => 13,
                    "nome" => "SSD",
                    "valor" => 500.00
                ],
                "produto_14" => [
                    "id" => 14,
                    "nome" => "placa de vídeo",
                    "valor" => 3500.00
                ],
                "produto_15" => [
                    "id" => 15,
                    "nome" => "memória RAM",
                    "valor" => 300.00
                ],
                "produto_16" => [
                    "id" => 16,
                    "nome" => "fonte",
                    "valor" => 450.00
                ],
                "produto_17" => [
                    "id" => 17,
                    "nome" => "gabinete",
                    "valor" => 350.00
                ],
                "produto_18" => [
                    "id" => 18,
                    "nome" => "roteador",
                    "valor" => 250.00
                ],
                "produto_19" => [
                    "id" => 19,
                    "nome" => "switch",
                    "valor" => 300.00
                ],
                "produto_20" => [
                    "id" => 20,
                    "nome" => "nobreak",
                    "valor" => 700.00
                ]
        ];

        return view('compras', ["produtos" => $produtos]);
    }

    
}


