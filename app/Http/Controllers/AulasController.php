<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aulas;

class AulasController extends Controller
{

    public function index()
    {        
        $aulas = DB::table('aulas')
        ->join('courses', 'aulas.course', '=', 'courses.id_course')
        ->select('aulas.*', 'courses.name_course')
        ->where('aulas.autor', '=', auth()->user()->name)
        ->orderBy('name_course', 'asc')
        ->paginate(8);

    return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        $courses = DB::table('courses')
        ->select('id_course', 'name_course')
        ->where('courses.autor', '=', auth()->user()->name)
        ->orderBy('name_course', 'asc')
        ->get();

        return view('aulas.create', compact('courses'));
    }
    public function store(Request $request)
    {
        Aulas::create($request->all());
        return redirect()->route('aulas.index');
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
