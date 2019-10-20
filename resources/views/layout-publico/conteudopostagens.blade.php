  <!-- blog details -->
  <section class="section-sm bg-gray">
      <div class="container">
          @forelse($posts as $pend)
          <div class="row">
              <div class="col-12">
                  <ul class="list-inline">
                      <li class="list-inline-item mr-4 mb-3 zmb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>{{$pend->name_post}}</li>
                      <li class="list-inline-item mr-4 mb-3 zmb-md-0 text-light">{{$pend->nivel}}</li>
                      <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">{{ date( 'd/m/Y H:i' , strtotime($pend->updated_at))}}</li>
                      @if($pend->nota >= 0)
                      <li class="list-inline-item mr-3 ml-0">Avaliação: Boa</li>
                      @else
                      <li class="list-inline-item mr-3 ml-0">Avaliação: Ruim</li>
                      @endif
                      @if (session('success-nota'))
                      <div class="alert alert-success" role="alert">
                          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-thumb-up mr-2"></i>{{ session('success-nota') }}</li>
                      </div>
                      @else
                      <!-- categoria -->
                      <br>
                      <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="Gostei/{{$pend->id}}"><i class="ti-thumb-up mr-2"></i>Gostei desse post!</a></li>
                      <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="NaoGostei/{{$pend->id}}"><i class="ti-thumb-down mr-2"></i>Não gostei desse post!</a></li>
                      @endif
                  </ul>
              </div>
              <!-- border -->
              <div class="col-12 mt-4">
                  <div class="border-bottom border-primary"></div>
              </div>
              <!-- blog contect -->
              <div class="col-12 mb-5">
                  <h2>{{$pend->name_post}}</h2>
                  <p>{{$pend->link}}</p>
                  <p>{!! $pend->description !!}</p>
              </div>
          </div>
          @empty
          <div class="alert alert-danger" role="alert">
              Não temos nenhuma postagem disponivel no momento, <a href="#" class="alert-link">faça sua publicação</a> e compatilhe seu conhecimento.
          </div>
          @endforelse
      </div>
  </section>
  <!-- /blog details -->