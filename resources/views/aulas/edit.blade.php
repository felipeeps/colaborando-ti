@extends('layouts.master')

@section('conteudo')
    <h2>Novo Produto</h2>
        <form method="post" action="{{ route('products.update', $products->id) }}" >
            @method('PATCH')
            @csrf
            <p class="form-group">
                <label for="name">Nome:</label>
                <input name="name" class="form-control" required="" type="text" value={{ $products->name }}>
            </p>

            <p class="form-group">
                <label for="amount">Quantidade:</label>
            <input name="amount" class="form-control" required="" type="number" value={{ $products->amount }}>
            </p>
            
            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar">
            </p>
        </form>
@endsection

