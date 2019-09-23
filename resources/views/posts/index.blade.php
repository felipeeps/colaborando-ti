@extends('layouts.master')

@section('conteudo')
    <h4>Meus Posts</h4>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nome:</th>
            <th scope="col">Categoria:</th>
            <th scope="col">Status:</th>
            <th scope="col">Última modificação:</th>
        </tr>

        @foreach($listacategorias as $post)
            <tr>
                <td><a href="posts/{{$post->id}}">{{$post->name_post}}</a></td>
                <td>{{$post->nomeCategoria}}</td>
                <td>{{$post->status}}</td>
                <td>{{ date( 'd/m/Y H:i' , strtotime($post->updated_at))}}</td>
            </tr>
         @endforeach    
    </table>

    {!! $posts->render() !!}
@endsection