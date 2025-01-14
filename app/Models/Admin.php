<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'administradores';

    protected $fillable = [
        'login_id',
        'img_admin',
        'nome_admin',
        'sobrenome_admin',
        'cpf_admin',
        'telefone',
        'dtanasc_admin',
        'dtaadmissao_admin',
    ];

    public function login()
    {
        return $this->belongsTo(Login::class, 'login_id', 'id');
    }
}
