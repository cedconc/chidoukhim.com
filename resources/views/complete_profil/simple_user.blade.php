<div class="step-form">
    <div class="stepwizard">
      <div class="stepwizard-row setup-panel">

        <div class="stepwizard-step"> <a href="#step-1" class="btn btn-circle active completed">1 <span><i class="fa fa-check" aria-hidden="true"></i></span></a>
          <p>
              {{ __('Identité') }}
        </p>
        </div>

        <div class="stepwizard-step"> <a href="#step-2" class="btn btn-circle" disabled="disabled">2 <span><i class="fa fa-check" aria-hidden="true"></i></span></a>
          <p>{{ __('Réligion') }}</p>
        </div>

        <div class="stepwizard-step" id="step-3-wizard"> <a href="#step-3" class="btn btn-circle" disabled="disabled">3 <span><i class="fa fa-check" aria-hidden="true"></i></span></a>
            <p>{{ __('Personnalité & Caractère') }}</p>
        </div>


        <div class="stepwizard-step" id="step-4-wizard"> <a href="#step-4" class="btn btn-circle" disabled="disabled">4<span><i class="fa fa-check" aria-hidden="true"></i></span></a>
          <p>{{ __('Photos') }}</p>
        </div>


      </div>
    </div>




    <form  id="form" action="{{ route('update_profil') }}" method="post"  enctype="multipart/form-data"class="text-center mt-3">
        @csrf

    <input type="hidden" value="{{ $user->id }}" name="user_id">
      <div class="row  justify-content-center setup-content" id="step-1" style="display: flex;">
        <div class="col-md-12">

            <div class="row  justify-content-center">
              <div class="col-md-8 text-left  text-white">
                <div class="form-group mb-0">


                  <label class="title xxx required">{{ __('Email') }} *</label>
                  <div class="form-group sm-mt-2">
                      <input type="text" class="form-control" disabled  value="{{ $user->email }}">
                  </div>



                    <label class="title xxx  required">{{ __('Votre adresse') }} *</label>
                    <div class="form-group sm-mt-2">
                      <input type="text" value="{{ $user->adresse }}" class="form-control" name="adresse" id="search-address" autocomplete="off" required>
                      <input type="hidden" value="{{ $user->pays }}" name="pays" class="form-control" id="pays">
                      <input type="hidden" value="{{ $user->ville }}" name="ville" class="form-control" id="ville">
                    </div>


                    <div class="form-group sm-mt-2">
                        <label class="title xxx">{{ __('Avez vous un handicap') }}</label>

                        <div class="row sm-mt-2">
                            <div class="col-md-4">
                              <div class="radio form-group pb-2">
                                <input name="handicap_choix" value="1" id="handicap_oui" type="radio" @if($user->handicap_choix == 1) checked="checked" @endif required>
                                <label for="handicap_oui">{{ __('Oui') }}</label>
                              </div>
                            </div>
                            <div class="col-md-4 sm-mt-2">
                              <div class="radio form-group pb-2">
                                <input name="handicap_choix" value="0" id="handicap_non" type="radio" @if($user->handicap_choix == 0) checked="checked" @endif >
                                <label for="handicap_non">{{ __('Non') }}</label>
                              </div>
                            </div>
                        </div>
                        <textarea value="{{ $user->handicap }}" id="handicap" name="handicap" class="form-control" rows="3" placeholder="{{ __('Décrivez votre handicap') }}"></textarea>
                    </div>




                    <label class="title xxx required">{{ __('Avez-vous un(e) Shadhanite/Shadhan') }} *</label>
                    <div class="row sm-mt-2">
                        <div class="col-md-4">
                          <div class="radio">
                            <input name="a_chatrane" value="Oui" id="a_chatrane_1" required type="radio" @if( !is_null( $user->code_chatrane )) checked="checked" @endif  required>
                            <label for="a_chatrane_1">{{ __('Oui') }}</label>
                          </div>
                        </div>
                        <div class="col-md-4 sm-mt-2">
                          <div class="radio">
                            <input name="a_chatrane" value="Non" id="a_chatrane_2" required type="radio" >
                            <label for="a_chatrane_2">{{ __('Non') }}</label>
                          </div>
                        </div>
                    </div>


                    <div id="a_chatrane_div">
                        <label class="title xxx required">{{ __('Sélectionner votre Shadhanite/Shadhan') }} *</label>
                        <div class="form-group sm-mt-2">
                            <select name="code_chatrane" id="code_chatrane" class="form-control">
                            </select>
                            <p id="no-chatrane" class="text-danger">{{ __('Aucun Shadhanite/Shadhan ne correspond à votre adresse') }}</p>
                        </div>
                    </div>


                    <div id="a_chatrane_div_2">
                        <label class="title xxx required">{{ __('Veuillez entrez le code de votre Shadhanite/Shadhan') }} </label>
                        <div class="form-group sm-mt-2">
                            <input name="code_chatrane" type="text" value="{{ $user->code_chatrane }}" class="form-control" required>
                        </div>
                    </div>


                <label class="title xxx required">{{ __('Votre nom') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" id="name" required>
                </div>

                <label class="title xxx required">{{ __('Votre prénom') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->prenom }}" class="form-control" name="prenom" id="prenom" required>
                </div>


                <label class="title xxx">{{ __('Mensurations') }}</label>
                <div class="row sm-mt-2">
                  <div class="col-md-6 mb-3">
                      <input class="form-control" value="{{ $user->taille }}" name="taille" id="taille" placeholder="{{ __('Taille (cm)') }}"  type="number" step="0.1" min="1">
                  </div>

                  <div class="col-md-6">
                        <input class="form-control" value="{{ $user->poids }}" name="poids" id="poids" placeholder="{{ __('Poids (kg)') }}"  type="number" step="1" min="1">
                  </div>
                </div>


                <label class="title xxx">{{ __('Silhouette') }}</label>
                <div class="form-group sm-mt-2">
                  <select class="form-control" id="silhouette" name="silhouette">

                      <option selected disabled>--- {{ __('Choisir') }} ---</option>
                      <option @if($user->silhouette == 'Elancée') selected @endif  value="Elancée">{{ _('Elancée') }}</option>
                      <option @if($user->silhouette == 'Fine') selected @endif  value="Fine">{{ __('Fine') }}</option>
                      <option @if($user->silhouette == 'Normale') selected @endif  value="Normale">{{ _('Normale') }}</option>
                      <option @if($user->silhouette == 'Proportionnée') selected @endif  value="Proportionnée">{{ _('Proportionnée') }}</option>
                      <option @if($user->silhouette == 'Sportive') selected @endif  value="Sportive">{{ _('Sportive') }}</option>
                      <option @if($user->silhouette == 'Costaud') selected @endif  value="Costaud">{{ _('Costaud') }}</option>
                      <option @if($user->silhouette == 'En surpoids') selected @endif  value="En surpoids">{{ _('En surpoids') }}</option>

                  </select>
                </div>




                  <label class="title xxx required">{{ __('Genre') }} *</label>
                  <div class="form-group row sm-mt-2">
                    <div class="col-md-4">
                      <div class="radio">
                        <input name="genre" value="Femme" id="genre_1" required type="radio" required @if($user->genre == 'Femme') checked="checked" @endif>
                        <label for="genre_1">{{ __('Femme') }}</label>
                      </div>
                    </div>
                    <div class="col-md-4 sm-mt-2">
                      <div class="radio">
                        <input name="genre" value="Homme" id="genre_2" required type="radio" @if($user->genre == 'Homme') checked="checked" @endif>
                        <label for="genre_2">{{ __('Homme') }}</label>
                      </div>
                    </div>
                  </div>



                  <label class="title xxx required">{{ __('Numéro de téléphone') }} *</label>
                  <div class="form-group sm-mt-2">
                      <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $user->telephone }}" required>
                  </div>



                  <label class="title xxx required">{{ __('Statut marital') }} *</label>
                  <div class="row sm-mt-2">
                    <div class="col-md-3">
                      <div class="radio">
                        <input  name="statut_marital" value="Célibataire" id="statut_marital_1" @if($user->statut_marital == 'Célibataire') checked="checked" @endif required type="radio">
                        <label for="statut_marital_1">{{ __('Célibataire') }}</label>
                      </div>
                    </div>
                    <div class="col-md-3 sm-mt-2">
                      <div class="radio">
                        <input name="statut_marital" value="Divorcé" id="statut_marital_2" required type="radio" @if($user->statut_marital == 'Divorcé') checked="checked" @endif >
                        <label for="statut_marital_2">{{ __('Divorcé') }}</label>
                      </div>
                    </div>

                    <div class="col-md-3 sm-mt-2">
                        <div class="radio">
                          <input name="statut_marital" value="Veuf" id="statut_marital_3" required type="radio" @if($user->statut_marital == 'Veuf') checked="checked" @endif >
                          <label for="statut_marital_3">{{ __('Veuf') }}</label>
                        </div>
                      </div>
                  </div>



                  <div class="profile-info mb-3">
                    <p class="mb-0 text-dark"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ __('Cela vous permettra de faire des recherches autour de vous') }} </p>
                  </div>

                  <label class="title xxx required">{{ _('Date de naissance') }} *</label>

                  <div class="form-group sm-mt-2">
                    <input type="date" class="form-control" name="date_de_naissance" id="date_de_naissance" value="{{ $user->date_de_naissance }}" required>
                  </div>



                  <label class="title xxx">{{ _("Combien d'enfants avez-vous?") }}</label>

                  <div class="form-group sm-mt-2">
                    <input type="number" class="form-control" name="nb_enfants" value="{{ $user->nb_enfants }}" id="nb_enfants">
                  </div>


                  <label class="title xxx">{{ _("Combien d'enfants vivent à la maison?") }}</label>

                  <div class="form-group sm-mt-2">
                    <input type="number" class="form-control" name="nb_enfants_maison" value="{{ $user->nb_enfants_maison }}" id="nb_enfants_maison">
                  </div>

                  <label class="title xxx">{{ _("Avez-vous pour ces enfants la garde alternée?") }}</label>

                  <div class="row sm-mt-2">
                    <div class="col-md-3">
                      <div class="radio">
                        <input  name="garde_alternee" value="Non" id="garde_alternee_1" @if($user->garde_alternee == 'Non') checked="checked" @endif type="radio">
                        <label for="garde_alternee_1">{{ __('Non') }}</label>
                      </div>
                    </div>
                    <div class="col-md-3 sm-mt-2">
                      <div class="radio">
                        <input name="garde_alternee" value="Oui" id="garde_alternee_2" type="radio" @if($user->garde_alternee == 'Oui') checked="checked" @endif >
                        <label for="garde_alternee_2">{{ __('Oui') }}</label>
                      </div>
                    </div>

                  </div>


                  <label class="title xxx">{{ _('Profession') }}</label>

                  <div class="form-group sm-mt-2">
                    <input type="text" class="form-control" name="profession" value="{{ $user->profession }}" id="profession">
                  </div>




                  <label class="title xxx">{{ _("Niveau d'étude") }}</label>

                  <div class="form-group sm-mt-2">
                      <select name="etude" id="etude" class="form-control">
                            <option selected disabled>--- {{ __('Choisir')  }} ---</option>
                            <option  @if($user->etude == 'Niveau collège') selected @endif  value="Niveau collège">{{ __('Niveau collège') }}</option>
                            <option  @if($user->etude == 'Niveau BAC') selected @endif  value="Niveau BAC">{{ __('Niveau BAC') }}</option>
                            <option  @if($user->etude == 'Niveau collège') selected @endif  value="Niveau universitaire">{{ __('Niveau universitaire') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+1') selected @endif  value="Niveau BAC+1">{{ __('Niveau BAC+1') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+2') selected @endif  value="Niveau BAC+2">{{ __('Niveau BAC+2') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+3') selected @endif  value="Niveau BAC+3">{{ __('Niveau BAC+3') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+4') selected @endif  value="Niveau BAC+4">{{ __('Niveau BAC+4') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+5') selected @endif  value="Niveau BAC+5">{{ __('Niveau BAC+5') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+6') selected @endif  value="Niveau BAC+6">{{ __('Niveau BAC+6') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+7') selected @endif  value="Niveau BAC+7">{{ __('Niveau BAC+7') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+8') selected @endif  value="Niveau BAC+8">{{ __('Niveau BAC+8') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+9') selected @endif  value="Niveau BAC+9">{{ __('Niveau BAC+9') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+10') selected @endif  value="Niveau BAC+10">{{ __('Niveau BAC+10') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+11') selected @endif  value="Niveau BAC+11">{{ __('Niveau BAC+11') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+12') selected @endif  value="Niveau BAC+12">{{ __('Niveau BAC+12') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+13') selected @endif  value="Niveau BAC+13">{{ __('Niveau BAC+13') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+14') selected @endif  value="Niveau BAC+14">{{ __('Niveau BAC+14') }}</option>
                            <option  @if($user->etude == 'Niveau BAC+15') selected @endif  value="Niveau BAC+15">{{ __('Niveau BAC+15') }}</option>


                      </select>
                  </div>

                  <label class="title xxx required">{{ _('Langues parlées') }} *</label>

                  <div class="form-group sm-mt-2">


                    <select class="form-control" id="langues" name="langues[]" multiple="multiple" required>
                            <option value="Hébreu" @if( strpos($user->langues, 'ébreu' ) || strpos($user->langues, '\u00e9breu')  ) selected @endif>{{ _('Hébreu') }}</option>
                            <option value="Anglais" @if( strpos($user->langues, 'nglais' ) ) selected @endif>{{ __('Anglais') }}</option>
                            <option value="Français" @if( strpos($user->langues, 'rançais' ) || strpos($user->langues, 'ran\u00e7ais') ) selected @endif>{{ _('Français') }}</option>
                            <option value="Espagnol" @if( strpos($user->langues, 'spagnol' ) ) selected @endif>{{ _('Espagnol') }}</option>
                            <option value="Italien" @if( strpos($user->langues, 'talien' ) ) selected @endif>{{ _('Italien') }}</option>
                            <option value="Portuguais" @if( strpos($user->langues, 'ortuguais' ) ) selected @endif>{{ _('Portuguais') }}</option>
                            <option value="Russe" @if( strpos($user->langues, 'usse' ) ) selected @endif>{{ _('Russe') }}</option>
                            <option value="Ladino" @if( strpos($user->langues, 'adino' ) ) selected @endif>{{ _('Ladino') }}</option>
                            <option value="Yiddish" @if( strpos($user->langues, 'iddish' ) ) selected @endif>{{ _('Yiddish') }}</option>
                            <option value="Farsi" @if( strpos($user->langues, 'arsi' ) ) selected @endif>{{ _('Farsi') }}</option>

                    </select>


                  </div>




                  {{-- <label class="title xxx">about me</label>

                  <div class="form-group sm-mt-2">
                    <textarea class="form-control" rows="3"></textarea>
                  </div> --}}

                  <div class="form-group text-center mb-0">
                      <a class="button btn-theme full-rounded btn nextBtn btn-lg mt-2 animated right-icn" id="step-1-next">
                          <span>{{ __('Suivant') }}<i class="glyph-icon flaticon-right-arrow" aria-hidden="true"></i></span>
                        </a>

                        <p class="error-p text-danger">{{ __("Les champs ayant un asterix sont obligatoires!") }}</p>

                    </div>

                </div>
              </div>
            </div>
          </div>
      </div>


      <div class="row setup-content" id="step-2" style="display: none;">
        <div class="col-md-12">
          <div class="row  justify-content-center">
            <div class="col-md-8 text-left  text-white">
              <div class="form-group mb-0">


                <label class="title xxx required">{{ __('Êtes-vous un cohen?') }} *</label>
                <div class="row sm-mt-2">
                  <div class="col-md-4">
                    <div class="radio form-group pb-2">
                      <input @if($user->cohen == 'Oui') checked="checked" @endif name="cohen" value="Oui" id="cohen_1" type="radio" required selected="selected">
                      <label for="cohen_1">{{ __('Oui') }}</label>
                    </div>
                  </div>
                  <div class="col-md-4 sm-mt-2">
                    <div class="radio form-group pb-2">
                      <input @if($user->cohen == 'Non') checked="checked" @endif  name="cohen" value="Non" id="cohen_2" type="radio" required>
                      <label for="cohen_2">{{ __('Non') }}</label>
                    </div>
                  </div>
                </div>


                <label class="title xxx  required">{{ __("Courant d'appartenance religieuse") }} </label>
                <div class="form-group sm-mt-2">
                  <select name="appartenance_religieuse" class="form-control" id="appartenance_religieuse">
                      <option selected disabled>-- {{ __('Choisir') }} --</option>
                  </select>

                  <div id="israel" class="d-none">
                      <option selected disabled>-- {{ __('Choisir') }} --</option>
                      <option value="Dati léoumi" @if($user->appartenance_religieuse == 'Dati léoumi') selected @endif>{{ __('Dati léoumi') }}</option>
                      <option value="Dati light" @if($user->appartenance_religieuse == 'Dati light') selected @endif>{{ __('Dati light') }}</option>
                      <option value="Harédi" @if($user->appartenance_religieuse == 'Harédi') selected @endif>{{ __('Harédi') }}</option>
                      <option value="Hassid" @if($user->appartenance_religieuse == 'Hassid') selected @endif>{{ __('Hassid') }}</option>
                      <option value="Hiloni" @if($user->appartenance_religieuse == 'Hiloni') selected @endif>{{ __('Hiloni') }}</option>
                      <option value="Massorati" @if($user->appartenance_religieuse == 'Massorati') selected @endif>{{ __('Massorati') }}</option>
                  </div>


                  <div id="monde" class="d-none">
                      <option selected disabled>-- {{ __('Choisir') }} --</option>
                      <option value="Chassidish" @if($user->appartenance_religieuse == 'Chassidish') selected @endif>{{ __('Chassidish') }}</option>
                      <option value="Hassiddique - Breslev" @if($user->appartenance_religieuse == 'Hassiddique - Breslev') selected @endif>{{ __('Hassiddique - Breslev') }}</option>
                      <option value="Hassiddique - Habad" @if($user->appartenance_religieuse == 'Hassiddique - Habad') selected @endif>{{ __('Hassiddique - Habad') }}</option>
                      <option value="Hassiddique - Autres" @if($user->appartenance_religieuse == 'Hassiddique - Autres') selected @endif>{{ __('Hassiddique - Autres') }}</option>
                      <option value="Shlihout, port du Sirtouk" @if($user->appartenance_religieuse == 'Shlihout, port du Sirtouk') selected @endif>{{ __('Shlihout, port du Sirtouk') }}</option>
                      <option value="Juste sympathisant Habad" @if($user->appartenance_religieuse == 'Juste sympathisant Habad') selected @endif>{{ __('Juste sympathisant Habad') }}</option>
                      <option value="Heimish" @if($user->appartenance_religieuse == 'Heimish') selected @endif>{{ __('Heimish') }}</option>
                      <option value="Laïque" @if($user->appartenance_religieuse == 'Laïque') selected @endif>{{ __('Laïque') }}</option>
                      <option value="Lubavitch" @if($user->appartenance_religieuse == 'Lubavitch') selected @endif>{{ __('Lubavitch') }}</option>
                      <option value="Orthodoxe - Liberal" @if($user->appartenance_religieuse == 'Orthodoxe - Liberal') selected @endif>{{ __('Orthodoxe - Liberal') }}</option>
                      <option value="Orthodoxe - Machmir" @if($user->appartenance_religieuse == 'Orthodoxe - Machmir') selected @endif>{{ __('Orthodoxe - Machmir') }}</option>
                      <option value="Orthodoxe - Moderne" @if($user->appartenance_religieuse == 'Orthodoxe - Moderne') selected @endif>{{ __('Orthodoxe - Moderne') }}</option>
                      <option value="Toradig" @if($user->appartenance_religieuse == 'Toradig') selected @endif>{{ __('Toradig') }}</option>
                      <option value="Traditionaliste" @if($user->appartenance_religieuse == 'Traditionaliste') selected @endif>{{ __('Traditionaliste') }}</option>
                      <option value="Yeshivish" @if($user->appartenance_religieuse == 'Yeshivish') selected @endif>{{ __('Yeshivish') }}</option>
                  </div>

                </div>


                <label class="title xxx ">{{ __("Pratique(s) religieuse(s) actuelle(s)") }} </label>

                <div class="form-group sm-mt-2">
                  <select name="pratique_religieuse[]" class="form-control" id="pratique_religieuse" multiple="multiple">
                      <option value="Chomer chabbat" @if(strpos( $user->pratique_religieuse, 'homer chabbat' )) selected @endif>{{ __('Chomer chabbat') }}</option>
                      <option value="Respect des fêtes" @if(strpos( $user->pratique_religieuse, 'espect des fêtes' )) selected @endif>{{ __('Respect des fêtes') }}</option>
                      <option value="Fixe des temps d'étude - Occasionnellement" @if(strpos( $user->pratique_religieuse, "ixe des temps d'étude - Occasionnellement" )) selected @endif>{{ __("Fixe des temps d'étude - Occasionnellement") }}</option>
                      <option value="Fixe des temps d'étude - Régulièrement" @if(strpos( $user->pratique_religieuse, "ixe des temps d'étude - Régulièrement" )) selected @endif>{{ __("Fixe des temps d'étude - Régulièrement") }}</option>
                      <option value="Port de la kippa en permanence" @if(strpos( $user->pratique_religieuse, 'ort de la kippa en permanence' )) selected @endif>{{ __('Port de la kippa en permanence') }}</option>
                      <option value="Prières - 3 fois par jour" @if(strpos( $user->pratique_religieuse, 'rières - 3 fois par jour' )) selected @endif>{{ __('Prières - 3 fois par jour') }}</option>
                      <option value="Prières - 2 fois par jour" @if(strpos( $user->pratique_religieuse, 'rières - 2 fois par jour' )) selected @endif>{{ __('Prières - 2 fois par jour') }}</option>
                      <option value="Prières - 1 fois par jour" @if(strpos( $user->pratique_religieuse, 'rières - 1 fois par jour' )) selected @endif>{{ __('Prières - 1 fois par jour') }}</option>
                      @if ($user->genre == 'Femme')
                        <option value="Porte des pantalons" @if(strpos( $user->pratique_religieuse, 'orte des pantalons' )) selected @endif>{{ __('Porte des pantalons') }}</option>
                        <option value="Ne porte que les jupes" @if(strpos( $user->pratique_religieuse, 'e porte que les jupes' )) selected @endif>{{ __('Ne porte que les jupes') }}</option>
                        <option value="Souhaite se couvrir la tête après le mariage" @if(strpos( $user->pratique_religieuse, 'ouhaite se couvrir la tête après le mariage' )) selected @endif>{{ __('Souhaite se couvrir la tête après le mariage (pour les filles)') }}</option>
                      @endif

                      <option value="Souhaite progresser dans la pratique religieuse" @if(strpos( $user->pratique_religieuse, 'ouhaite progresser dans la pratique religieuse' )) selected @endif>{{ __('Souhaite progresser dans la pratique religieuse') }}</option>
                  </select>
                </div>

{{--
                <label class="title xxx">{{ _('Votre niveau réligieux') }}</label>

                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->niveau_religieux }}" class="form-control" name="niveau_religieux" id="niveau_religieux">
                </div>
 --}}


{{--
                <label class="title xxx">{{ __('Orientation religieuse') }}</label>
                <div class="form-group sm-mt-2">
                    <select  class="form-control" id="type" name="types[]" multiple="multiple">

                            <option value="Yeshivish">{{ __('Yeshivish') }}</option>
                            <option value="Chassidish">{{ _('Chassidish') }}</option>
                            <option value="Lubavitch">{{ _('Lubavitch') }}</option>
                            <option value="Modern Orthodox Machmir">{{ _('Modern Orthodox Machmir') }}</option>
                            <option value="Toradig">{{ _('Toradig') }}</option>
                            <option value="Modern Yeshivish">{{ _('Modern Yeshivish') }}</option>
                            <option value="Heimish">{{ _('Heimish') }}</option>
                            <option value="Modern Orthodox Liberal">{{ _('Modern Orthodox Liberal') }}</option>
                            <option value="Modern Orthodox Middle">{{ _('Modern Orthodox Middle') }}</option>
                            <option value="Traditional">{{ _('Traditional') }}</option>
                            @if (App::getLocale() == 'fr')
                                <option value="Libéral">{{ _('Libéral') }}</option>
                            @endif


                    </select>


                </div> --}}


                <label class="title xxx">{{ __('Ancienneté de la pratique religieuse') }}</label>
                <div class="row sm-mt-2 mb-3">

                  <div class="col-md-6 sm-mt-2">
                    <div class="radio">
                      <input name="background_religieux" @if($user->background_religieux == 'Né(e) dans une famille laïque') checked="checked" @endif  value="Né(e) dans une famille laïque" id="background_religieux_2" type="radio">
                      <label for="background_religieux_2">{{ __('Né(e) dans une famille laïque') }}</label>
                    </div>
                  </div>

                  <div class="col-md-6 sm-mt-2">
                    <div class="radio">
                      <input name="background_religieux" @if($user->background_religieux == 'Né(e) dans une famille religieuse') checked="checked" @endif   value="Né(e) dans une famille religieuse" id="background_religieux_3" type="radio">
                      <label for="background_religieux_3">{{ __('Né(e) dans une famille religieuse') }}</label>
                    </div>
                  </div>
                </div>




                <label class="title xxx">{{ __('Origine') }}</label>
                <div class="row sm-mt-2">
                    <div class="col-md-4 mt-2">
                        <div class="radio">
                          <input value="Ashkenazi" @if($user->ethnicite == 'Ashkenazi') checked="checked" @endif   name="ethnicite" id="ethnicite_1" type="radio">
                          <label for="ethnicite_1">{{ __('Ashkenazi') }}</label>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="radio">
                            <input name="ethnicite" @if($user->ethnicite == 'Sephardi') checked="checked" @endif  id="ethnicite_2" value="Sephardi" type="radio">
                            <label for="ethnicite_2">{{ __('Sephardi') }}</label>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="radio">
                            <input name="ethnicite" @if($user->ethnicite == 'Sephardi / Ashkenazi') checked="checked" @endif  id="ethnicite_3" value="Sephardi / Ashkenazi" type="radio">
                            <label for="ethnicite_3">{{ __('Sephardi / Ashkenazi') }}</label>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="radio">
                            <input name="ethnicite" @if($user->ethnicite == 'Autre') checked="checked" @endif  id="ethnicite_4" value="Autre" type="radio">
                            <label for="ethnicite_4">{{ __('Autre') }}</label>
                        </div>
                    </div>

                </div>





                <div class="form-group text-center mb-0">
                    <a class="button btn-theme full-rounded btn nextBtn btn-lg mt-2 animated right-icn"><span>{{ __('Suivant') }}<i class="glyph-icon flaticon-right-arrow" aria-hidden="true"></i></span></a>
                    <p class="error-p text-danger">{{ __("Les champs ayant un asterix sont obligatoires!") }}</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row setup-content" id="step-3" style="display: none;">
        <div class="col-md-12">
          <div class="row  justify-content-center">
            <div class="col-md-8 text-left  text-white">
              <div class="form-group mb-0">




                <div class="form-group sm-mt-2">
                    <label class="title xxx">{{ __('Décrivez les grandes caractéristiques de votre personnalité') }}</label>
                    <textarea name="a_propos" class="form-control" rows="3">{{ $user->a_propos }}</textarea>
                </div>



                <div class="form-group sm-mt-2">
                    <label class="title xxx">{{ __("Qu'attendez-vous de votre conjoint?") }}</label>
                    <textarea name="attentes" class="form-control" rows="3">{{ $user->attentes }}</textarea>
                </div>


                <label class="title xxx">{{ __("Son Intervalle d'age") }}</label>
                <div class="row sm-mt-2">

                      <div class="col-sm-12">
                        <div id="slider-range"></div>
                      </div>

                      <div class="col-md-6 caption text-secondary">
                        <strong>Min:</strong> <span id="slider-range-value1"></span>
                      </div>
                      <div class="col-md-6 caption text-secondary">
                        <strong>Max:</strong> <span id="slider-range-value2"></span>
                      </div>
                      <div class="col-sm-12">

                            @if ( $user->get_age_min() > 0 && $user->get_age_max() > 0 )

                                <input type="hidden" name="age-min" id="age-min" value="{{ $user->get_age_min() }}">
                                <input type="hidden" name="age-max" id="age-max" value="{{ $user->get_age_max() }}">

                            @else

                                <input type="hidden" name="age-min" id="age-min" value="18">
                                <input type="hidden" name="age-max" id="age-max" value="90">

                            @endif



                      </div>
                </div>



                <label class="title xxx " style="font-size: 1.5rem;">{{ _('Vos références') }} </label>

                <br />

                <label class="title xxx ">{{ _('Référence 1') }} </label>

                <div class="row mb-2">

                  <div class="col-md-4">
                      <label for="nom_reference_1">{{ __('Nom et prénom') }}</label>
                      <input class="form-control" name="nom_reference_1" id="nom_reference_1" value="{{ $user->nom_reference_1 }}" type="texte">
                  </div>

                  <div class="col-md-4">
                      <label for="phone_reference_1">{{ __('Téléphone') }}</label>
                        <input class="form-control" name="phone_reference_1" id="phone_reference_1" value="{{ $user->phone_reference_1 }}" type="texte">
                  </div>

                  <div class="col-md-4">
                      <label for="lien_de_parente_reference_1">{{ __('Lien de parenté') }}</label>
                      <select class="form-control" name="lien_de_parente_reference_1" id="lien_de_parente_reference_1">
                          <option selected disabled>{{ __('Choisir') }}</option>
                          <option @if($user->lien_de_parente_reference_1 == 'Famille') selected @endif  value="{{ __('Famille') }}">{{ __('Famille') }}</option>
                          <option @if($user->lien_de_parente_reference_1 == 'Amis') selected @endif value="{{ __('Amis') }}">{{ __('Amis') }}</option>
                          <option @if($user->lien_de_parente_reference_1 == 'Connaissance') selected @endif value="{{ __('Connaissance') }}">{{ __('Connaissance') }}</option>
                          <option @if($user->lien_de_parente_reference_1 == 'Rabin de sa communauté') selected @endif value="{{ __('Rabin de sa communauté') }}">{{ __('Rabin de sa communauté') }}</option>

                      </select>
                  </div>

                </div>


                <label class="title xxx ">{{ _('Référence 2') }} </label>

                <div class="row mb-2">

                  <div class="col-md-4">
                      <label for="nom_reference_2">{{ __('Nom et prénom') }}</label>
                      <input class="form-control" name="nom_reference_2" id="nom_reference_2" value="{{ $user->nom_reference_2 }}" type="texte">
                  </div>

                  <div class="col-md-4">
                      <label for="phone_reference_2">{{ __('Téléphone') }}</label>
                        <input class="form-control" name="phone_reference_2" id="phone_reference_2" value="{{ $user->phone_reference_2 }}" type="texte">
                  </div>

                  <div class="col-md-4">
                      <label for="lien_de_parente_reference_2">{{ __('Lien de parenté') }}</label>
                      <select class="form-control" name="lien_de_parente_reference_2" id="lien_de_parente_reference_2">
                          <option selected disabled>{{ __('Choisir') }}</option>
                          <option @if($user->lien_de_parente_reference_2 == 'Famille') selected @endif  value="{{ __('Famille') }}">{{ __('Famille') }}</option>
                          <option @if($user->lien_de_parente_reference_2 == 'Amis') selected @endif value="{{ __('Amis') }}">{{ __('Amis') }}</option>
                          <option @if($user->lien_de_parente_reference_2 == 'Connaissance') selected @endif value="{{ __('Connaissance') }}">{{ __('Connaissance') }}</option>
                          <option @if($user->lien_de_parente_reference_2 == 'Rabin de sa communauté') selected @endif value="{{ __('Rabin de sa communauté') }}">{{ __('Rabin de sa communauté') }}</option>

                      </select>
                  </div>

                </div>

                <label class="title xxx">{{ _('Nom de votre Rabbin') }}</label>

                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->nom_rabbin }}" class="form-control" name="nom_rabbin" id="nom_rabbin">
                </div>

                <label class="title xxx">{{ _('Téléphone de votre Rabbin') }}</label>

                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->phone_rabbin }}" class="form-control" name="phone_rabbin" id="phone_rabbin">
                </div>





                <label class="title xxx required">{{ __('Accepterez vous de suivre votre conjoint après le mariage dans une autre ville?') }} *</label>
                <div class="row sm-mt-2">
                  <div class="col-md-4">
                    <div class="radio form-group pb-2">
                      <input name="suivre_conjoint" @if($user->suivre_conjoint == 'Oui') checked="checked" @endif  value="Oui" id="suivre_conjoint_1" type="radio" required>
                      <label for="suivre_conjoint_1">{{ __('Oui') }}</label>
                    </div>
                  </div>
                  <div class="col-md-4 sm-mt-2">
                    <div class="radio form-group pb-2">
                      <input name="suivre_conjoint"  @if($user->suivre_conjoint == 'Non') checked="checked" @endif  value="Non" id="suivre_conjoint_2" type="radio">
                      <label for="suivre_conjoint_2">{{ __('Non') }}</label>
                    </div>
                  </div>
                </div>





                <label class="title xxx required">{{ __('Accepterez vous de suivre votre conjoint après le mariage dans un autre pays?') }} *</label>
                <div class="row sm-mt-2">
                  <div class="col-md-4">
                    <div class="radio form-group pb-2">
                      <input name="suivre_conjoint_pays"  @if($user->suivre_conjoint_pays == 'Oui') checked="checked" @endif  value="Oui" id="suivre_conjoint_pays_1" type="radio" required>
                      <label for="suivre_conjoint_pays_1">{{ __('Oui') }}</label>
                    </div>
                  </div>
                  <div class="col-md-4 sm-mt-2">
                    <div class="radio form-group pb-2">
                      <input name="suivre_conjoint_pays"  @if($user->suivre_conjoint_pays == 'Non') checked="checked" @endif  value="Non" id="suivre_conjoint_pays_2" type="radio">
                      <label for="suivre_conjoint_pays_2">{{ __('Non') }}</label>
                    </div>
                  </div>
                </div>




                <div class="form-group text-center mb-0">
                    <a class="button btn-theme full-rounded btn nextBtn btn-lg mt-2 animated right-icn"><span>{{ __('Suivant') }}<i class="glyph-icon flaticon-right-arrow" aria-hidden="true"></i></span></a>
                    <p class="error-p text-danger">{{ __("Les champs ayant un asterix sont obligatoires!") }}</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row  justify-content-center setup-content" id="step-4">
        <div class="col-md-10 text-center">
          <h4 class="title divider-3 mb-5">{{ __('Des photos de vous') }}</h4>
          <div class="row  justify-content-center">
            <div class="col-md-8">
              <div class="form-group">
                <div class="row">
                <p class="mb-0 text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ __('Les photos 1, 5 et 6 sont obligatoires') }} </p>

                  <div class="col-md-8 pr-15">

                    <label class="form-group pb-2" id="photo_1_label" for="photo_1" class="w-100">
                        @if( is_null($user->photo_1) )
                            <img id="photo_1_img" class="img-center w-100" src="/assets/images/step/01.png" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_1" name="photo_1" required />
                        @else
                            <img id="photo_1_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_1 }}" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_1" name="photo_1" />
                        @endif


                    </label>


                    </div>
                  <div class="col-md-4">
                    <div class="row sm-mt-3 ">
                        <div class="col-md-12 mb-3 sm-mb-2">
                            <label id="photo_2_label" for="photo_2" class="w-100">

                                @if( is_null($user->photo_2) )
                                    <img id="photo_2_img" class="img-center w-100" src="/assets/images/step/02.png" alt="" />
                                @else
                                    <img id="photo_2_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_2 }}" alt="" />
                                @endif

                                <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_2" name="photo_2" />
                            </label>


                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mt-2">
                            <label id="photo_3_label" for="photo_3" class="w-100">
                                @if( is_null($user->photo_3) )
                                    <img id="photo_3_img" class="img-center w-100" src="/assets/images/step/03.png" alt="" />
                                @else
                                    <img id="photo_3_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_3 }}" alt="" />
                                @endif
                                <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_3" name="photo_3" />
                            </label>


                        </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label id="photo_4_label" for="photo_4" class="w-100">
                            @if( is_null($user->photo_4) )
                                <img id="photo_4_img" class="img-center w-100" src="/assets/images/step/04.png" alt="" />
                            @else
                                <img id="photo_4_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_4 }}" alt="" />
                            @endif
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_4" name="photo_4" />
                        </label>


                    </div>
                  <div class="col-md-4 sm-mt-3">
                    <label id="photo_5_label" for="photo_5" class="w-100">
                        @if( is_null($user->photo_5) )
                            <img id="photo_5_img" class="img-center w-100" src="/assets/images/step/05.png" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_5" name="photo_5" required />
                        @else
                            <img id="photo_5_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_5 }}" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_5" name="photo_5" />
                        @endif


                    </label>


                  </div>
                  <div class="col-md-4 sm-mt-3">
                    <label id="photo_6_label" for="photo_6" class="w-100">
                        @if( is_null($user->photo_6) )
                            <img id="photo_6_img" class="img-center w-100" src="/assets/images/step/06.png" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_6" name="photo_6" required />
                        @else
                            <img id="photo_6_img" class="img-center w-100" src="{{ assets_base() }}{{ $user->photo_6 }}" alt="" />
                            <input class="d-none photo_input" onchange="readURL(this);" type="file" accept="image/*" id="photo_6" name="photo_6" />
                        @endif

                    </label>


                  </div>
                </div>





              </div>


              <label class="title xxx required">{{ __('Autoriser le partage de ma photo sur le groupe Whatsapp') }}*</label>
              <div class="row sm-mt-2">
                <div class="col-md-4">
                  <div class="radio form-group pb-2">
                    <input name="partage_photo" value="Oui" id="partage_photo_1" type="radio" @if( $user->partage_photo == 'Oui' ) checked="checked" @endif rerquired>
                    <label for="partage_photo_1">{{ __('Oui') }}</label>
                  </div>
                </div>
                <div class="col-md-4 sm-mt-2">
                  <div class="radio form-group pb-2">
                    <input name="partage_photo" value="Non" id="partage_photo_2" type="radio" @if( $user->partage_photo == 'Non' ) checked="checked" @endif>
                    <label for="partage_photo_2">{{ __('Non') }}</label>
                  </div>
                </div>
              </div>


            </div>
          </div>


          {{-- <div class="form-group">
            <div class="profile-info">
              <p class="mb-0"><i class="fa fa-info-circle" aria-hidden="true"></i> {{ __('Les profils avec des photos ont 10 fois plus de chance') }} </p>
            </div>
          </div> --}}
            <div class="form-group mb-0 text-center">
                <a id="submit-btn" class="button btn-theme nextBtn full-rounded btn btn-lg mt-2 animated right-icn"><span>{{ __('Soumettre') }}<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></a>
                <p class="error-p text-danger">{{ __("Les champs ayant un asterix sont obligatoires!") }}</p>
            </div>

        </div>
      </div>


    </form>
  </div>
