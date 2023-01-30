@extends('layouts.auth')

@section('content')

    <section class="login-form dark-bg page-section-ptb bg-overlay-black-30 bg" style="background: url(/assets/images/pattern/02.png) no-repeat 0 0;">
        <form id="form" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="login-1-form register-1-form clearfix text-center">

                            <h4 class="title divider-3 text-white">{{ __("Confirmation de mot de passe") }}</h4>

                            <div class="section-field mb-3">
                                <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
                                    <input id="password" type="password" class="Password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">

                                </div>
                            </div>


                            <div class="clearfix"></div>

                            <div class="section-field text-uppercase text-center mt-2"> <button type="submit" class="button btn-lg btn-theme full-rounded animated right-icn"><span>{{ __("Confirmez votre mot de passe") }}<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>



                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>

    {{-- <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">{{ __('Confirm Password') }}</div>

                     <div class="card-body">
                         {{ __('Please confirm your password before continuing.') }}

                         <form method="POST" action="{{ route('password.confirm') }}">
                             @csrf

                             <div class="form-group row">
                                 <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                 <div class="col-md-6">
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                     @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                     <button type="submit" class="btn btn-primary">
                                         {{ __('Confirm Password') }}
                                     </button>

                                     @if (Route::has('password.request'))
                                         <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                         </a>
                                     @endif
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>--}}
    @endsection
