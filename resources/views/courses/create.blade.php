@extends('layouts.master')

@section('conteudo')

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    }); // convert all text areas to rich text editor on that page

    bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('description');
    }); // convert text area with id post to rich text editor.
</script>

<h2>Novo Curso</h2>

<form action="{{route('courses.store')}}" method="post">

    {!! csrf_field() !!}

    <p class="form-group">
        <label for="name_course">Nome do Curso:</label>
        <input name="name_course" required="" class="form-control" type="text">
    </p>
 
    <p class="form-group">
        <label for="categorie">Categoria:</label>
        <select class="custom-select" name="categorie" id="categorie">
            <option value="" disabled selected hidden>Escolha a categoria do POST</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endforeach
        </select>
    </p>

    <p class="form-group">
        <label for="carga_horaria">Carga Horária</label>
        <input name="carga_horaria" required="" placeholder="Tempo estimado (Horas ou minutos)" class="form-control" type="text">
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
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" style="width:70%;height:200px;" class="form-control" rows="3"></textarea>
    </p>

    <p class="form-group">
        <input type="hidden" name="status" value="Aguardando Aprovação">
    </p>

    <p class="form-group">
        <input type="hidden" name="nota" value="0">
    </p>

    <p class="form-group">
        <input class="btn btn-default" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Enviar">
    </p>

    <p class="form-group">
        <input type="hidden" name="autor" value="{{Auth::user()->name}}">
    </p>
    @endsection