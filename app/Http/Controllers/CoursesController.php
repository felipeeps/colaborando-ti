<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;
use App\Courses;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')
            ->join('categories', 'courses.categorie', '=', 'categories.id')
            ->select('courses.*', 'categories.name')
            ->where('courses.autor', '=', auth()->user()->name)
            ->where('courses.status', '!=', 'Desativado')
            ->paginate(8);

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $categorias = Categories::all();
        return view('courses.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        Courses::create($request->all());
        return redirect()->route('courses.index');
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
    
    public function listaCursosAprovar()
    { //busca todos os posts com Aprovação pendente
        $pendente = DB::table('courses')
            ->join('categories', 'courses.categorie', '=', 'categories.id')
            ->select('courses.*', 'categories.name')
            ->where('courses.status', '=', 'Aguardando Aprovação')
            ->get();
        return view('manager.aprove_courses', compact('pendente'));
    }

    public function aprovarCurso($id)
    {
        DB::table('courses')
            ->where('id_course', $id)
            ->update(['status' => 'Aprovado']);
        return redirect('aprovarcursos');
    }

    public function reprovarCurso($id)
    {
        DB::table('courses')
            ->where('id_course', $id)
            ->update(['status' => 'Reprovado']);
        return redirect('aprovarcursos');
    }


    public function desativarCurso($id)
    {
        DB::table('courses')
            ->where('id_course', $id)
            ->update(['status' => 'Desativado']);
        return redirect()->route('courses.index')->with('statusDelete','Curso deletado com sucesso!');;
    }
}
