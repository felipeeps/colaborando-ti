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
        <th scope="col">Aula</th>
        <th scope="col">Última modificação:</th>
        <th scope="col"></th>
    </tr>

    @forelse($aulas as $aula)
    @can('view_aulas', $aulas)
    <tr>
        <td>{{$aula->name_course}}</td>
        <td><a href="aulas/{{$aula->id_aula}}">{{$aula->name_aula}}</a></td>
        <td>{{ date( 'd/m/Y H:i' , strtotime($aula->updated_at))}}</td>
        @can('edit_aulas', $aulas)
        <td><a href="auladesativado/{{$aula->id_aulaa}}" style="color: red" class="fa fa-trash" aria-hidden="true" color="red"></a>
            @endcan
    </tr>
    @endcan
    @empty
    <div class="alert alert-danger" role="alert">
        Você não possui nenhuma Aula <a href="#" class="alert-danger">estruture uma Aula no seu curso</a> para compatilhar seu conhecimento.
    </div>
    @endforelse
</table>

{!! $aulas->render() !!}
@endsection