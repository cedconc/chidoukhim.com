<!-- begin  tab -->
<div class="tab-pane fade active show" id="profile-about_{{ $fake_id }}">

    <div class="row mt-5 sm-mt-3">
        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Identité') }}</h4>
            <table class="table table-borderless table-striped">



                <tr>
                    <td colspan="2">
                        <strong>{{ __('Code Shadhanite/Shadhan') }} : </strong>
                        <input id="code_chatrane" value="{{ strtoupper($user->slug) }}" class="form-control mb-3" disabled />


{{--
                        <strong>{{ __('URL Shadhanite/Shadhan') }} : </strong>
                        <input id="url_chatrane" value="https://chidoukhim.com/user/{{ $user->slug }}" class="form-control mb-3" readonly />
                        <span id="copie-code-chatrane" class="btn btn-primary">{{ __('Copier URL') }}</span> <span id="copie-alert" class="alert alert-success">{{ __('Copié') }} !</span>
 --}}
{{--
                        <br />
                        <br /> --}}
                        <strong>{{ __("URL d'inscription pour les nouveaux membres") }} : </strong>
                        <input id="url_chatrane_register" value="https://chidoukhim.com/register?code_chatrane={{ $user->slug }}" class="form-control mb-3" readonly />
                        <span id="copie-code-chatrane-register" class="btn btn-primary">{{ __('Copier URL') }}</span> <span id="copie-alert-register" class="alert alert-success">{{ __('Copié') }} !</span>


                    </td>


                </tr>

                <tr>
                    <td width="50%"> <strong>{{ __('Genre') }} : </strong> {{ $user->genre }}</td>
                    <td width="50%"> <strong>{{ __('Date de naissance') }} :</strong>  {{ $user->date_naissance_formatted()}}</td>

                </tr>

                <tr>
                    <td>

                        <strong>{{ __('Langues parlées') }} :</strong>


                        @php
                            $isr = false;
                        @endphp
                        @foreach ($langues_ids as $item)

                            @if ($item == 'Israel')
                                @if(!$isr)
                                    <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                                @endif
                            @else
                                <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                            @endif

                            @php
                            if( $item == 'Israel' ){
                                $isr = true;
                            }
                            @endphp
                        @endforeach


                    </td>
                    <td> <strong>{{ __('Statut marital') }} :</strong>  {{ $user->statut_marital }}</td>
                </tr>

                <tr>
                    <td> <strong>{{ __('Email') }} : </strong> {{ $user->email }}</td>
                    <td> </td>
                </tr>




            </table>
        </div>


        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Description') }}</h4>
            <table class="table table-borderless table-striped">
                <tr>
                    <td width="50%"> <strong>{{ __('Nombre max de profils pris en charge') }} : </strong> {{ $user->nb_max_profils }}</td>
                    <td width="50%"> <strong>{{ __('Services') }} :</strong>  {{ $user->services}}</td>

                </tr>

                <tr>
                    <td> <strong>{{ __('Méthodes de contact') }} :</strong>  {{ $user->contacts }}</td>
                    <td> <strong>{{ __("Comment les célibataires l'approchent") }} : </strong>{{ $user->contact_celibataires }} </td>

                </tr>

                <tr>
                    <td> <strong>{{ __('A propos') }} :</strong>  {{ $user->a_propos}}</td>
                    <td> <strong>{{ __('Disponible') }} :</strong>  {{ $user->disponibilite }}</td>
                </tr>



            </table>
        </div>



        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Profils pris en charge') }}</h4>
            <table class="table table-borderless table-striped">
                <tr>
                    <td width="50%"> <strong>{{ __("Tranche d'âge") }} : </strong> {{ $user->age_min_supporte() }} - {{ $user->age_max_supporte() }}</td>
                    <td width="50%"> <strong>{{ __('Niveau religieux') }} :</strong>  {{ $user->orientations_religieuses_profils}}</td>

                </tr>

                <tr>
                    <td> <strong>{{ __('Localisations') }} :</strong>  {{ $user->pays_profils }}</td>
                    <td> <strong>{{ __("Langues") }} : </strong>{{ $user->langues_profils }} </td>

                </tr>

                <tr>
                    <td> <strong>{{ __('Accepte les personnes avec un handicap') }} :</strong>  {{ $user->handicap_chatrane}}</td>
                    <td> <strong>{{ __('Situation matirmoniale des peronnes acceptées') }} :</strong>  {{ $user->type_celibataire }}</td>
                </tr>



                <tr>
                    <td>
                        <strong>{{ __('Tarifs') }} :</strong>
                        @if ($user->tarif_0 == 0)
                            {{ __('Bénévole') }}
                            @if ($user->benevole_plan == 1)
                            <br />
                                {{ __("Souhaite reverser sa rémunération au site  pour financer sa maintenance ou pour aider les gens qui peuvent pas se marier") }}
                            @endif
                        @else
                            <strong>{{ __('Tarif pour la prise en charge') }} :</strong> {{ $User->tarif_prise_en_charge }}
                            <br />
                            <strong>{{ __('Tarif en cas de chidour réussi') }} :</strong> {{ $User->tarif_chidour }}
                        @endif
                    </td>
                </tr>





            </table>
        </div>




        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Religion') }}</h4>
            <table class="table table-borderless table-striped">


                <tr>
                    <td> <strong>{{ __('Orientation religieuse') }} :</strong>  {{ $user->types}}</td>

                </tr>


            </table>
        </div>





    </div>

</div>
<!-- end tab -->
