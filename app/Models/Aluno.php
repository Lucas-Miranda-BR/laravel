<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "alunos";
    protected $primary_key = "aluno_id";
    protected $fillable = [
        'nome',
        'email'
    ];
}
