<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Support\Facades\Gate;


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

        return redirect()->route('categories.index')->with('status-sucess', 'Categoria cadastrada com sucesso!');
    }

    public function show($id)
    {
        $categories = Categories::findOrFail($id);
        return view('categories.show', compact('categories'));
    }

    public function edit($id)
    {
        $categorias = Categories::findOrFail($id);

        if (Gate::denies('aprove_post', $categorias))
            return redirect()->route('categories.index')->with('status', 'Você não tem acesso para editar essa categoria!');

        return view('categories.edit', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $categorias = Categories::findOrFail($id);

        if (Gate::denies('aprove_post', $categorias))
            return redirect()->route('categories.index')->with('status', 'Você não tem acesso para editar essa categoria!');

        $data = $request->all();

        if ($request->hasFile('categorie_image') && $request->file('categorie_image')->isValid()) {
            $extensao = $request->categorie_image->extension();
            $nome = $data['name'];
            $nameFile = "{$nome}.{$extensao}";
            $data['categorie_image'] = $nameFile;
            $upload = $request->categorie_image->storeAs('categorias', $nameFile);
            if (!$upload)
                return redirect()->back()->with('status-error', 'Falha no upload da imagem');
        }
            $categorias->update($data);

        return redirect()->route('categories.index')->with('status-sucess', 'Categoria Atualizada com Sucesso!');
    }

    public function destroy($id)
    {
        $categorias = Categories::findOrFail($id);
        $categorias->delete();
        return redirect()->route('categories.index')->with('status-sucess', 'Categoria Excluída com Sucesso!');
    }
}
