<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model{
    //Necessário para enviar dados via request para cadastro com SEGURANÇA
    protected $fillable = ['name', 'amount'];

}
