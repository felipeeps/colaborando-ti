@extends('layouts.master')

@section('conteudo')
    <h2>Novo Post</h2>
    
    <form action="{{route('posts.store')}}" method="post">
        
        {!! csrf_field() !!}

        <p class="form-group">
            <label for="name_post">Titulo:</label>
            <input name="name_post" required="" class="form-control" type="text">
        </p>
        
        <p class="form-group">
            <label for="categorie">Categoria:</label>
            <select class="custom-select" name="categorie" id="categorie">
                <option value="" disabled selected hidden>Escolha a categoria do POST...</option>
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
            <input name="link" required="" class="form-control" type="text">
        </p>

        <p class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </p>

        <p class="form-group">
            <input type="hidden" name="status" value="Aguardando Aprovação">
        </p>

        <label for="status">Como você avalia esse post?</label>
        <br>
        <p class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="nota" id="op1" value="1">
            <label class="form-check-label" for="inlineRadio1">Ruim</label>
        </p>
        <p class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="nota" id="op2" value="2">
            <label class="form-check-label" for="inlineRadio2">Bom</label>
        </p>
        <p class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="nota" id="op3" value="3">
            <label class="form-check-label" for="inlineRadio3">Muito Bom</label>
        </p>
            
        <p class="form-group">
            <input class="btn btn-default" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Enviar">
        </p>

        <p class="form-group">
            <input type="hidden" name="autor" value="{{Auth::user()->name}}">
        </p>

@endsection



        