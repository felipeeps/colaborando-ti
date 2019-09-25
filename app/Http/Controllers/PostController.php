<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Categories;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function index(){
        $posts = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->where('posts.status', '!=', 'Desativado')
            ->paginate(8);

        return view('posts.index', compact('posts')); //Compact para passar os dados do product para a view
    }

    public function create(){
        $categorias = Categories::all();
        return view('posts.create', compact('categorias'));
    }

    public function store(Request $request){
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id){
        $posts = Post::findOrFail($id);
        return view('posts.show', compact('posts'));
    }

    public function edit($id){
        $posts = Post::findOrFail($id);

        $categorias = Categories::all();
        return view('posts.edit', compact('posts', 'categorias'));
    }

    public function update(Request $request, $id){
        $posts = Post::findOrFail($id);
        $posts->update($request->all());
        return redirect()->route('posts.index');

    }


    public function destroy($id){
        //
    }

    public function listaPostsAprovar(){ //busca todos os posts com Aprovação pendente
        $pendente = DB::table('posts')
            ->join('categories', 'posts.categorie', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->where('posts.status', '=', 'Aguardando Aprovação')
            ->get();
            return view('manager.aprove',compact('pendente'));
    }

    public function aprovarPost($id){
        DB::table('posts')
            ->where('id', $id)
            ->update(['status' => 'Aprovado']);
            return redirect('aprovarposts');
    }

    public function reprovarPost($id){
        DB::table('posts')
            ->where('id', $id)
            ->update(['status' => 'Reprovado']);
            return redirect('aprovarposts');
    }

    
    public function desativarPost($id){
        DB::table('posts')
            ->where('id', $id)
            ->update(['status' => 'Desativado']);
            return redirect()->route('posts.index');
    }
}
