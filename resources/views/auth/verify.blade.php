@extends('layouts.auth')

@section('content')

<section class="page-section-ptb pb-50 sm-pb-6">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-2">
          <div class="text-center">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail') }}
            </div>
            @endif
            <h2 class="title divider">{{ __('Compte non vérifié') }}</h2>
            <p style="font-size: 1rem;">


                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <p style="font-size: 1.4rem;">{{ __("Veuillez aller dans votre boîte mail et cliquer sur le boutton << Vérifier e-mail >> ") }}</p>
                    <span style="font-size: 1rem;"> {{ __("Si vous n'avez pas reçu d'email de vérification") }}  , <button style="font-size: 1rem;" type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __("cliquez ici pour en demander un autre") }}</button></span> .
                </form>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
