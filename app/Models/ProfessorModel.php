<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorModel extends Model
{
    use HasFactory;

    protected $table = 'professores';
    protected $fillable = [
        'nome',
        'email',
        'telefone'
    ];
}
