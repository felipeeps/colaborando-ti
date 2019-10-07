        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand" href="/"><img src="{{ url('images/index/logo.png') }}" alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item @@home">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item @@blog">
                                <a class="nav-link" href="/postagens">Postagens</a>
                            </li>
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cursos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($categorias as $categoria)
                                        <a class="dropdown-item" href="#">{{$categoria->name}}</a>
                                    @endforeach
                                </div>               
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- final navbar -->

        </header>
        <!-- /header -->