 <!-- Modal Cadstrar -->
 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content rounded-0 border-0 p-4">
             <div class="modal-header border-0">
                 <h3>Preencha as informações para o cadastro:</h3>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="login">
                     <form method="POST" action="{{ route('register') }}" class="row">
                         @csrf
                         <div class="col-12">
                             <input id="name" type="text" class="form-control mb-3{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('Nome') }}">
                             @if ($errors->has('name'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('name') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-12">
                             <input id="email" type="email" class="form-control mb-3{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail') }}" required>

                             @if ($errors->has('email'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-12">
                             <input id="password" type="password" class="form-control mb-3{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Senha') }}" required>

                             @if ($errors->has('password'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-12">
                             <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation" placeholder="{{ __('Confirme sua Senha') }}" required>
                         </div>
                         <div class="col-12">
                             <button type="submit" class="btn btn-primary">
                                 {{ __('Cadastrar') }}
                             </button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Final Modal Cadastrar -->