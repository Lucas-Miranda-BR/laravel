<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAcessoModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'log_acesso_id';
    protected $table = 'log_acessos';
    public $timestamps = false;
    protected $fillable = ['log'];
}
