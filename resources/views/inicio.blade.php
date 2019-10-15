@extends('layouts.master')

@section('conteudo')
<div class="card">
    <h5 class="card-header">Bem Vindo {{ Auth::user()->name }}</h5>

    <div class="card-body">
        <h5 class="card-title">Compartilhe seu conhecimento em TI com nossa comunidade de forma gratuita!</h5>
        <p class="card-text">Nossa plataforma tem como foco disponibilizar de forma gratuita conhecimentos sobre as diversas áreas de tecnologia, para entender um pouco melhor nosso objetivo entra na página sobre nós.</p>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Posts Diversos</h5>
                <p class="card-text">Quer falar de algum assunto em especifico? Alguma dica? Encontrou a solução para um erro comum?</p>
                <a href="{{route('posts.create')}}" class="btn btn-success">Compatilhe essa informação</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cursos</h5>
                <p class="card-text">Estruture um curso sobre um assunto de TI, fique a vontade para usar a metodologia que mais te agrada!</p>
                <a href="#" class="btn btn-success">Publique seu curso</a>
            </div>
        </div>
    </div>
</div>
<br>
@cannot('aprove_post', Auth::user())
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Seja um Moderador!</h5>
        <p class="card-text">Se torne uma moderador do sistema para pode aprovar as publicações dos outros colaboradores, e cadstrar mais categorias para expandirmos nossa plataforma de colaboração!</p>
        <a href="#" class="btn btn-success">Solicitar aprovação de moderador!</a>
    </div>
</div>
@endcannot
@endsection