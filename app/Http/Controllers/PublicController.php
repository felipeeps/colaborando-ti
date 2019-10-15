<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Post;
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
        ->select('posts.*', 'categories.name', 'categories.categorie_image')
        ->where('posts.status', '=', 'Aprovado')
        ->get();

        return view('conteudo.postagem',  compact('categorias', 'posts'));
    }

    public function dependeciasPaginaPostagensID($id){
        $categorias = Categories::all();
        $posts = DB::table('posts')
        ->join('categories', 'posts.categorie', '=', 'categories.id')
        ->select('posts.*', 'categories.name')
        ->where('posts.id', '=', $id)
        ->get();

        return view('conteudo.postagem-id',  compact('categorias', 'posts'));
    }

    public function avaliarPostsGostei($id){
        $posts = Post::findOrFail($id);
        $nota = $posts->nota;
        $nota++;
        DB::table('posts')
            ->where('id', $id)
            ->update(['nota' => $nota]);
        return redirect('postagens/'.$id)->with('success-nota', 'Avaliação registrada com sucesso!');
    }
    
    public function avaliarPostsNaoGostei($id){
        $posts = Post::findOrFail($id);        
        $nota = $posts->nota;
        $nota--;
        DB::table('posts')
            ->where('id', $id)
            ->update(['nota' => $nota]);
        return redirect('postagens/'.$id)->with('success-nota', 'Avaliação registrada com sucesso!');
    }
}
