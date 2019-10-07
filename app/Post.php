<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name_post', 'categorie', 'nivel', 'link', 'description', 'status', 'nota', 'autor', 'image'];

    public function categoria(){
        return $this->belongsTo('App\Categories'); //Recebe a chave
   }

   public function postsCategorias(){
    $lista = $this->join('categories', 'posts.categorie', '=', 'categories.id')->select('posts.id','posts.name_post', 'categories.name as nomeCategoria', 'posts.nivel','posts.link','posts.description','posts.status','posts.nota', 'posts.autor','posts.created_at','posts.updated_at')->get();
    return $lista;
    }
}
