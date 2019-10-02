<?php

namespace App\Http\Controllers;

use App\Categories;

class PublicController extends Controller{

    public function dependeciasPaginaInicial(){ //Busca todas informações públicas da página inicial
        $categorias = Categories::all();

        return view('conteudo.colaborandoti', compact('categorias'));
    }
}
