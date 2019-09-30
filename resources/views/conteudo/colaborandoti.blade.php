<head>
    <!-- mobile responsive meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Colaborando TI')</title>
    
    <!-- CSS da aplicação -->  
    @include('estilos.estilos')
</head>

<body>
    <!-- Header -->
    @include('layout-publico.header')
    <!-- Menu -->
    @include('layout-publico.menu')
    <!-- Modal Cadastro -->
    @include('layout-publico.modalCadastro')
    <!-- Modal Login -->
    @include('layout-publico.modalLogin')
    <!-- Cabeçalho -->
    @include('layout-publico.cabecalho')
    <!-- Cards -->
    @include('layout-publico.cardsPaginaInicial')
    <!-- Rodape -->
    @include('layout-publico.rodape')
    <!-- Scripts -->
    @include('scripts.scripts')
</body>