    <!-- cabeçalho -->
    
    @forelse($posts as $pend)
    <section class="page-title-section overlay" data-background="{{ url('images/index/page-title.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/postagens">Postagens</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{$pend->name}}</li>
                        <li class="list-inline-item text-white h4 font-secondary nasted">{{$pend->name_post}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @empty
            <div class="alert alert-danger" role="alert">
                Não temos nenhuma postagem disponivel no momento, <a href="#" class="alert-link">faça sua publicação</a> e compatilhe seu conhecimento.
            </div>
            @endforelse
    <!-- final cabeçalho -->