<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    use HasFactory;

    protected $table = 'contato';
    protected $primaryKey = 'contato_id';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email'
    ];
}
