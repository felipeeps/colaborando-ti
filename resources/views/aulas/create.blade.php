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

<h2>Nova Aula</h2>

<form action="{{route('aulas.store')}}" method="post">

    {!! csrf_field() !!}
    <p class="form-group">
        <label for="course">Curso:</label>
        <select class="custom-select" name="course" id="course">
            <option value="" disabled selected hidden>Selecione o curso</option>
            @foreach($courses as $course)
            <option value="{{$course->id_course}}">{{$course->name_course}}</option>
            @endforeach
        </select>
    </p>

    <p class="form-group">
        <label for="name_aula">Nome da Aula:</label>
        <input name="name_aula" required="" class="form-control" type="text">
    </p>
 
    <p class="form-group">
        <label for="link">Link</label>
        <input name="link" required="" placeholder="Link de vídeo ou fonte original da aula" class="form-control" type="text">
    </p>

    <p class="form-group">
        <label for="description">Descrição:</label>
        <textarea name="description" id="description" style="width:70%;height:200px;" class="form-control" rows="3"></textarea>
    </p>

    <p class="form-group">
        <input class="btn btn-default" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Enviar">
    </p>

    <p class="form-group">
        <input type="hidden" name="autor" value="{{Auth::user()->name}}">
    </p>
    @endsection