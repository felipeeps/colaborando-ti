<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{

    public function index(){
        $categories = Categories::Paginate(8);
        return view('categories.index', compact('categories'));
    }

 
    public function create(){
        return view('categories.create');
    }

 
    public function store(CategoriesRequest $request){
        Categories::create($request->all());
        
        return redirect()->route('categories.index');
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
