<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Post;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{

    public function dependeciasPaginaInicial()
    { //Busca todas informações públicas da página inicial
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();

        return view('conteudo.colaborandoti', compact('categorias'));
    }

    public function dependeciasPaginaPostagens()
    {
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();
        $posts = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name', 'categories.categorie_image')
            ->where('posts.status', '=', 'Aprovado')
            ->orderBy('nota', 'desc')
            ->get();

        return view('conteudo.postagem',  compact('categorias', 'posts'));
    }

    public function dependeciasPaginaPostagensID($id)
    {
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();
        $posts = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->where('posts.id', '=', $id)
            ->get();

        return view('conteudo.postagem-id',  compact('categorias', 'posts'));
    }

    public function dependeciasPaginaCursosID($id)
    {
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();

        $courses = DB::table('courses')
            ->join('categories', 'courses.categorie', '=', 'categories.id')
            ->select('courses.*', 'categories.name', 'categories.categorie_image')
            ->where('courses.id_course', '=', $id)
            ->get();

        $aulas = DB::table('aulas')
            ->where('course', '=', $id)
            ->orderBy('name_aula', 'asc')
            ->get();

        $contagem = DB::table('aulas')
            ->where('course', '=', $id)
            ->count();

        return view('conteudo.cursos-id',  compact('categorias', 'courses', 'aulas', 'contagem'));
    }

    public function dependeciasPaginaCursos($categoria)
    {
        $categorias = DB::table('categories')
            ->select('categories.*')
            ->orderBy('name', 'asc')
            ->get();

        $courses = DB::table('courses')
            ->join('categories', 'courses.categorie', '=', 'categories.id')
            ->select('courses.*', 'categories.name', 'categories.categorie_image')
            ->where([
                ['courses.status', '=', 'Aprovado'],
                ['categories.name', '=', $categoria]
            ])
            ->orderBy('nota', 'desc')
            ->get();

        return view('conteudo.cursos',  compact('categorias', 'courses'));
    }

    public function dependeciasPaginaCurso()
    {
        $categorias = DB::table('categories')
            ->select('categories.*')
            ->orderBy('name', 'asc')
            ->get();

        $courses = DB::table('courses')
            ->join('categories', 'courses.categorie', '=', 'categories.id')
            ->select('courses.*', 'categories.name', 'categories.categorie_image')
            ->where([
                ['courses.status', '=', 'Aprovado']
            ])
            ->orderBy('name_course', 'asc')
            ->get();

        return view('conteudo.cursos',  compact('categorias', 'courses'));
    }

    public function avaliarPostsGostei($id)
    {
        $posts = Post::findOrFail($id);
        $nota = $posts->nota;
        $nota++;
        DB::table('posts')
            ->where('id', $id)
            ->update(['nota' => $nota]);
        return redirect('postagens/' . $id)->with('success-nota', 'Avaliação registrada com sucesso!');
    }

    public function avaliarPostsNaoGostei($id)
    {
        $posts = Post::findOrFail($id);
        $nota = $posts->nota;
        $nota--;
        DB::table('posts')
            ->where('id', $id)
            ->update(['nota' => $nota]);
        return redirect('postagens/' . $id)->with('success-nota', 'Avaliação registrada com sucesso!');
    }

    public function dependeciasPaginaPostagensCategoria($categoria)
    {
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();

        $posts = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name', 'categories.categorie_image')
            ->where([
                ['posts.status', '=', 'Aprovado'],
                ['categories.name', '=', $categoria]
            ])
            ->orderBy('nota', 'desc')
            ->get();

        return view('conteudo.postagem',  compact('categorias', 'posts'));
    }

    public function dependeciasPaginaPostagensColaborador($autor)
    {
        $categorias = DB::table('categories')
        ->select('categories.*')
        ->orderBy('name', 'asc')
        ->get();
        $posts = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name', 'categories.categorie_image')
            ->where([
                ['posts.status', '=', 'Aprovado'],
                ['posts.autor', '=', $autor]
            ])
            ->orderBy('nota', 'desc')
            ->get();

        return view('conteudo.postagem',  compact('categorias', 'posts'));
    }
}
