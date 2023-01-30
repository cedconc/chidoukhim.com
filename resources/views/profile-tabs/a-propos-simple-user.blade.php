<!-- begin  tab -->
<div class="tab-pane fade active show" id="profile-about_{{ $fake_id }}">

    <div class="row mt-5 sm-mt-3">
        <div class="col-md-12 text-center">
            <h5>{{ __("Shadhanite/Shadhan") }} : <a href="/user/{{ $user->get_chatrane()->slug }}" target="_blank"> {{ $user->get_chatrane()->prenom }} {{ $user->get_chatrane()->name }} </a>  </h5>
        </div>
        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Identité') }}</h4>
            <table class="table table-borderless table-striped">
                <tr>
                    <td width="50%"> <strong>{{ __('Genre') }} : </strong> {{ $user->genre }}</td>

                    <td width="50%"> <strong>{{ __('Langues parlées') }} :</strong>

                        @php
                            $isr = false;
                        @endphp
                        @foreach ($user->langues_ids() as $item)

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


                </tr>


                <tr>
                    <td> <strong>{{ __('Date de naissance') }} :</strong>  {{ $user->date_naissance_formatted() }}</td>
                    <td> <strong>{{ __('Statut marital') }} :</strong>  {{ $user->statut_marital }}</td>
                </tr>

                <tr>
                    <td> <strong>{{ __('Profession') }} : </strong> {{ $user->profession }}</td>
                    <td> <strong>{{ __("Niveau d'étude") }} :</strong>  {{ $user->etude}}</td>
                </tr>

                <tr>
                    <td> <strong>{{ __("Nombre d'enfants") }} :</strong>  {{ $user->nb_enfants}}</td>
                    <td> <strong>{{ __("Nombre d'enfants vivants a la maison") }} :</strong>  {{ $user->nb_enfants_maison}}</td>
                </tr>


                <tr>
                    <td> <strong>{{ __('Garde alternée') }} : </strong> {{ $user->garde_alternee }}</td>
                    <td></td>
                </tr>


                @if ($user->id == Auth::user()->id)
                    <tr>

                        <td> <strong>{{ __('Email') }} : </strong> {{ $user->email }}</td>
                        <td> </td>
                    </tr>
                @endif





            </table>
        </div>


        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Religion') }}</h4>
            <table class="table table-borderless table-striped">
                <tr>
                    <td width="50%"> <strong>{{ __('Cohen') }} : </strong> {{ $user->cohen }}</td>
                    <td width="50%"> <strong>{{ __("Courant d'appartenance religieuse") }} :</strong>  {{ $user->appartenance_religieuse}}</td>

                </tr>

                <tr>
                    <td colspan="2"> <strong>{{ __('Pratique religieuse actuelle') }} :</strong>  {{ $user->pratique_religieuse }}</td>
                    {{-- <td> <strong>{{ __('Niveau religieux') }} : </strong> {{ $user->niveau_religieux }}</td> --}}

                </tr>


                <tr>
                    <td> <strong>{{ __('Origine') }} : </strong> {{ $user->ethnicite }}</td>
                    <td> <strong>{{ __("Références") }} :</strong>  {{ $user->references}}</td>
                </tr>

                <tr>
                    <td> <strong>{{ __('Ancienneté de la pratique religieuse') }} :</strong>  {{ $user->background_religieux }}</td>
                    <td> <strong>{{ __('Nom du rabbin') }} :</strong> {{ $user->nom_rabbin }}</td>
                </tr>



            </table>
        </div>

        <div class="col-md-12 text-left mb-5">
            <h4 class="title divider-3 mb-3">{{ __('Préférences & description') }}</h4>
            <table class="table table-borderless table-striped">
                <tr>
                    <td width="50%"> <strong>{{ __('Taille') }} : </strong> {{ $user->taille }}</td>
                    <td width="50%"> <strong>{{ __('Poids') }} :</strong>  {{ $user->poids}}</td>

                </tr>

                <tr>
                    <td> <strong>{{ __('Silhouette ') }} :</strong>  {{ $user->silhouette }}</td>
                    <td> <strong>{{ __("Intervalle d'age désirée ") }} : </strong> {{ $user->get_age_min() }} - {{ $user->get_age_max() }} </td>

                </tr>

                <tr>
                    <td> <strong>{{ __('A propos') }} :</strong>  {{ $user->a_propos}}</td>
                    <td> <strong>{{ __('Handicap') }} :</strong>
                        @if (is_null($user->handicap))
                            {{ __("Aucun") }}
                        @else
                            {{ $user->handicap }}
                        @endif

                    </td>
                </tr>

                <tr>
                    <td> <strong>{{ __('Attentes') }} : </strong> {{ $user->attentes }}</td>
                    <td> <strong>{{ __("Veut suivre votre conjoint après le mariage dans une autre ville ou pays") }} :</strong>  {{ $user->suivre_conjoint}}</td>
                </tr>



            </table>
        </div>




    </div>

</div>
<!-- end tab -->
