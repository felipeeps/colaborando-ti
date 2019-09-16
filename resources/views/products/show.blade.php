@extends('layouts.master')

@section('conteudo')
    <h4>Informações do Produto</h4>
        <table class="table table-hover">
            <tr>
                <td>Nome: {{ $products->name }}</td>
                <td >Quantidade: {{ $products->amount}}</td>
                <td><a href="{{$products->id}}/edit">Editar Produto</a></td>
            </tr>
        </table>
@endsection

