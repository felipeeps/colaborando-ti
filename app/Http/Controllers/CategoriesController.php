<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Categories::Paginate(8);
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(CategoriesRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('categorie_image') && $request->file('categorie_image')->isValid()) {
            $extensao = $request->categorie_image->extension();
            $nome = $data['name'];
            $nameFile = "{$nome}.{$extensao}";
            $data['categorie_image'] = $nameFile;
            $upload = $request->categorie_image->storeAs('categorias', $nameFile);
            if (!$upload)
                return redirect()->back()->with('error', 'Falha no upload da imagem');
        } else
            $data['categorie_image'] = "";

        Categories::create($data);
        
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
