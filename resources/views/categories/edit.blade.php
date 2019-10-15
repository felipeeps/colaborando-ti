@extends('layouts.master')

@section('conteudo')
    <h2>Novo Produto</h2>
    <form method="post" action="{{ route('categories.update', $categorias->id) }}" >
            @method('PATCH')
            @csrf
            <p class="form-group">
                <label for="name">Nome:</label>
                <input name="name" required="" class="form-control" type="text" value='{{$categorias->name}}'>
            </p>
            
            <img class="card-img-top rounded-0 mh-100" style="width: 100px; height: 100px;" src="{{ url('storage/categorias/'.$categorias->categorie_image)}}" alt="Post thumb">
            <p class="form-group">
                <label for="categorie_image">Imagem:</label>
                <input name="categorie_image" class="form-control-file" type="file">
            </p>

            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar">
            </p>
@endsection

