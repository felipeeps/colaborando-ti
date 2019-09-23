@extends('layouts.master')

@section('conteudo')
    <h4>Aprovações Pendente</h4>

    @forelse($pendente as $pend)
    <div class="card">
        <h5 class="card-header">{{$pend->name}}</h5>
            <div class="card-body">
                <h5 class="card-title"><a href="posts/{{$pend->id}}">{{$pend->name_post}}</a></h5>
                <p class="card-text">{{$pend->description}}</p>
                <p class="card-text"><small class="text-muted">Atualizado em {{ date( 'd/m/Y H:i' , strtotime($pend->updated_at))}}</small></p>
                <a href="postaprovado/{{$pend->id}}" class="btn btn-success">Aprovar</a>
                <a href="postreprovado/{{$pend->id}}" class="btn btn-danger">Não Aprovar</a>
            </div>
        </div>
    @empty
        <div class="alert alert-success" role="alert">
        Você não possui nenhum Post com aprovação pendente, <a href="#" class="alert-link">publique um novo post</a> para compatilhar seu conhecimento.
        </div>
    @endforelse 

@stop