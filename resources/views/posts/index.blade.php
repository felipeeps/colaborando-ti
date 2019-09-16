@extends('layouts.master')

@section('conteudo')
    <h4>Listagem das Categorias</h4>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nome:</th>
        </tr>

        @foreach($categories as $categorie)
            <tr>
                <td><a href="categories/{{$categorie->id}}">{{$categorie->name}}</a></td>
            </tr>
         @endforeach    
    </table>

    {!! $categories->render() !!}
@endsection