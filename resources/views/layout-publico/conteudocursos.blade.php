@forelse($courses as $pend)
<!-- section -->
<section class="section-sm">
    <div class="container">
        <!-- course info -->
        <div class="row align-items-center mb-5">
            <div class="col-xl-6 order-1 col-sm-6 mb-4 mb-xl-0">
                <h2>{{$pend->name_course}}</h2>
            </div>
            <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                <ul class="list-inline text-xl-center">
                    <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                        <div class="d-flex align-items-center">
                            <i class="ti-book text-primary icon-md mr-2"></i>
                            <div class="text-left">
                                <h6 class="mb-0">AULAS</h6>
                                @if($contagem == 1)
                                <p class="mb-0">{{$contagem}} Aula</p>
                                @else
                                <p class="mb-0">{{$contagem}} Aulas</p>
                                @endif
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                        <div class="d-flex align-items-center">
                            <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                            <div class="text-left">
                                <h6 class="mb-0">Carga Horária</h6>
                                <p class="mb-0">{{$pend->carga_horaria}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- border -->
            <div class="col-12 mt-4 order-4">
                <div class="border-bottom border-primary"></div>
            </div>
        </div>
        <!-- course details -->
        <div class="row">
            <div class="col-12 mb-4">
                <h3>Descrição</h3>
                <p>{!!$pend->description!!}</p>
            </div>
            <div class="col-12 mb-4">
                <h3 class="mb-3">Aulas</h3>
                <ul class="list-styled">
                    @forelse($aulas as $aula)
                    <li><a href="">{{$aula->name_aula}}</a></li>
                    @empty
                    <div class="alert alert-danger" role="alert">
                        Esse curso não possui nenhuma aula disponivel até o momento!
                    </div>
                    @endforelse
                </ul>
            </div>
            <!-- teacher -->
            <div class="col-12">
                <h5 class="mb-3">Colaborador</h5>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="media mb-2 mb-sm-0">
                        <div class="media-body">
                            <h4 class="mt-0">{{$pend->autor}}</h4>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-primary mt-4"></div>
            </div>
        </div>
    </div>
</section>
@empty
<div class="alert alert-danger" role="alert">
    Não temos nenhuma curso disponivel no momento, <a href="#" class="alert-link">faça sua publicação</a> e compatilhe seu conhecimento.
</div>
@endforelse