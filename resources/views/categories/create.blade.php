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

</div>
@endsection