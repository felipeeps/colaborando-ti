@extends('layouts.master')

@section('conteudo')
    <h4>Listagem das Categorias</h4>
    <table class="table table-hover">
        <tr>
            <th scope="col">Nome:</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td><a href="posts/{{$post->id}}">{{$post->name}}</a></td>
            </tr>
         @endforeach    
    </table>

    {!! $posts->render() !!}
@endsection