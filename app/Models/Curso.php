<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $curso_table = 'curso';
    protected $filable = [
        'nome',
        'disciplinas',
        'duracao'
    ];
}
