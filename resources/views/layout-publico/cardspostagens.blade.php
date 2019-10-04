<section class="section">
    <div class="container">
        <div class="row">
            <!-- blog post -->
            @forelse($posts as $pend)
            <article class="col-lg-4 col-sm-6 mb-5">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{ url('images/posts/postagens.png')}}" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">{{ date( 'd/m/Y H:i' , strtotime($pend->updated_at))}}</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">Por {{$pend->autor}}</li>
                        </ul>
                        <ul class="list-inline mb-3">
                            <!-- categoria -->
                            <li class="list-inline-item mr-3 ml-0"><a class="text-light" href="#"><i class="ti-tag mr-2"></i>{{$pend->name}}</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">{{$pend->name_post}}</h4>
                        </a>
                        <p class="card-text" style="max-width: 50ch;  overflow: hidden;  text-overflow: ellipsis;  white-space: nowrap">{{$pend->description}}</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">Leia Mais</a>
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