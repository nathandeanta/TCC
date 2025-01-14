<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    use HasFactory;

    protected $fillable = [
        'estilo'
    ];

    public function combinacoes()
    {
        return $this->hasMany(Combinacao::class, 'cod_estilo');
    }
}
