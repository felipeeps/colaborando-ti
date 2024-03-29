<div id="wrapper">
    <!-- Operações Menu Lateral -->
    <ul class="sidebar navbar-nav">
        <!-- Ínicio -->
        <li class="nav-item active">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- FIM Ínicio -->
        <br>

        <li class="nav-item disable">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Minhas publicações</span>
            </a>
        </li>

        <!-- CRUD POST -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i i class="fa fa-code" aria-hidden="true"></i>
                <span>Meus Posts</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('posts.create')}}">Novo Post</a>
                <a class="dropdown-item" href="{{route('posts.index')}}">Listar Posts</a>
            </div>
        </li>
        <!-- FIM CRUD Posts -->

        <!-- CRUD CURSOS -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <span>Meus Cursos</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Cursos:</h6>
                <a class="dropdown-item" href="{{route('courses.create')}}">Novo Curso</a>
                <a class="dropdown-item" href="{{route('courses.index')}}">Meus Cursos</a>
                <h6 class="dropdown-header">Aulas:</h6>
                <a class="dropdown-item" href="{{route('aulas.create')}}">Nova Aula</a>
                <a class="dropdown-item" href="{{route('aulas.index')}}">Listar Aulas</a>
            </div>
        </li>
        <!-- FIM CRUD CURSOS -->
        <br>

        @can('aprove_post', Auth::user())
        <li class="nav-item disable">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Gerenciar publicações</span>
            </a>
        </li>

        <!-- CRUD Categoria -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-tags" aria-hidden="true"></i>
                <span>Categorias</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{route('categories.create')}}">Nova Categoria</a>
                <a class="dropdown-item" href="{{route('categories.index')}}">Listar Categoria</a>
            </div>
        </li>
        <!-- FIM CRUD Categoria -->

        <!-- APROVAÇÕES -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i i class="fa fa-check-square" aria-hidden="true"></i>
                <span>Aprovar publicações</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="{{URL::asset('aprovarcursos')}}">Cursos</a>
                <a class="dropdown-item" href="{{URL::asset('aprovarposts')}}">Posts</a>
        </li>
        <!-- FIM APROVAÇÕES -->
        @endcan
    </ul>
    <!-- FIM Operações Menu Lateral -->
</div>