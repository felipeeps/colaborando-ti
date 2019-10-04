<head>
    <!-- mobile responsive meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "{{ url('images/index/ico.ico')}}"/>
    <title>@yield('title', 'Colaborando TI - Postagens')</title>
    
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
    <!-- Cards Postagens -->
    @include('layout-publico.cardspostagens')
    <!-- Rodape -->
    @include('layout-publico.rodape')
    <!-- Scripts -->
    @include('scripts.scripts')
</body>