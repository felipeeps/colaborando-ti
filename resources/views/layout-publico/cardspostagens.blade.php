<section class="section">
    <div class="container">
        <div class="row">
            <!-- blog post -->
            @forelse($posts as $pend)
            <article class="col-lg-4 col-sm-6 mb-5">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0 mh-100" style="width: 350px; height: 200px;" src="{{ url('storage/categorias/'.$pend->categorie_image)}}" alt="Post thumb">

                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">{{ date( 'd/m/Y H:i' , strtotime($pend->updated_at))}}</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">Por <a href="/postagens/autor/{{$pend->autor}}">{{$pend->autor}}</a></li>
                        </ul>
                        <ul class="list-inline mb-3">
                            <!-- categoria -->
                            <li class="list-inline-item mr-3 ml-0"><i class="ti-tag mr-2"></i><a href="/postagens/linguagem/{{$pend->name}}">{{$pend->name}}</a>: {{$pend->nivel}}</li>
                            @if($pend->nota >= 0)
                            <li class="list-inline-item mr-3 ml-0">Avaliação: Boa</li>
                            @else
                            <li class="list-inline-item mr-3 ml-0">Avaliação: Ruim</li>
                            @endif
                        </ul>
                        <a href="postagens/{{$pend->id}}">
                            <h4 class="card-title">{{$pend->name_post}}</h4>
                        </a> 
                        <a href="/postagens/{{$pend->id}}" class="btn btn-primary btn-sm">Leia Mais</a>
                    </div>
                </div>
            </article>
            @empty
            <div class="alert alert-danger" role="alert">
                Não temos nenhuma postagem disponivel no momento, <a href="#" class="alert-link">faça sua publicação</a> e compatilhe seu conhecimento.
            </div>
            @endforelse
        </div>
    </div>
</section>