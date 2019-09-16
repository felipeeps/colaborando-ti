<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{
    public function index(){ 
        //Mostrar todos os registros do BD
        //SimplePaginate para paginação simples e Paginate para mostrar o número de todas as páginas
        $products = Products::Paginate(8);

        return view('products.index', compact('products')); //Compact para passar os dados do product para a view
    }

    public function create(){ //Retorna a view com o Form de criação
        return view('products.create');
    }

    public function store(ProdutoRequest $request) { //Ação de criação do formulário
        //Pega todos os dados e cria
        Products::create($request->all());
        
        return redirect()->route('products.index');
    }

    public function show($id) {
        //Mostrar registros especificos 

        $products = Products::findOrFail($id);

        return view('products.show', compact('products'));
    }

    public function edit($id){
        //Formulário de edição
        $products = Products::findOrFail($id);

        return view('products.edit', compact('products'));
    }

    public function update(ProdutoRequest $request, $id) {
        //Ação de edição do formulário
        
        $products = Products::findOrFail($id);

        $products->update($request->all());

        return redirect()->route('products.index');

    }       

    public function destroy($id){
        //Deletar registro
        //*Obs: não se apaga registro do banco, pode-se contonar com edição do status para desativado 
    }
}
