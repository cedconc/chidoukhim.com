@extends('layouts.auth')

@section('styles')

    <style>
        #preloader{
            display: none;
        }
    </style>

@endsection

@section('content')

<section class="login-form dark-bg page-section-ptb bg-overlay-black-30 bg" style="background: url(/assets/images/pattern/02.png) no-repeat 0 0;">
    <form id="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="container">
            <div class="row  justify-content-center">
              <div class="col-md-6">
                <div class="login-1-form register-1-form clearfix text-center">
                  <h4 class="title divider-3 mb-3 text-white">{{ __("Créer un compte") }}</h4>

                  <div class="login-1-social mt-5 mb-5 text-center clearfix">
                    <ul class="list-inline text-capitalize" style="text-align: -webkit-center;">
                        <li><a class="fb" href="{{ url('auth/facebook') }}"><i class="fa fa-facebook"></i> {{ __("Facebook") }}</a></li>
                        <li><a class="gplus" href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i> Google</a></li>
                    </ul>
                  </div>


                  @if (isset($_GET['code_chatrane']))

                    <div class="section-field mb-3">
                        <div class="field-widget">
                            @if ( !is_null($chatrane) )
                                <div class="alert alert-success">{{ __("Nom de votre Shadhanite/Shadhan") }} : <strong>{{ $chatrane->prenom }} {{ $chatrane->name }}</strong> </div>
                                <input type="hidden" name="code_chatrane" value="{{ $chatrane->slug }}" required>
                            @else
                                <div class="alert alert-danger">{{ __("Ce code ne correspond a aucun(e) Shadhanite/Shadha") }}</div>
                            @endif
                        </div>
                    </div>


                  @endif


                  @if ( $max == 1 )

                    <div class="section-field mb-3">
                        <div class="field-widget">
                                <div class="alert alert-danger">{{ __("Désolé, votre Shadhanite/Shadhan a atteint le nombre maximal de profils pris en charge") }}</div>
                        </div>
                    </div>


                  @endif





                  <div class="section-field mb-3">
                    <div class="field-widget">

                        <label for="chatrane" class="row">

                            <div class="text-left font-medium col-sm-10">{{ __('Je suis un(e) Shadhanite/Shadhan') }}</div>
                            <input style="height: 1.3rem; width: 1.3rem;" id="chatrane" type="radio" class="form-control col-sm-2" name="chatrane" value="1">


                        </label>

                        <label for="chatrane_non" class="row">

                            <div class="text-left font-medium col-sm-10">{{ __('Je recherche un chidouh') }}</div>
                            <input style="height: 1.3rem; width: 1.3rem;" id="chatrane_non" type="radio" class="form-control col-sm-2" name="chatrane" value="0">

                        </label>

                    </div>
                  </div>


                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="glyph-icon flaticon-user"></i>
                      <input id="prenom" name="prenom" class="web" type="text" placeholder="{{ __('Votre prénom') }}" required>
                    </div>
                  </div>

                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="glyph-icon flaticon-user"></i>
                      <input id="name" name="name" class="web" type="text" placeholder="{{ __('Votre nom') }}" required>
                    </div>
                  </div>



                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="glyph-icon flaticon-phone"></i>
                      <input id="telephone" name="telephone" class="web" type="text" placeholder="{{ __('Numéro de téléphone') }}" required>
                    </div>
                  </div>


                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="fa fa-envelope-o" aria-hidden="true"></i>

                      <input id="email" placeholder="{{ __('Email') }}"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                  </div>
                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
                        <input id="password" placeholder="{{ __('Mot de passe') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="section-field mb-3">
                    <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
                      <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Confirmer le mot de passe') }}" name="password_confirmation" required autocomplete="current-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>





                  <div class="clearfix"></div>
                  <div class="section-field text-uppercase text-center mt-2"> <button type="submit" class="button btn-lg btn-theme full-rounded animated right-icn"><span>{{ __("S'inscrire") }}<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button> </div>
                  <div class="clearfix"></div>
                  <div class="section-field mt-2 text-center text-white">
                    <p class="lead mb-0"> {{ __('Vous avez un compte?') }} <a class="text-white" href="{{ route('login') }}"> <u> {{ __('Connectez-vous!') }} </u> </a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </form>

</section>

@endsection


@section('scripts')
    {!! JsValidator::formRequest('App\Http\Requests\RegisterRequest', '#form') !!}

@endsection
