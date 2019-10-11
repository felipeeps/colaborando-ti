@extends('layouts.master')

@section('conteudo')
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $posts->name_post}}</li>
    </ol>
    </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">{{ $posts->name_post}}</h1>
                <p class="lead">Última modificação: {{ date( 'd/m/Y H:i' , strtotime($posts->updated_at))}}</p>
            </div>
        </div>
         <dl>
             <dt>Categoria</dt>
             <dd>{{$posts->categorie}}</dd>

             <dt>Nível de Conhecimento</dt>
             <dd>{{$posts->nivel}}</dd>
             
             <dt>Link</dt>
             <dd>{{$posts->link}}</dd>

             <dt>Conteúdo</dt>
             <dd>{{$posts->description}}</dd>

             <dt>Status</dt>
             <dd>{{$posts->status}}</dd>

             <dt>Avaliação</dt>
             <dd>{{$posts->nota}}</dd>
         </dl>
        @can('update_post', $posts)
         <a href="{{$posts->id}}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar Post</a>
        @endcan
@endsection

