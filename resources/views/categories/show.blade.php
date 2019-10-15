@extends('layouts.master')

@section('conteudo')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Categorias</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $categories->name}}</li>
    </ol>
</nav>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{ $categories->name}}</h1>
        <p class="lead">Última modificação: {{ date( 'd/m/Y H:i' , strtotime($categories->updated_at))}}</p>
    </div>
</div>
<dl>
    <dt>Categoria</dt>
    <dd>{{$categories->name}}</dd>

    <dt>Imagem</dt>
                
    <dd><img class="card-img-top rounded-0 mh-100" style="width: 350px; height: 200px;" src="{{ url('storage/categorias/'.$categories->categorie_image)}}" alt="Post thumb"></dd>
    <dd>{{$categories->categorie_image}}</dd>
</dl>
@can('aprove_post', Auth::user())
<a href="{{$categories->id}}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar Categoria</a>
@endcan
@endsection