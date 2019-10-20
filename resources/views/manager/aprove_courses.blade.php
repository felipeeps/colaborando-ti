@extends('layouts.master')

@section('conteudo')
<h4>Aprovações de Cursos Pendentes</h4>

@forelse($pendente as $pend)

@can('aprove_course', $pend)
<div class="card">
    <h5 class="card-header">{{$pend->name}}</h5>
    <div class="card-body">
        <h5 class="card-title"><a href="courses/{{$pend->id_course}}">{{$pend->name_course}}</a></h5>
        <p class="card-text"><small class="text-muted">Publicado por {{$pend->autor}} | Atualizado em {{ date( 'd/m/Y H:i' , strtotime($pend->updated_at))}}</small></p>
        <a href="cursoaprovado/{{$pend->id_course}}" class="btn btn-success">Aprovar</a>
        <a href="cursoreprovado/{{$pend->id_course}}" class="btn btn-danger">Não Aprovar</a>
    </div>
</div>
@endcan
@empty
<div class="alert alert-success" role="alert">
    Você não possui nenhum Post com aprovação pendente, <a href="#" class="alert-link">publique um novo post</a> para compatilhar seu conhecimento.
</div>
@endforelse

@stop