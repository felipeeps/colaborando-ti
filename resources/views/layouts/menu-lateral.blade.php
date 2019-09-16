<div id="wrapper">
    <!-- Operações Menu Lateral -->
    <ul class="sidebar navbar-nav">
        <!-- Ínicio -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- FIM Ínicio -->

        <!-- CRUD Categoria -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-tags" aria-hidden="true"></i>
                <span>Categorias</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Seleciona a operação:</h6>
                <a class="dropdown-item" href="{{route('categories.create')}}">Nova Categoria</a>
                <a class="dropdown-item" href="{{route('categories.index')}}">Listar Categoria</a>
            </div>
        </li>
        <!-- FIM CRUD Categoria -->

                <!-- CRUD POST -->
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i i class="fa fa-code" aria-hidden="true"></i>
                <span>Post</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Seleciona a operação:</h6>
                <a class="dropdown-item" href="{{route('posts.create')}}">Novo Post</a>
                <a class="dropdown-item" href="{{route('posts.index')}}">Listar Posts</a>
            </div>
        </li>
        <!-- FIM CRUD Posts -->


        <!-- Relatórios -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Relatórios</span>
            </a>
        </li>
        <!-- FIM Relatórios -->
        
        <!-- Vendas -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-table"></i>
                <span>Vendas</span>
            </a>
        </li>
        <!-- FIM Vendas -->
    </ul>
    <!-- FIM Operações Menu Lateral -->
</div>
