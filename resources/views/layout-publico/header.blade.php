     <!-- header -->
     @guest
     <header class="fixed-top header">
         <!-- top header -->
         <div class="top-header py-2 bg-white">
             <div class="container">
                 <div class="row no-gutters">
                     <div class="col-lg-8 text-center text-lg-left">
                         <ul class="list-inline">
                             <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">{{ __('Entrar') }}</a></li>
                             <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">{{ __('Cadastrar-se') }}</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         @else
         <header class="fixed-top header">
             <!-- top header -->
             <div class="top-header py-2 bg-white">
                 <div class="container">
                     <div class="row no-gutters">
                         <div class="col-lg-8 text-center text-lg-left">
                             <ul class="list-inline">
                                 <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Bem Vindo {{ Auth::user()->name }}</a></li>
                                 <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/admin">Administrador</a></li>
                                 <li class="list-inline-item">
                                     <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                 </li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             @endguest




             <!-- final top header -->