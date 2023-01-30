<!DOCTYPE html>
<html lang="fr" class="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="robots" content="noydir, noodp">
    <script type="text/javascript">
       // window.ILIUS_CONFIG = JSON.parse('{"env":"prod","platform":{"mobile":false},"gtm":"GTM-5MFNMGH","default_place_id":2284706,"base_url":"\\/\\/www.disonsdemain.fr","landing":{"global":{"is_hpv":true},"survey":{"activated":true}},"api":{"ilius":{"client_id":"VU5MLk9VUi5GUjo="},"algolia":{"app_id":"plYG601EXJGU","api_key":"b7f4be3aef0bd59262cda0a5cd7f75d9"}},"tr":{"base_url":"https://www.disonsdemain.fr/?mtcmk=864835\\/\\/tk.ilius.net","mtcmk":"864835","mtcmk_updated":true,"ktid":0,"klid":0,"keyade_id":"0","fus":"P210Y21rPTg2NDgzNQ=="},"marketing":{"affiliation":{"mtsid":null,"aid":null,"sid":null}},"logged":{"redirection":{"login":"#\\/unlogged\\/redirection\\/?target=\\/post-login\\u0026action_origin=login\\u0026session_origin=864835","registration":"\\/unlogged\\/redirection\\/?target=\\/post-registration\\u0026action_origin=registration\\u0026session_origin=864835"}},"special_offer":null}');
       // window.CONFIG = JSON.parse('{"site":{"name":"www.disonsdemain.fr","category":"senior","brand":"disonsdemain","brandname":"Hessed Chidoukhim","legalentity":"Meetic SAS","locale":"fr","country":"FR","canonical":"https://www.disonsdemain.fr/","product":"dating","features":{"agerestriction":true,"ddpm":{"enabled":true,"container":"GTM-WPNZTTN","brandname":"ourtime"},"recruitment":{"enabled":true,"url":"https://careers.smartrecruiters.com/MeeticGroup"}},"optins":{"terms":{"displayed":true,"checkbox":true,"default_value":false},"privacy":{"displayed":true,"checkbox":true,"default_value":false},"partners":{"displayed":true,"checkbox":true,"default_value":false},"marketing":{"displayed":true,"default_value":false},"customerCare":{"displayed":false}},"url":{"testimonies":"/p/temoignages/testi-couples","app_ios":"https://itunes.apple.com/fr/app/disonsdemain-rencontres-50/id1447250519?mt=8","app_android":"https://play.google.com/store/apps/details?id=net.ilius.android.dating.ourtime"},"hreflang":[{"lang":"fr","href":"https://www.disonsdemain.fr/"},{"lang":"en","href":"https://www.ourtime.co.uk/"},{"lang":"es","href":"https://www.ourtime.es/"},{"lang":"de","href":"https://www.zweisam.de/"},{"lang":"sv","href":"https://se.ourtime.com/"},{"lang":"nl","href":"https://www.ourtime.nl/"},{"lang":"it","href":"https://it.ourtime.com/"},{"lang":"fr-be","href":"https://www.disonsdemain.be/"},{"lang":"de-at","href":"https://www.zweisam.at/"},{"lang":"de-ch","href":"https://www.zweisam.ch/"}]},"landing":{"name":"hpv","background":"2021/senior/sea-couple","indexByRobots":true}}');
    </script>

    <link rel="stylesheet" href="{{ assets_base() }}/assets/css/accueil.css">

    <link rel="stylesheet" type="text/css" href="{{ assets_base() }}/assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="{{ assets_base() }}/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ assets_base() }}/assets/css/style2.css" />
    <script type="text/javascript" src="{{ assets_base() }}/assets/js/modernizr.custom.86080.js"></script>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{assets_base()}}/vendor/cookie-consent/css/cookie-consent.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />




</head>

<body>
    <div id="root">

        <div class="viewport">

            <div class="row bg-primary" id="top-bar-home">
                    <div class="col-md-6" style="align-self: center;">
                        <div class="topbar-left text-left">
                          <ul class="list-inline-home">
                            <li><a href="mailto:contact@chidoukhim.com"><i class="fa fa-envelope-o"> </i> contact@chidoukhim.com </a></li>
                            <li style="margin-left: 1rem;"><a href="#"><i class="fa fa-phone"></i> <b>FR</b>  +33.1.77.50.32.55</a></li>
                            <li><a href="#"> <b>ISR</b>  +972.54.64.85.357 </a></li>
                          </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="topbar-right text-right">
                          <ul class="list-inline-home social-icons color-hover">
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-dribbble">
                                <form action="{{ route('set_locale') }}" method="POST" id="locale-form">
                                    @csrf
                                    <select class="js-example-templating" style="width: 100%" id="locale" name="locale">
                                        <option value="en" data-country="US" @if( app()->getLocale() == 'en' ) selected @endif>EN</option>
                                        <option value="fr" data-country="FR" @if( app()->getLocale() == 'fr' ) selected @endif>FR</option>
                                        <option value="he" data-country="IL" @if( app()->getLocale() == 'he' ) selected @endif>HE</option>
                                    </select>

                                </form>

                            </li>

                          </ul>
                          {{-- <ul class="list-inline text-uppercase top-menu">


                                                            <ul class="navbar-nav" style="display: inline;">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-2x fa-user rounded-circle"></i>
                                </a>
                                <div class="dropdown-menu bg-primary" style="width: fit-content;" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/user/609b997450938">
                                        Mon profil
                                                                                    Shadhanite/Shadhan
                                                                            </a>

                                    <a class="dropdown-item" href="/chidours">

                                                                                    Les Chidoukh de mes membres


                                    </a>
                                  <a class="dropdown-item" href="http://127.0.0.1:8000/he/logout">Se déconnecter</a>
                                </div>
                              </li>
                            </ul>

                          </ul> --}}
                        </div>
                    </div>
            </div>

            <div class="_2yc_bwB2PqyIXDHQKL-r_H" style="padding: 1rem;">
                <div class="_3dU0Obagf3jqypgkEyoXJF">
                    <img src="{{ assets_base() }}/assets/images/logo.png" width="0" height="0"
                        class="kmg-wHVGWycT-zIQ1hACB" alt="logo">
                </div>

                @if (Auth::check())
                    {{-- <div class="_1_LRhZ1yAjjF7eWBxhBO4-">
                        <a href="/home" class="_23LBSP-w890MV-dNfu-N1i tEolJCVE81bp-uKM6wwrN home-btn">{{ __('Mon compte') }}</a>
                    </div> --}}

                    <div class="_1_LRhZ1yAjjF7eWBxhBO4- auth-btn">
                        <a href="/home" class="_23LBSP-w890MV-dNfu-N1i _10eb_CQFovBmpp2yBAkhUD">{{ __('Mon compte') }}</a>
                        <a href="{{ route('logout') }}" class="_23LBSP-w890MV-dNfu-N1i tEolJCVE81bp-uKM6wwrN ">{{ __("Se déconnecter") }}</a>
                    </div>
                @else
                    <div class="_1_LRhZ1yAjjF7eWBxhBO4-">
                        <button id="register-btn" class="_23LBSP-w890MV-dNfu-N1i _10eb_CQFovBmpp2yBAkhUD btn-register register-btn ">S’inscrire</button>
                        <button id="login-btn" class="_23LBSP-w890MV-dNfu-N1i tEolJCVE81bp-uKM6wwrN ">Se connecter</button>
                    </div>
                @endif

            </div>
            <div id="scroller" class="-pkKi215FbeBqwT-Twb7q">
                <div class="_2Qi8yb_cXCBWFup1A8YGOq">
                    <section class="main-frame" id="main-frame">


                        <div class="wrapper">


                            <div class="slider">
                                <div class="slide slide1">
                                  {{-- <div class="caption">
                                    <h2>Slide 1</h2>
                                    <p>Description 1</p>
                                  </div> --}}
                                </div>
                                <div class="slide slide2">
                                  {{-- <div class="caption">
                                    <h2>Slide 2</h2>
                                    <p>Description 2</p>
                                  </div> --}}
                                </div>

                            </div>


                            <div class="main-frame-logo-centered">
                                <img src="{{ assets_base() }}/assets/images/logo.png" width="0" height="0"
                                    class="_1ztPmO3pZpnKLcCF1EQmZE" alt="logo">

                                    @error('email')
                                    <p style="text-align: center!important;
                                        font-size: 1rem;
                                        font-weight: 600;
                                        color: darkred;">
                                        {{ __('Ces identifiants sont incorrects') }}
                                    </p>
                                    @enderror
                            </div>

                            @if (!Auth::check())


                            <div id="register-form" class="_3K4ORQa_nXgo5WNvBg5Aun _4-yQr7tru4HL4s4sAsY8c GkF7mqXZD8toWLXj_nF6o">

                                <div class="login-1-social mt-2 text-center clearfix">
                                    <ul class="list-inline text-capitalize" style="text-align: -webkit-center;">
                                      <li><a class="fb" href="{{ url('auth/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a></li>
                                      <li><a class="gplus" href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i> Google</a></li>
                                    </ul>
                                </div>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <label class="_2l9HMqOXvgZe_pntn4BXbd">{{ __("En tant que Shadhanite/Shadhan vous acceptez notre") }} <a target="_blank" href="/charte_chatrane" class="_17u2DQ7eKBxjBo-5GXPXHn">{{ __("Charte") }}</a> </label>

                                    <div class="_3rLyK8dZBtPJjk1Hb2QR89">
                                        <div class="yhB3k9ozqup_SpPHCVt8O">
                                                <input style="height: 1.3rem; width: 1.3rem; margin-right: 1rem;" id="chatrane" type="radio" value="1" class="_9r_dasijMveLAR9VvCADd" name="chatrane">
                                                <label class="_2l9HMqOXvgZe_pntn4BXbd" for="chatrane">{{ __('Je suis un(e) Shadhanite/Shadhan') }}</label>

                                        </div>



                                    </div>



                                    <div class="_3rLyK8dZBtPJjk1Hb2QR89">
                                        <div class="yhB3k9ozqup_SpPHCVt8O">
                                                <input style="height: 1.3rem; width: 1.3rem; margin-right: 1rem;" id="chatrane_non" type="radio" value="0" class="_9r_dasijMveLAR9VvCADd" name="chatrane">
                                                <label class="_2l9HMqOXvgZe_pntn4BXbd" for="chatrane_non">{{ __('Je recherche un chidouh') }}</label>
                                        </div>
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


                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw">
                                        <label class="_3BhCEB1Pq95xq01DyEI_lI" for="prenom">{{ __("Votre prénom")
                                            }}</label>
                                        <input class="ypM_zDwfChqzrwFSXJDvF" name="prenom" type="text" autocomplete="on"
                                            id="prenom" data-description="prenom" value="{{ old('prenom') }}" required>

                                            @error('prenom')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>




                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw">
                                        <label class="_3BhCEB1Pq95xq01DyEI_lI" for="nom">{{ __("Votre nom") }}</label>
                                        <input class="ypM_zDwfChqzrwFSXJDvF" name="name" type="text" autocomplete="on"
                                            id="nom" data-description="nom" value="{{ old('name') }}" required>


                                            @error('nom')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>




                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw">
                                        <label class="_3BhCEB1Pq95xq01DyEI_lI" for="telephone">{{ __('Numéro de téléphone') }}</label>

                                        <input id="telephone" placeholder="" type="text" class="ypM_zDwfChqzrwFSXJDvF @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" >

                                        @error('telephone')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                    </div>



                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw">
                                        <label class="_3BhCEB1Pq95xq01DyEI_lI" for="login-form-email-input">Adresse
                                            email</label>

                                        <input id="login-form-email-input" placeholder="{{ __('Email') }}" type="email" class="ypM_zDwfChqzrwFSXJDvF @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                        @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror




                                    </div>


                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw"><label class="_3BhCEB1Pq95xq01DyEI_lI"
                                            for="login-form-password-input">Mot de passe</label>
                                        <div class="_2JqQOpB_-I5B_yyJxYQgpH"><input id="login-form-password-input"
                                                name="password" data-description="password"
                                                class="ypM_zDwfChqzrwFSXJDvF _1mxkL5llVuicrKOnow01bw" type="password"
                                                value="" required><button type="button" title="Montrer le mot de passe"
                                                class="_1LfOV-B8tjHPCg19Xa1pEa" hidden=""><img width="18" height="14"
                                                    alt="Montrer le mot de passe"
                                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/show-61dac334fad.svg"></button>
                                        </div>

                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw"><label class="_3BhCEB1Pq95xq01DyEI_lI"
                                            for="password_confirmation">Confirmer le mot de passe</label>
                                        <div class="_2JqQOpB_-I5B_yyJxYQgpH"><input id="password_confirmation"
                                                name="password_confirmation" data-description="password"
                                                class="ypM_zDwfChqzrwFSXJDvF _1mxkL5llVuicrKOnow01bw" type="password"
                                                value="" required><button type="button" title="Montrer le mot de passe"
                                                class="_1LfOV-B8tjHPCg19Xa1pEa" hidden=""><img width="18" height="14"
                                                    alt="Montrer le mot de passe"
                                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/show-61dac334fad.svg"></button>
                                        </div>

                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="_3rLyK8dZBtPJjk1Hb2QR89">
                                        <div class="yhB3k9ozqup_SpPHCVt8O">
                                            <input style="height: 1rem; width: 1rem; margin: 0 1rem .4rem 0;" class="" data-description="remember-me" id="login-remember-me-checkbox" name="remember" type="checkbox">
                                            <label class="_2l9HMqOXvgZe_pntn4BXbd" for="login-remember-me-checkbox">Mémoriser mes identifiants</label>
                                        </div><a href="{{ route('password.request') }}" class="_17u2DQ7eKBxjBo-5GXPXHn"
                                            data-description="forgotten-password">Mot de passe oublié&nbsp;?</a>
                                    </div>
                                    <button data-description="validate"
                                        class="_23LBSP-w890MV-dNfu-N1i CRvBINhOs-NxsFHGvu5kQ">Inscription</button>

                                    <label class="_2l9HMqOXvgZe_pntn4BXbd">{{ __("En cliquant sur Inscription, vous acceptez nos") }} <a target="_blank" href="/cgu" class="_17u2DQ7eKBxjBo-5GXPXHn">{{ __("CGU") }}</a> </label>

                                </form>


                            </div>

                            <div id="login-form" class="GkF7mqXZD8toWLXj_nF6o _4-yQr7tru4HL4s4sAsY8c">

                                <div class="login-1-social mt-2 text-center clearfix">
                                    <ul class="list-inline text-capitalize" style="text-align: -webkit-center;">
                                      <li><a class="fb" href="{{ url('auth/facebook') }}"><i class="fa fa-facebook"></i> Facebook</a></li>
                                      <li><a class="gplus" href="{{ url('auth/google') }}"><i class="fa fa-google-plus"></i> Google</a></li>
                                    </ul>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw"><label class="_3BhCEB1Pq95xq01DyEI_lI"
                                            for="login-form-email-input">Adresse email</label>
                                        <input class="ypM_zDwfChqzrwFSXJDvF" name="email" type="email" autocomplete="on"
                                            id="login-form-email-input" data-description="email" value="">
                                    </div>
                                    <div class="_1p4VdX4ZlKkMkG_Q5Fz6Mw"><label class="_3BhCEB1Pq95xq01DyEI_lI"
                                            for="login-form-password-input">Mot de passe</label>
                                        <div class="_2JqQOpB_-I5B_yyJxYQgpH"><input id="login-form-password-input"
                                                name="password" data-description="password"
                                                class="ypM_zDwfChqzrwFSXJDvF _1mxkL5llVuicrKOnow01bw" type="password"
                                                value=""><button type="button" title="Montrer le mot de passe"
                                                class="_1LfOV-B8tjHPCg19Xa1pEa" hidden=""><img width="18" height="14"
                                                    alt="Montrer le mot de passe"
                                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/show-61dac334fad.svg"></button>
                                        </div>
                                    </div>
                                    <div class="_3rLyK8dZBtPJjk1Hb2QR89">
                                        <div class="yhB3k9ozqup_SpPHCVt8O"><input class="_9r_dasijMveLAR9VvCADd"
                                                data-description="remember-me" id="login-remember-me-checkbox"
                                                name="remember" type="checkbox" checked=""><label
                                                class="_2l9HMqOXvgZe_pntn4BXbd"
                                                for="login-remember-me-checkbox">Mémoriser mes identifiants</label>
                                        </div><a href="{{ route('password.request') }}" class="_17u2DQ7eKBxjBo-5GXPXHn"
                                            data-description="forgotten-password">Mot de passe oublié&nbsp;?</a>
                                    </div><button data-description="validate"
                                        class="_23LBSP-w890MV-dNfu-N1i CRvBINhOs-NxsFHGvu5kQ">Connexion</button>

                                </form>
                                <div class="_1wyVpkZClhwIL-VyOKnKVn"><span>Pas encore membre ?</span>&nbsp;<button
                                        class="_1zsef6oFeWwTnFzzW1cMd0 btn-register" type="button"
                                        data-description="signup">Inscrivez-vous gratuitement</button></div>
                            </div>



                            @endif

                            <div class="_3nL9HBw8yyXaUYq3-oKCFI"><button type="button"
                                    class="_1DetbWHAyxbjm3KL1s3uea _1ZPlPpCs3QEHVa6uV94Hts"><img
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/arrow-back-c998bc8483e.svg"
                                        width="24" height="24"></button>
                                <div class="_2yjqw4FEUAFGn3Jm9D1Jn7 _2iRR5vHbmjmdAAtezh4qJn"><progress value="0" max="9"
                                        class="_2mHZoH4jZP_t5ILvqpGEU5"></progress></div>
                            </div>

                        </div>
                    </section>

                    <div class="TER0hA_SFIiYAPm5R3T6Y">
                        <section class="_2fj0VXuMIrX2UqASwUB4tw">
                            <h1 class="_1aULOnPTiOYltL1IE9V5wY">chidoukhim : la plate-forme de Shidouhk de 18 ans à 99 ans</h1>
                        </section>
                        <section class="_1pbmF03HZUJKF7cxuDrzb3">
                            <div class="_2485Farz8Cru090AKQP6ZZ">
                                <img width="120" height="120" alt="" class="_3dT9iUYz5luCkqpCn41IbD" src="{{ assets_base() }}/assets/images/logo_coupe.png" loading="lazy">
                                <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Découvrez chidoukhim</h2>
                                {{-- <p class="_1hdtn-3N-mTghe-YAnOcgy">Bienvenue sur chidoukhim, la plate-forme de Shidouhk de 18 ans à 99 ans.                          </p> --}}
                            </div>
                            <div class="_2VSVpurA21xbVWH_rhz6Oc">
                                <div class="vI5GTTyv83jMetAp3JG3m">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/zivoug.png" width="334" height="261" loading="lazy">
                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9"><strong>Trouvez votre Zivoug maintenant !</strong>
                                            <br><br>
                                            chidoukhim, c’est la plate-forme juive de recherche de votre zivoug quelque soit votre situation (célibataire, divorcé(e), veuf(e)) de 18 ans à 99 ans. En vous inscrivant sur chidoukhim, nous vous offrons la possibilité de vous aider afin de trouver la personne qui partagera votre vie.
                                            <br>
                                            A la différence d’un site de rencontre, cette plate-forme vous assistera avec l’intermédiaire d’une Shadhanite confirmée, à trouver le/la membre inscrit(e) qui vous conviendra parfaitement en tenant compte de votre profil et de vos souhaits.
                                            <br>
                                            Vous n’avez pas de Shadhanite ce n’est pas grave, nous vous permettons de sélectionner une Shadhanite parmi la liste des Shadhanites inscrites.
                                        </p>
                                        <a href="/register" class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW _2LwJ7rw4NH4dRl9F4k2lTi btn-register">S’inscrire</a>

                                    </div>
                                </div>
                                <div class="vI5GTTyv83jMetAp3JG3m">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/profil_visble_ou_pas.png" width="334" height="261" loading="lazy">

                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9"><strong>Votre profil peut être visible de tous ou pas</strong>
                                            <br><br>

                                            Vous avez trois possibilités d’affichage de votre profil,
                                            <ol>
                                                <li class="list-num">Visibilité de votre profil par tous les membres.</li>
                                                <li class="list-num">Visibilité de votre profil uniquement par votre Shadhanite ou les   Shadhanites des autres membres. </li>
                                                <li class="list-num">Visibilité de votre profil sans l’affichage de vos photos. qui resteront néanmoins visibles par les Shadhanites.</li>
                                            </ol>

                                            Pour cela, il vous suffira de cocher lors de votre inscription la case correspondante.

                                        </p>
                                        <a href="/register" class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW _2LwJ7rw4NH4dRl9F4k2lTi btn-register">S’inscrire</a>

                                    </div>
                                </div>
                                <div class="vI5GTTyv83jMetAp3JG3m">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/demarrez_une_conversation.png" width="334" height="261" loading="lazy">

                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9"><strong>Démarrez une conversation entre membres </strong>
                                            <br><br>

                                            Vous avez la possibilité de sélectionner seul (grâce à l’algorithme de tri de la plate-forme chidoukhim) ou avec l’aide de votre Shadhanite, les détails des profils des membres inscrits, et demandez par un clic à être mis(e) en relation avec le(la) membre choisi(e).
                                            <br>
                                            Profitez de notre messagerie pour partager vos centres d’intérêts.
                                            <br>
                                            La Shadhanite reste en contact avec le membre dont elle s’occupe durant toute la durée de cette mise en relation privée.
                                            <br>
                                            Ces instants partagés ensemble à distance vous permettront de mieux connaître l’autre et de trouver plus facilement et plus rapidement votre zivoug.



                                        </p>
                                    </div>
                                </div>
                                <div class="vI5GTTyv83jMetAp3JG3m">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/pincipe_de_la_platforme.png" width="334" height="261" loading="lazy">

                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9"><strong>Le principe de la plate-forme chidoukhim est simple.</strong>
                                            <br><br>

                                            <ol>
                                                <li class="list-num">Vous vous inscrivez en enregistrant votre nom, prénom, votre adresse mail et un mot de passe.</li>
                                                <li class="list-num">Vous recevrez un mail de pré-inscription de la plate-forme chidoukhim pour vous demander de compléter votre profil, choisir une shadhanite et uploader les documents demandés.</li>
                                                <li class="list-num">La chadhanite vous contacte à travers une messagerie privée pour mieux vous connaître. Elle vous demandera les coordonnées de votre Rav ou de personnes référentes qui vous connaissent.</li>
                                                <li class="list-num">Après acceptation de votre chadhanite, vous ferez parti(e) des membres inscrits et donc vous pourrez vous connecter sans restriction à la plate-forme.</li>
                                                <li class="list-num">Soit votre shadhanite vous proposera un ou des profil(s) pouvant vous correspondre via la messagerie privée, soit via l’algorithme de tri de la plateforme chidoukhim vous aurez la possibilité de visualiser des profils et d’en connaître les détails.</li>


                                                <span id="moreText">
                                                    <li class="list-num">Vous aurez donc la possibilité d’approuver le choix de votre shadhanite ou lors de votre propre sélection d’un profil d’en demander la mise en relation à l’aide d’un clic.</li>
                                                    <li class="list-num">Votre shadhanite et la shadhanite du profil invité sont informées de cette demande de mise en relation. </li>
                                                    <li class="list-num">Les shadhanites peuvent ou ne pas autoriser cette mise en relation compte tenu des souhaits et des demandes préalablement précisés sur leurs fiches lors de leurs inscriptions.</li>
                                                    <li class="list-num">En cas d’acceptation des shadhanites, le membre invité reçoit un mail automatique l’informant de la mise en relation souhaitée du membre en demande.</li>
                                                    <li class="list-num">Dans le corps du mail, vous trouverez un lien qui vous mènera directement à la fiche du profil en demande via votre login et mot de passe.</li>
                                                    <li class="list-num">Après consultation de la fiche du profil en demande, vous pourrez accepter la mise en relation et partager une correspondance écrite, vocale ou par vidéo avec ce dernier. Dès votre acceptation, votre fiche et la fiche du profil en demande ne sera plus visible sur la plate-forme, en tout cas, le temps du Chidouhk.</li>
                                                    <li class="list-num">Vous pourrez naturellement arrêter quand bon vous semble cette correspondance (votre fiche profil sera de nouveau visible) ou indiquer vos fiançailles</li>
                                                </span>

                                                <button class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW _2LwJ7rw4NH4dRl9F4k2lTi"onclick="toggleText()" id="textButton">
                                                    Voir plus ...
                                                </button>
                                            </ol>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="_1EnoReB9wkCKSZWPz7GDAg"><img width="120" height="120" alt=""
                                class="_3dT9iUYz5luCkqpCn41IbD"
                                src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/search-b939da90f90.svg"
                                loading="lazy">
                            <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Profiter de l'expérience d'une Shadhanite ou d’un Shadhane</h2>
                            {{-- <p class="_1hdtn-3N-mTghe-YAnOcgy">Profiter de la vie ensemble</p> --}}
                            <div class="_2KGQeAWeTXIUALKWTOr7-Y">
                                La Chadranite ou le Chadran sont des personnes physiques majeures, de confession juive, mariés(es), veufs(ves) ou divorcés(es).
                                <br />
                                Profession bien connue dans les temps anciens sous le nom de « marieuse ».
                                <br />
                                Cette profession discrète et plus ou moins abandonnée il y a des années, est redevenue actuelle aujourd’hui.
                                <br />
                                Plus que jamais, un grand nombre d’hommes et de femmes souffrent de solitude, ont des difficultés à trouver leur zivoug ou ne se satisfont plus de relations stériles et éphémères.
                                <br />
                                Ils ou elles ne vous garantiront pas le bonheur mais vous permettront avec plus d’efficacité de vous proposer des profils qui pourront vous correspondre grâce à leur perspicacité et à leur savoir-faire.




                            </div>
                            <div class="_2vbOgzxS5buVh5_mvOT-AF">
                                <div class="_23341F31yyuSX_budNF1XP">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/homme.png" width="334" height="261" loading="lazy">

                                </div>
                                <div class="_23341F31yyuSX_budNF1XP">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/femme.png" width="334" height="261" loading="lazy">

                                </div>
                            </div>
                        </section>
                        <section class="_32D2PMoHljAhMZjFMVtCXy">
                            <div class="sUrP2kxYYAVU6SIrmPkv6"><img width="120" height="120" alt=""
                                    class="_3dT9iUYz5luCkqpCn41IbD"
                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/location-e06b78cf4e1.svg"
                                    loading="lazy">
                                <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf _234vwwnf32QU_up3odfgGG">
                                    Rencontrez des
                                    célibataires à&nbsp;proximité</h2>
                                <p class="_1hdtn-3N-mTghe-YAnOcgy _1-oBc-1xZjbBYNhkRt4ON9">Hessed Chidoukhim vous permet de
                                    faire de belles
                                    rencontres entre seniors en France, dans votre région ou département.</p>
                                <p class="_2S_F8-LBsRhReyavsfbVjR">

                                    Ou que vous soyez vous aurez la possibilité de trouver selon l'endroit, le pays désiré et la langue parlée souhaitée la personne correspondante à vos souhaits.
                                     <br><br>

                                     Selon votre profil les shadhanite de la plate-forme Hessed. Chidoukhim parleront dans la langue de votre choix.
                                    </p>
                                <div class="_2psXBwqZfZwoz74ztoLmvQ">
                                    <div class="RmW8P9CPgudoT8CmwWVyU"><img width="250" height="289" alt=""
                                            class="S9hd6vul7P2knx_QMzd8E"
                                            src="{{ assets_base() }}/assets/images/paris.png"
                                            loading="lazy">
                                        <h3 class="_3jJm35JB7Lf8UDroh6NYYp">Paris</h3>
                                        <p class="_1LtUpcbNgK9TJsBLh-KsnB">

                                        </p>
                                    </div>
                                    <div class="RmW8P9CPgudoT8CmwWVyU"><img width="250" height="289" alt=""
                                            class="S9hd6vul7P2knx_QMzd8E"
                                            src="{{ assets_base() }}/assets/images/jerusalem.png"
                                            loading="lazy">
                                        <h3 class="_3jJm35JB7Lf8UDroh6NYYp">Jérusalem</h3>
                                        <p class="_1LtUpcbNgK9TJsBLh-KsnB">

                                        </p>
                                    </div>
                                    <div class="RmW8P9CPgudoT8CmwWVyU"><img width="250" height="289" alt=""
                                            class="S9hd6vul7P2knx_QMzd8E"
                                            src="{{ assets_base() }}/assets/images/new york.jpg"
                                            loading="lazy">
                                        <h3 class="_3jJm35JB7Lf8UDroh6NYYp">New York</h3>
                                        <p class="_1LtUpcbNgK9TJsBLh-KsnB">

                                        </p>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="_25pT1uEVkIS7KMeUraU2tM">
                                <p class="_1hdtn-3N-mTghe-YAnOcgy"><strong>Découvrez les célibataires </strong></p>

                                    <a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Toulouse</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Rennes</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Nantes</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Marseille</a><a
                                    href="https:#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Montpellier</a><a
                                    href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Lille</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Strasbourg</a><a
                                    href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Tours</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Brest</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Grenoble</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Rouen</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Le Mans</a><a
                                    href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Perpignan</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Angers</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Pau</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Nice</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Caen</a><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _1B9zmrDtad8xuWdU_2DSS5 _30HzaTHDCK9OyJA6OEWDmW _3Eh3wStY_9liqToOrjnsT6">Rencontre
                                    Lille</a>
                            </div> --}}
                            {{-- <div class="_29MexoD-wH3a03KXgIqg3Q">
                                <div class="RV58whj8Xut-wrbl2RFNR">
                                    <p class="_1hdtn-3N-mTghe-YAnOcgy"><strong>Élargissez votre recherche en choisissant
                                            une région
                                            :</strong></p><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        en Creuse</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Tarn et Garonne</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Vosges</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Morbihan</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Landes</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Var</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Vendée</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Tarn</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Finistère</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Manche</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Meuse</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Oise</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Vaucluse</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Orne</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Seine et Marne</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Pas de Calais</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Haute Savoie</a><a
                                        href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Ille et Vilaine</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Corse</a><a href="#"
                                        class="_32oKZVI44CZEllRCtAzjf1 _2rMpvUoGL0_lz9opRueSnc _30HzaTHDCK9OyJA6OEWDmW ePmQIOfQB0PEn2EPKcYCA">Rencontre
                                        Dordogne</a>
                                </div><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW _3wCyAls3Q6H84uX3r9F02I">Rencontrez
                                    des célibataires en France et dans votre région</a>
                            </div> --}}
                        </section>


                        <section class="i6jj9iI516EDVkChAEmkB">
                            <div class="pJ0t-RBy4F-XdyEQPvOkV">


                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="wow fadeInUp animated" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            {{-- <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf _i8TYs3wL0jYNGSl8erR-">{{ __("Notre application mobile") }}</h2> --}}
                                            {{-- <p> Download our android and IOS application to have awesome experience. </p> --}}
                                        </div>
                                        <div class="buttons mt-5 mr-3">
                                            <a href="#" class="btn btn-success btn-lg" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInLeft;"><i class="fa fa-android fa-2x"></i> Google Play</a>
                                            <a href="#" class="btn btn-info btn-lg wow fadeInRight animated" data-wow-duration="3s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: fadeInRight;"><i class="fa fa-apple fa-2x"></i> App Store </a>
                                        </div>
                                    </div>

                                </div>


                                <div class="_1BagWGmtL71E-Fhk-WkN-Z">
                                    <img width="120" height="120" alt="" class="_3dT9iUYz5luCkqpCn41IbD" src="{{ assets_base() }}/assets/images/logo_coupe.png" loading="lazy">



                                    <p class="_1hdtn-3N-mTghe-YAnOcgy">
                                        L'application Hessed Chidoukhim est disponible sur IOS et Andoïd ce qui vous permettra une fois installée sur votre smartphone de pouvoir à tout moment et partout consulter celle-ci, lire votre messagerie privée, correspondre par message écrit, vocal ou vidéo avec un membre ou votre shadhanite et plus encore...
                                    </p>
                                </div>
                            </div>

                        </section>


                        <section class="_1vbDqqc2WXNeM4VAH_5nVU"><img width="120" height="120" alt=""
                                class="_3dT9iUYz5luCkqpCn41IbD"
                                src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/thumb-e18c697f510.svg"
                                loading="lazy">
                            <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf _i8TYs3wL0jYNGSl8erR-">Sécurité garantie</h2>
                            <div class="_2hQP7ki43iw8PhWhwszEXr">
                                <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/securite.png" width="334" height="261" loading="lazy">

                                <div class="_10-24ra0d1xiYW_BKoxHt_"><img alt="" class="_2AxCiMiXMcSKSYDowdjx8Z"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/secure-4e795b63dd1.svg"
                                        loading="lazy">

                                    <p class="s2XmobgftLMhWaZNucAxi">L'objectif premier de Hessed Chidoukhim est de permettre à des personnes de 18 à 99 ans de pouvoir trouver leur zivoug cependant la sécurité des données sur la plate-forme ainsi que sur son application comporte un niveau de sécurité informatique optimal. Ainsi nous garantissons la confidentialité des données des membres inscrits, des conversations via la messagerie privée et des échanges avec une Shadhanite ou Shatran.</p>
                                </div>
                            </div>
                            <div class="_1YIK094l4QIVUftEQ4EbEj">
                                <div class="_2hQP7ki43iw8PhWhwszEXr _1arh2BSnE1FBGgexw7Jmiv iF9qjMfvgBmM-mgbiuO_1">
                                    <img sizes="(min-width: 600px) 554px, 100vw" alt="" class="JZgqAUcSrctm5S_btCBbD" src="{{ assets_base() }}/assets/images/profil_verifier.png" width="334" height="261" loading="lazy">

                                    <div class="_10-24ra0d1xiYW_BKoxHt_"><img alt="" class="_2AxCiMiXMcSKSYDowdjx8Z"
                                            src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/verified_profile-88a590173ca.svg"
                                            loading="lazy">
                                        <p class="_3lIRIEjoKFnzdk84VlX4nS">Identité des membres  certifiés</p>
                                        <p class="s2XmobgftLMhWaZNucAxi">
                                            A la différence de nombreux sites de rencontre, la plate-forme Hessed Chidoukhim met un point d'honneur sur le sérieux des membres désirant s'inscrire et l'expérience des shadhanites qui vous seront dédiées.

                                            <br />

                                            L'inscription des membres est confirmée après vérification des informations par les Shadhanites ce qui assure à tous les membres de la plate-forme chidoukhim le sérieux et la qualité des profils.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="_2hQP7ki43iw8PhWhwszEXr"><img
                                    sizes="(min-width: 1024px) 684px, (min-width: 640px) 450px, 100vw" alt=""
                                    class="_3oyIyKnX4hQ6HHO98trOSq"
                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/contact.responsive-2fb7061dbb7.jpg"
                                    srcset="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/contact.responsive-2fb7061dbb7.jpg 356w,https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/contact.responsive-78cf16a649e.jpg 684w"
                                    width="356" height="183" loading="lazy">
                                <div class="_10-24ra0d1xiYW_BKoxHt_"><img alt="" class="_2AxCiMiXMcSKSYDowdjx8Z"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/customer_care-8a07b25802d.svg"
                                        loading="lazy">
                                    <p class="_3lIRIEjoKFnzdk84VlX4nS">Vous n'êtes plus seul</p>
                                    <p class="s2XmobgftLMhWaZNucAxi">

                                        L'équipe de Hesse-chidoukhim reste en permanence à vos cotés pour répondre à toutes vos questions, la confidentialité est assurée car les réponses sont données par téléphone avec un des administrateurs ou par messagerie privée via la plate-forme.

                                    </p>
                                </div>
                            </div><button type="button"
                                class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW">S’incrire</button>
                        </section>
                        {{-- <section class="_3Waevzwqggs7n0kDw7EFsj">
                            <div class="_2pPlq_31z6j8guy9Cq9PIi"><img width="120" height="120" alt=""
                                    class="_3dT9iUYz5luCkqpCn41IbD"
                                    src="{{ assets_base() }}/assets/images/logo_coupe.png"
                                    loading="lazy">
                                <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Témoignages</h2>
                                <p class="_1hdtn-3N-mTghe-YAnOcgy _1lPqc0aELkkBYg6t5JoJhT">Le point commun entre les
                                    belles histoires
                                    que vous nous avez partagées ?</p>
                                <p>Elles ont toutes commencé sur Hessed Chidoukhim. Et elles expriment le bonheur d’avoir
                                    rencontré quelqu’un
                                    qui parle le même langage, pose le même regard sur la vie et partage la même envie
                                    de profiter de la
                                    vie et de vivre des bons moments ensemble.</p>
                                <div class="_1Rz-ExcEiVl2IyerXd5fia"><img alt="hpv.testimonies.couple1.alt" width="120"
                                        height="120" class="_1SfCSRUkR3J1ybgBk7h-k-"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/corinne_francois-738392a27df.jpg"
                                        loading="lazy">
                                    <div class="_306ESroU2JGw3kW3z-meX_">
                                        <p class="_1BZmpIObsoo5dQo06NFp8S">C’est mon fils qui m’a inscrite</p>
                                        <p class="XiBwu6pNSDjMifir0go91"><strong>Pourriez-vous nous raconter ce qui vous
                                                a donné envie
                                                d’essayer Hessed Chidoukhim&nbsp;?</strong><br>Tout simplement c’est mon fils
                                            qui m’a inscrite et
                                            j’ai joué le jeu. Mais le fait que le site Hessed Chidoukhim s’adresse au plus de
                                            50 ans m’a un peu
                                            rassurée sur une relation serieuse..</p>
                                        <p class="_30vANe27IPBfWMIedNOd3r">Corinne et François</p>
                                    </div>
                                </div>
                                <div class="_1Rz-ExcEiVl2IyerXd5fia"><img alt="hpv.testimonies.couple2.alt" width="120"
                                        height="120" class="_1SfCSRUkR3J1ybgBk7h-k-"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/catherine_christian-b645d09c68a.jpg"
                                        loading="lazy">
                                    <div class="_306ESroU2JGw3kW3z-meX_">
                                        <p class="_1BZmpIObsoo5dQo06NFp8S">Nous partageons beaucoup de centres
                                            d’intérêts communs</p>
                                        <p class="XiBwu6pNSDjMifir0go91"><strong>Partagez-vous des centres d’intérêt en
                                                commun&nbsp;?
                                                Qu’aimez-vous faire quand vous vous retrouvez&nbsp;?</strong><br>Oui,
                                            nous partageons beaucoup
                                            de centres d’intérêts communs. Nous tenir par la main et s’embrasser même
                                            dans la rue, on se fiche
                                            du quand dira t-on, nous sommes bien quand on est tous les deux. On aime se
                                            promener, s’arrêter à
                                            une terrasse de café au soleil, prendre un café et se perdre dans le regard
                                            de l’un et de l’autre,
                                            je crois que c’est cela l’Amour lorsqu’il n’y a que les yeux qui parlent.
                                        </p>
                                        <p class="_30vANe27IPBfWMIedNOd3r">Catherine et Christian</p>
                                    </div>
                                </div>
                                <div class="_1Rz-ExcEiVl2IyerXd5fia"><img alt="hpv.testimonies.couple3.alt" width="120"
                                        height="120" class="_1SfCSRUkR3J1ybgBk7h-k-"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/alain_sylvie-b3e32fc089c.jpg"
                                        loading="lazy">
                                    <div class="_306ESroU2JGw3kW3z-meX_">
                                        <p class="_1BZmpIObsoo5dQo06NFp8S">Sur Hessed Chidoukhim, on est séduit par la
                                            simplicité de
                                            fonctionnement et la rapidité à créer son profil.</p>
                                        <p class="XiBwu6pNSDjMifir0go91"><strong>Comment décririez-vous vos premiers pas
                                                sur le site&nbsp;?
                                                Quels sont les éléments qui vous ont donné
                                                confiance&nbsp;?</strong><br>En arrivant sur le site
                                            de Hessed Chidoukhim, on est séduit par la simplicité de fonctionnement et la
                                            rapidité à créer son
                                            profil. Ce site est sécurisant car les photos sont sélectionnées
                                            sérieusement et les profils sont
                                            bloqués si nécessaire. Parfait pour moi !</p>
                                        <p class="_30vANe27IPBfWMIedNOd3r">Alain et Sylvie</p>
                                    </div>
                                </div><a href="#"
                                    class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW">Lisez
                                    leurs
                                    témoignages</a>
                            </div>
                        </section> --}}
                        {{-- <section class="_2Nk49_f5vT4gCB64MrJ36-">
                            <div class="iSCTCQBF9zpCT4mFoiJCr">
                                <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Ils parlent de&nbsp;nous</h2>
                                <p class="_1hdtn-3N-mTghe-YAnOcgy">Dans la presse, à la télé ou sur internet,
                                    Hessed Chidoukhim
                                    est&nbsp;partout&nbsp;!</p>
                            </div>
                            <div class="BzJLPgaCo2j8WZFvhlw6-"><a
                                    href="http://www.lefigaro.fr/societes/2017/05/22/20005-20170522ARTFIG00264-meetic-part-a-la-conquete-des-quinquagenaires.php"
                                    target="_blank" rel="noopener"><img width="162" height="35" alt="Le Figaro"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/figaro.responsive-3a6e0d9289e.png"
                                        loading="lazy"></a><a
                                    href="http://www.leparisien.fr/vie-quotidienne/famille/seniors-le-grand-amour-a-tout-age-14-06-2017-7049103.php"
                                    target="_blank" rel="noopener"><img width="116" height="37" alt="Le Parisien"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/parisien.responsive-3bfd4c20863.png"
                                        loading="lazy"></a><a
                                    href="https://www.femmeactuelle.fr/amour/couple/disonsdemain-on-a-teste-le-nouveau-site-de-rencontres-des-40278"
                                    target="_blank" rel="noopener"><img width="187" height="27" alt="Femme Actuelle"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/femme-actuelle.responsive-5940f8f5cee.png"
                                        loading="lazy"></a><a
                                    href="https://www.ouest-france.fr/societe/quand-l-amour-re-commence-plus-de-50-ans-6258665"
                                    target="_blank" rel="noopener"><img width="131" height="50" alt="Ouest France"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/ouest-france.responsive-5591d67bf72.png"
                                        loading="lazy"></a><a
                                    href="https://www.maxi-mag.fr/societe/actualite/les-sites-de-rencontres-dedies-aux-plus-de-50-ans-se-multiplient.html"
                                    target="_blank" rel="noopener"><img width="85" height="50" alt="Maxi Mag"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/maxi-mag.responsive-25ffba6e909.png"
                                        loading="lazy"></a><a
                                    href="https://www.lemonde.fr/pixels/article/2019/04/26/quatre-applis-pas-comme-les-autres-pour-rencontrer-l-amour_5455031_4408996.html"
                                    target="_blank" rel="noopener"><img width="175" height="50" alt="Le Monde"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/le-monde.responsive-171001693e8.png"
                                        loading="lazy"></a><a
                                    href="https://www.lejdd.fr/Societe/les-quincados-ou-quand-la-vie-recommence-a-cinquante-ans-3895793"
                                    target="_blank" rel="noopener"><img width="189" height="50"
                                        alt="Le Journal du Dimanche" class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/jdd.responsive-d6e123ba49b.png"
                                        loading="lazy"></a><a
                                    href="https://www.notretemps.com/sante/actualites-sante/site-rencontre-senior-amour-en-ligne-plus-age,i197809"
                                    target="_blank" rel="noopener"><img width="65" height="50" alt="Notre Temps"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/notre-temps.responsive-94abc483656.png"
                                        loading="lazy"></a><a
                                    href="https://www.pleinevie.fr/loisirs/internet/meetic-lance-disonsdemain-un-site-de-rencontre-pour-les-plus-de-50-ans-19091"
                                    target="_blank" rel="noopener"><img width="145" height="50" alt="Pleine Vie"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/pleine-vie.responsive-f7f14bcc747.png"
                                        loading="lazy"></a><a
                                    href="https://www.francebleu.fr/emissions/se-dit-tout/se-dit-tout-vanessa-lambert-vos-temoignages-0810-055-056-37"
                                    target="_blank" rel="noopener"><img width="47" height="50" alt="France Bleu"
                                        class="_1XTukOVdNasUF-Uj0dax4x"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/france-bleu.responsive-f59f6d1e07d.png"
                                        loading="lazy"></a></div>
                        </section> --}}
                        <section class="_2MJ42mbm5RjDgjOJQEPPfM">
                            <div class="_2MZr1pSX__pKVfKHZZFIMJ">
                                <div class="_13kO2iRtDmCwcPFDDSpMHb"><img sizes="(min-width: 641px) 554px, 100vw" alt=""
                                        class="BJ2j_mrdlMieuAGuSjJOp"
                                        src="{{ assets_base() }}/assets/images/envie_de_partager_une_nvrelation.png"
                                        width="343" height="343" loading="lazy"></div>
                                <div class="H-xr6lhIUzw4jgV5L3GHP"><img width="120" height="120" alt=""
                                        class="_3dT9iUYz5luCkqpCn41IbD"
                                        src="{{ assets_base() }}/assets/images/logo_coupe.png"
                                        loading="lazy">
                                    <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Notre mission votre bonheur</h2>
                                    <p>Que vous soyez célibataire depuis peu ou plus longtemps, vous inscrire sur un site de rencontre en ligne peut être au début une expérience intimidante. Vous pouvez compter sur nous pour faciliter vos premiers pas, vous accompagner à chaque étape et vous donner des conseils qui vous mettront en confiance pour les rencontres à venir.</p>
                                </div>
                            </div>

                            <a href="/register" class="_32oKZVI44CZEllRCtAzjf1 _2Sp2Iw7DTm8y1IoAYLTfBX _30HzaTHDCK9OyJA6OEWDmW _2LwJ7rw4NH4dRl9F4k2lTi btn-register">S’inscrire</a>

                        </section>
{{--
                        <section class="_38_URSUFsiBxwFYVlnZMdE">
                            <div class="_3g3IK71LyaCYl83hNdJ2cL"><img width="120" height="120" alt=""
                                    class="_3dT9iUYz5luCkqpCn41IbD"
                                    src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/profile-ea454660adc.svg"
                                    loading="lazy">
                                <h2 class="_2-6Sls2wyU94687sN42qgA S3g75gP8MxIw-veZ2PMxf">Rencontrer quelqu’un après
                                    50&nbsp;ans&nbsp;:<br>un bonheur partagé</h2>
                            </div>
                            <div class="ajzwypSlUvEuCnCx7GG8b">
                                <div class="vI5GTTyv83jMetAp3JG3m"><img sizes="(min-width: 600px) 554px, 100vw" alt=""
                                        class="JZgqAUcSrctm5S_btCBbD"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-1.responsive-f7862fb7e9f.jpg"
                                        srcset="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-1.responsive-f7862fb7e9f.jpg 343w,https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-1.responsive-010797d8c18.jpg 554w"
                                        width="343" height="218" loading="lazy">
                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9">Que vous soyez célibataire par choix ou parce
                                            que vous avez vécu
                                            une séparation, un divorce ou un deuil récent ou non, une chose est
                                            sûre&nbsp;: à 50&nbsp;ans et
                                            plus, vous avez déjà vécu une ou plusieurs vies avant. Vous avez forcément
                                            traversé et partagé des
                                            moments de vie heureux et d’autres plus difficiles ou douloureux. Par
                                            expérience, vous savez que
                                            la vie n’est pas un long fleuve tranquille et que si les contes de fée se
                                            terminent bien, ils ne
                                            sont pas si féériques pour autant. Vous savez d’autant mieux que la vie est
                                            surprenante et qu’elle
                                            peut à tout moment redevenir excitante, enrichissante, tendre, à condition
                                            d’être bien avec
                                            soi-même avant même d’être bien accompagnée.</p>
                                    </div>
                                </div>
                                <div class="vI5GTTyv83jMetAp3JG3m"><img sizes="(min-width: 600px) 554px, 100vw" alt=""
                                        class="JZgqAUcSrctm5S_btCBbD"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-2.responsive-455a1b35b7d.jpg"
                                        srcset="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-2.responsive-455a1b35b7d.jpg 343w,https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-2.responsive-7b472f48e6c.jpg 554w"
                                        width="343" height="218" loading="lazy">
                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9">Avec l’expérience - encore elle&nbsp;! - vous
                                            savez aussi
                                            reconnaître vos qualités, vos attentes et vos limites. Bien sûr, l’attirance
                                            physique et le désir
                                            sexuel sont des éléments importants dans une relation, mais la complicité,
                                            l’attention porté à
                                            l’autre, le partage sont autant de choses qui rendent un couple encore plus
                                            uni(que) et amoureux.
                                            Rire à deux par exemple est un excellent baromètre pour mesurer
                                            l’attachement profond et mutuel
                                            dans un couple.</p>
                                    </div>
                                </div>
                                <div class="vI5GTTyv83jMetAp3JG3m"><img sizes="(min-width: 600px) 554px, 100vw" alt=""
                                        class="JZgqAUcSrctm5S_btCBbD"
                                        src="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-3.responsive-77eaff31e86.jpg"
                                        srcset="https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-3.responsive-77eaff31e86.jpg 343w,https://iliusstu-a.akamaihd.net/www.disonsdemain.fr/hpv/couple-3.responsive-2655dcfba39.jpg 554w"
                                        width="343" height="218" loading="lazy">
                                    <div class="FBi6NrfVQihc6ZtLOHT-7">
                                        <p class="_3eJgZ8oWTmgaIO4L6FBon9">Le plus important, c’est ce que l’on partage
                                            ensemble. Sur
                                            Hessed Chidoukhim, les critères que vous pouvez sélectionner vous permettent de
                                            rechercher des
                                            célibataires qui partagent vos centres d’intérêt, votre état d’esprit. En
                                            discutant ensuite avec
                                            les personnes pour qui vous avez le coup de cœur, vous pouvez savoir si vous
                                            êtes sur la même
                                            longueur d’onde, si vous partagez la même vision du couple, de la vie, des
                                            amis etc. Prenez le
                                            temps de vous découvrir et de partager des activités qui vous plaisent
                                            ensemble&nbsp;: course à
                                            pied, ciné, exposition, dégustation de vin… Laissez-vous le temps de
                                            ressentir, laissez libre
                                            cours à vos émotions, faites confiance à votre instinct… Lorsque deux
                                            personnes sont bien
                                            ensemble, les rendez-vous et les moments de partage s’organisent
                                            naturellement. À tout moment,
                                            vous pouvez nous solliciter pour demander des conseils ou des informations.
                                            En attendant que vous
                                            rencontreriez quelqu’un qui vous plaise, nous sommes là pour vous.</p>
                                    </div>
                                </div>
                            </div>

                        </section>
                         --}}
                        <section class="_1L9E5ELaUO59bOOWOZ_0PQ">


                            <div class="_2_ptFwesUuR1fmO7l3Oxfp"> <img class="img-center"
                                    src="{{ assets_base() }}/assets/images/logo.png" alt="" style="width: 15rem;">
                            </div>
                            <div class="_2_ptFwesUuR1fmO7l3Oxfp"
                                style="background-color: rgb(237, 75, 120); color: #fff;"> © 2021 - Hessed Chidouhkim
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>

        <a href="javascript:void(0)" class="js-lcc-settings-toggle">@lang('cookie-consent::texts.alert_settings')</a>

    </div>
    <div id="popup" tabindex="-1"></div>
    <div id="modal" tabindex="-1"></div>
    {{--
    <script src="{{ assets_base() }}/assets/js/accueil.js"></script> --}}

    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('#locale').change(function() {
            $('#locale-form').submit();
        });



        function formatState (state) {
            if (!state.id) {
                return state.text;
            }

            var $state = $(
                '<span class="locale-selector flag-icon flag-icon-'+ state.element.getAttribute("data-country").toLowerCase() +'"></span>'
                //'<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
            );
            return $state;
        };

        $(".js-example-templating").select2({
            templateResult: formatState,
            templateSelection: formatState,
            minimumResultsForSearch: -1,
            width: 'resolve',
            theme: "themes-dark"
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#login-form').hide();
            $('.register-btn').hide();
            $('#moreText').hide();


        });
        $('.btn-register').click(function () {
            $('#login-form').hide();
            $('#register-form').show();
        });
        $('#login-btn').click(function () {
            $('#login-form').show();
            $('#register-form').hide();
            $('.register-btn').show();
            $('#login-btn').hide();
        });
        $('.register-btn').click(function () {
            $('.register-btn').hide();
            $('#login-btn').show();
        });




        function toggleText() {

            if( $('#moreText').is(":hidden") ){
                $('#moreText').show();
                $('#textButton').text('Voir moins ...')
            }else{
                $('#moreText').hide();
                $('#textButton').text('Voir plus ...')
            }

        }
    </script>


</body>

</html>
