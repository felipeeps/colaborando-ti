<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    protected $fillable = ['name_aula', 'course','link', 'description', 'autor'];

    public function courses()
    {
        return $this->belongsTo('App\Courses');
    }

    public function aulasCourses()
    {
        $lista = $this->join('courses', 'aulas.course', '=', 'courses.id_course')->select('aulas.id_aula', 'aulas.name_aula', 'courses.name_course as nomeCourse', 'aulas.link', 'aulas.description', 'aulas.autor', 'aulas.created_at', 'aulas.updated_at')->get();
        return $lista;
    }
}
