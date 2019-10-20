  <!-- notice -->
  <section class="section">
      <div class="container">
          <div class="row">

              @forelse($courses as $pend)
              <div class="col-12">

                  <ul class="list-unstyled">
                      <!-- notice item -->
                      <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                          <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">{{$pend->name}}</span> 40 AULAS</div>
                          <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                              <a href="notice-single.html" class="h4 mb-3 d-block">{{$pend->name_course}}</a>
                              <p class="mb-0">Autor: {{$pend->autor}} | Nível: {{$pend->nivel}} </p>
                              @if($pend->nota >= 0)
                              <p class="mb-0">Avaliação: Boa</p>
                              @else
                              <p class="mb-0">Avaliação: Ruim</p>
                              @endif
                          </div>
                          <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">Começar!</a></div>
                      </li>
                      <!-- notice item -->
                  </ul>
              </div>
              @empty
              <div class="alert alert-danger" role="alert">
                  Não temos nenhum curso dessa categoria disponivel no momento, <a href="#" class="alert-link">faça sua publicação</a> e compatilhe seu conhecimento.
              </div>
              @endforelse
          </div>
      </div>
  </section>
  <!-- /notice -->