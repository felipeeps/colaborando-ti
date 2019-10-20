<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['name_course', 'categorie','carga_horaria', 'nivel', 'description', 'status', 'nota', 'autor'];

    public function aulas(){
        return $this->hasMany('App\Aulas'); //Envia a Chave
   }

    public function categoria()
    {
        return $this->belongsTo('App\Categories');
    }

    public function coursesCategorias()
    {
        $lista = $this->join('categories', 'courses.categorie', '=', 'categories.id')->select('courses.id_course', 'courses.name_course', 'categories.name as nomeCategoria', 'courses.carga_horaria', 'courses.nivel', 'courses.description', 'courses.status', 'courses.nota', 'courses.autor', 'courses.created_at', 'courses.updated_at')->get();
        return $lista;
    }
}
