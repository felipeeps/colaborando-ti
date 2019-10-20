@extends('layouts.master')

@section('conteudo')
<h4>Meus Cursos</h4>

@if (session('status'))
    <div class="alert alert-danger" role="alert">>
        {{ session('status') }}
    </div>
@endif
@if (session('statusDelete'))
    <div class="alert alert-success" role="alert">>
        {{ session('statusDelete') }}
    </div>
@endif

<table class="table table-hover">
    <tr>
        <th scope="col">Nome do Curso:</th>
        <th scope="col">Categoria:</th>
        <th scope="col">Aulas:</th>
        <th scope="col">Status:</th>
        <th scope="col">Última modificação:</th>
        <th scope="col"></th>
    </tr>

    @forelse($courses as $course)
    @can('view_course', $course)
    <tr>
        <td><a href="courses/{{$course->id_course}}">{{$course->name_course}}</a></td>
        <td>{{$course->name}}</td>
        <td>Nº Aulas</td>
        <td>{{$course->status}}</td>
        <td>{{ date( 'd/m/Y H:i' , strtotime($course->updated_at))}}</td>
        @can('edit_course', $course)
        <td><a href="coursedesativado/{{$course->id_course}}" style="color: red" class="fa fa-trash" aria-hidden="true" color="red"></a>
            @endcan
    </tr>
    @endcan
    @empty
    <div class="alert alert-danger" role="alert">
        Você não possui nenhum Curso <a href="#" class="alert-danger">estruture um novo Curso</a> para compatilhar seu conhecimento.
    </div>
    @endforelse
</table>

{!! $courses->render() !!}
@endsection