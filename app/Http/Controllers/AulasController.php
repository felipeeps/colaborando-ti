<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aulas;

class AulasController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $courses = DB::table('courses')
        ->select('id_course', 'name_course')
        ->where('courses.autor', '=', auth()->user()->name)
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
