@extends('layouts.master')

@section('conteudo')
    <h2>Novo Produto</h2>
    
    <form action="{{route('products.store')}}" method="post">
        
        {!! csrf_field() !!}
        
        <p class="form-group">
            <label for="name">Nome:</label>
            <input name="name" required="" class="form-control" type="text">
        </p>

        <p class="form-group">
            <label for="amount">Quantidade:</label>
            <input name="amount" required="" class="form-control" type="number">
        </p>
            
        <p class="form-group">
            <input class="btn btn-default" type="reset" value="Limpar">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </p>
    </form>
@endsection



        