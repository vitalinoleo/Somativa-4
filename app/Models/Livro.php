<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vaga extends Model
{
    use HasFactory;


    protected $fillable = [
        'titulo', 'autor','descricao'
    ];
// criacao das relacoes de tabela

}
