@extends('layouts.master')

@section('conteudo')
<h2>Nova Categoria</h2>

<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">

    {!! csrf_field() !!}

    <p class="form-group">
        <label for="name">Nome:</label>
        <input name="name" required="" class="form-control" type="text">
    </p>

    <p class="form-group">
        <label for="categorie_image">Imagem:</label>
        <input name="categorie_image" required="" class="form-control-file" type="file">
    </p>

    <p class="form-group">
        <input class="btn btn-default" type="reset" value="Limpar">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </p>
</form>

<!--Avaliar o text área abaixo nos posts -->
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    }); // convert all text areas to rich text editor on that page

    bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('area1');
    }); // convert text area with id area1 to rich text editor.

    bkLib.onDomLoaded(function() {
        new nicEditor({
            fullPanel: true
        }).panelInstance('area2');
    }); // convert text area with id area2 to rich text editor with full panel.
</script>

<script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() {
        new nicEditor({
            maxHeight: 200
        }).panelInstance('area');
        new nicEditor({
            fullPanel: true,
            maxHeight: 200
        }).panelInstance('area1');
    });
    //]]>
</script>
</head>
  <textarea name="area1" id="area1" style="width:70%;height:200px;">
       Some Initial Content was in this textarea
  </textarea>
    </div>
    @endsection