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
            
            <p class="form-group">
                <label for="categorie_image">Imagem:</label>
                <input name="categorie_image" required="" class="form-control-file" type="file">
            </p>

            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar">
            </p>
@endsection

