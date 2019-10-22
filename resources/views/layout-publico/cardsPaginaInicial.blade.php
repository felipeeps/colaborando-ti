<!-- cards -->
<section class="section">
    <div class="container">
        <!-- cards list -->
        <div class="row justify-content-center">
            <!-- card item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{ url('images/index/course-1.png')}}" alt="course thumb">
                    <div class="card-body">
                        <a href="{{URL::asset('cursos')}}">
                            <h4 class="card-title">Cursos Gratuitos</h4>
                        </a>
                        <p class="card-text mb-4"> Cursos totalmente gratuitos disponibilizados por colaboradores da plataforma e avalidos pelos estudantes.</p>
                        <a href="{{URL::asset('cursos')}}" class="btn btn-primary btn-sm">Veja os cursos disponíveis</a>
                    </div>
                </div>
            </div>


            <!-- cards item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{ url('images/index/course-2.jpg')}}" alt="course thumb">
                    <div class="card-body">
                        <a href="{{URL::asset('postagens')}}">
                            <h4 class="card-title">Postagens</h4>
                        </a>
                        <p class="card-text mb-4"> Postagens de dúvidas, correções de problemas e curiosidades de assuntos de TI, publicados pelos estudantes.</p>
                        <a href="{{URL::asset('postagens')}}" class="btn btn-primary btn-sm">Acesse a página de postagens</a>
                    </div>
                </div>
            </div>
            <!-- cards item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{ url('images/index/course-3.jpg')}}" alt="course thumb">
                    <div class="card-body">
                        <a href="/admin">
                            <h4 class="card-title">Colaboração</h4>
                        </a>
                        <p class="card-text mb-4"> Colabore com nossa comunidade, disponibilizando o seu conhecimento sem medo.</p>
                        <a href="/admin" class="btn btn-primary btn-sm">Começar a colaborar!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>