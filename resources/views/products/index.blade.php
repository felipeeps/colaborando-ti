@extends('layouts.master')

@section('conteudo')
    <h4>Listagem dos Produtos</h4>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nome:</th>
            <th scope="col">Quantidade:</th>
        </tr>

        @foreach($products as $product)
            <tr>
                <td><a href="products/{{$product->id}}">{{$product->name}}</a></td>
                <td>{{$product->amount}}</td>
            </tr>
         @endforeach    
    </table>

    {!! $products->render() !!}
@endsection