@extends('layouts.master')

@section('conteudo')
<h4>Meus Posts</h4>

@if (session('status'))
    <div class="alert alert-danger" role="alert">>
        {{ session('status') }}
    </div>
@endif
@if (session('statusDelete'))
    <div class="alert alert-success" role="alert">>
        {{ session('statusDelete') }}
    </div>
@endif

<table class="table table-hover">
    <tr>
        <th scope="col">Nome:</th>
        <th scope="col">Categoria:</th>
        <th scope="col">Status:</th>
        <th scope="col">Última modificação:</th>
        <th scope="col"></th>
    </tr>

    @forelse($posts as $post)
    @can('view_post', $post)
    <tr>
        <td><a href="posts/{{$post->id}}">{{$post->name_post}}</a></td>
        <td>{{$post->name}}</td>
        <td>{{$post->status}}</td>
        <td>{{ date( 'd/m/Y H:i' , strtotime($post->updated_at))}}</td>
        @can('edit_post', $post)
        <td><a href="postdesativado/{{$post->id}}" style="color: red" class="fa fa-trash" aria-hidden="true" color="red"></a>
            @endcan
    </tr>
    @endcan
    @empty
    <div class="alert alert-danger" role="alert">
        Você não possui nenhum Post <a href="#" class="alert-danger">publique um novo post</a> para compatilhar seu conhecimento.
    </div>
    @endforelse
</table>

{!! $posts->render() !!}
@endsection