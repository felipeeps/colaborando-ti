@extends('layouts.master')

@section('conteudo')
    <h2>Novo Post</h2>
    
    <form action="{{route('posts.store')}}" method="post">
        
        {!! csrf_field() !!}
        
        <p class="form-group">
            <label for="categorie">Categoria:</label>
            <input name="categorie" required="" class="form-control" type="text">
        </p>

        <p class="form-group">
            <label for="link">Link:</label>
            <input name="link" required="" class="form-control" type="text">
        </p>

        <p class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </p>
            
        <p class="form-group">
            <input class="btn btn-default" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </p>
    </form>
@endsection



        