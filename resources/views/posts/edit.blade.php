@extends('layouts.master')

@section('conteudo')
    <h2>Editar Post</h2>
    <div class="alert alert-warning" role="alert">
        Toda alteração no post, faz com que ele retorne para o fluxo de aprovação!
    </div>
        <form method="post" action="{{ route('posts.update', $posts->id) }}" >
            @method('PATCH')
            @csrf
            <p class="form-group">
                <label for="name_post">Titulo:</label>
                <input name="name_post" required="" class="form-control" type="text" value='{{$posts->name_post}}'>
            </p>
            
            <p class="form-group">
                <label for="categorie">Categoria:</label>
                <select class="custom-select" name="categorie" id="categorie">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>                
                    @endforeach
                </select>
            </p>

            <p class="form-group">
                <label for="nivel">Nivel de Conhecimento</label>
                <select class="form-control" name="nivel">
                    <option>Iniciante</option>
                    <option>Intermediário</option>
                    <option>Avançado</option>
                </select>
            </p>

            <p class="form-group">
                <label for="link">Link:</label>
                <input name="link" required="" class="form-control" type="text" value='{{$posts->link}}'>
            </p>

            <p class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" class="form-control" rows="3">{{$posts->description}}</textarea>
            </p>

            <p class="form-group">
                <input type="hidden" name="status" value="Aguardando Aprovação">
            </p>
  
            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar">
            </p>

@endsection

