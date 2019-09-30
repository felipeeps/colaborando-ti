<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Colaborando TI')</title>

    <!-- CSS da aplicação -->
    @include('estilos.estilos-manager')
</head>

  <body id="page-top">
    <!-- Menu superior -->
        @include('layouts.menus')
    <!-- Fim Menu superior -->

    <div id="wrapper">
        <!-- Menu Lateral -->
            @include('layouts.menu-lateral')
        <!-- Fim Menu Lateral -->

        <!-- Conteúdo do site -->
        <div id="content-wrapper">
            <div class="container-fluid">
                @yield('conteudo')
            </div>
        </div>    
        <!-- Fim Conteúdo do site -->
    </div>
    
    <!-- Section com os scripts -->
        @include('scripts.scripts-manager')
    <!-- Fim Section com os scripts -->

  </body>

@show