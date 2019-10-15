@extends('layouts.master')

@section('conteudo')
@if (session('status-sucess'))
<div class="alert alert-success" role="alert">>
    {{ session('status-sucess') }}
</div>
@endif
@if (session('status-error'))
<div class="alert alert-danger" role="alert">>
    {{ session('status-error') }}
</div>
@endif
<h4>Listagem das Categorias</h4>
<table class="table table-hover">
    <tr>
        <th scope="col">Nome:</th>
        <th scope="col">Última Modificação:</th>
        <th scope="col">Editar:</th>
        <th scope="col">Excluir:</th>
    </tr>

    @foreach($categories as $categorie)
    <tr>
        <td><a href="categories/{{$categorie->id}}">{{$categorie->name}}</a></td>
        <td>{{ date( 'd/m/Y H:i' , strtotime($categorie->updated_at))}}</a></td>
        <td><a href="categories/{{$categorie->id}}" style="color: green;" class="fa fa-check" aria-hidden="true"></a>
        <td><a href="categoriadesativada/{{$categorie->id}}" style="color: red" class="fa fa-trash" aria-hidden="true"></a>
    </tr>

    @endforeach
</table>

{!! $categories->render() !!}
@endsection