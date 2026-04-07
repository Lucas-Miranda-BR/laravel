<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $aluno_table = 'aluno';
    protected $fillable = [
        'nome',
        'rm',
        'endereco'
    ];
}
