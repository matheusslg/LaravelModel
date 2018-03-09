<?php

namespace Produtos;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
    	'id',
    	'nome',
    	'descricao',
    	'preco'
    ];

    protected $table = 'produtos';
}
