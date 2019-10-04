<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller{

    public function dependeciasPaginaInicial(){ //Busca todas informações públicas da página inicial
        $categorias = Categories::all();

        return view('conteudo.colaborandoti', compact('categorias'));
    }

    public function dependeciasPaginaPostagens(){
        $categorias = Categories::all();
        $posts = DB::table('posts')
        ->join('categories', 'posts.categorie', '=', 'categories.id')
        ->select('posts.*', 'categories.name')
        ->where('posts.status', '=', 'Aprovado')
        ->get();

        return view('conteudo.postagem',  compact('categorias', 'posts'));
    }
}
