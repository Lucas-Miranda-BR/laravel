<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminstradorModel extends Model
{
    use HasFactory;

    protected $table = 'adminstrador';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'cpf',
        'usuario_nome',
        'senha',
        'status'
    ];
}
