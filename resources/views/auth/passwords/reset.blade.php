@extends('layouts.auth')

@section('content')

    <section class="login-form dark-bg page-section-ptb bg-overlay-black-30 bg" style="background: url(/assets/images/pattern/02.png) no-repeat 0 0;">
        <form id="form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="login-1-form register-1-form clearfix text-center">
                            <h4 class="title divider-3 mb-3 text-white">{{ __("Réinitialisation de mot de passe") }}</h4>

                            <div class="section-field mb-3">
                                <div class="field-widget"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <input id="email" class="email @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Adresse E-Mail') }}" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="section-field mb-3">
                                <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
                                    <input id="password" type="password" class="Password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="section-field mb-3">
                                <div class="field-widget"> <i class="glyph-icon flaticon-padlock"></i>
                                    <input id="password-confirm" type="password" class="Password" placeholder="{{ __('Confirmer votre mot de passe') }}" name="password_confirmation" required autocomplete="new-password">

                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="section-field text-uppercase text-center mt-2"> <button type="submit" class="button btn-lg btn-theme full-rounded animated right-icn"><span>{{ __("Réinitialiser votre mot de passe") }}<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button> </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>

    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    @endsection
