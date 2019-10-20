<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name', 'categorie_image'];

    public function posts(){
        return $this->hasMany('App\Post'); //Envia a Chave
   }
   public function courses(){
    return $this->hasMany('App\Courses'); //Envia a Chave
}
}
