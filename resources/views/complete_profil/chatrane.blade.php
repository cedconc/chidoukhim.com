<form  id="form" action="{{ route('update_profil') }}" method="post"  enctype="multipart/form-data"class="text-center mt-3">
    @csrf

    <input type="hidden" value="{{ $user->id }}" name="user_id">
    <div class="row  justify-content-center">
        <div class="col-md-12 text-left  text-white">
            <div class="form-group mb-0">

                <label class="title xxx required">{{ __('Votre nom') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" id="name" required>
                </div>
            </div>

            <div class="form-group mb-0">
                <label class="title xxx required">{{ __('Email') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" class="form-control" disabled  value="{{ $user->email }}">
                </div>
            </div>




            <div class="form-group mb-0">
                <label class="title xxx required">{{ __('Votre prénom') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" value="{{ $user->prenom }}" class="form-control" name="prenom" id="prenom" required>
                </div>
            </div>

            <div class="form-group mb-0">

                <label class="title xxx required">{{ __('Genre') }} *</label>
                <div class="row sm-mt-2">
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

            </div>


            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Les langues parlées') }} *</label>


                <select class="form-control" id="langues" name="langues[]" multiple="multiple" required>

                        <option value="Hébreu" @if( strpos($user->langues, 'Hébreu' ) !== false ) selected @endif>{{ _('Hébreu') }}</option>
                        <option value="Anglais" @if( strpos($user->langues, 'Anglais' ) !== false ) selected @endif>{{ __('Anglais') }}</option>
                        <option value="Français" @if( strpos($user->langues, 'Français' ) !== false ) selected @endif>{{ _('Français') }}</option>
                        <option value="Espagnol" @if( strpos($user->langues, 'Espagnol' ) !== false ) selected @endif>{{ _('Espagnol') }}</option>
                        <option value="Italien" @if( strpos($user->langues, 'Italien' ) !== false ) selected @endif>{{ _('Italien') }}</option>
                        <option value="Portuguais" @if( strpos($user->langues, 'Portuguais' ) !== false ) selected @endif>{{ _('Portuguais') }}</option>
                        <option value="Russe" @if( strpos($user->langues, 'Russe' ) !== false ) selected @endif>{{ _('Russe') }}</option>
                        <option value="Ladino" @if( strpos($user->langues, 'Ladino' ) !== false ) selected @endif>{{ _('Ladino') }}</option>
                        <option value="Yiddish" @if( strpos($user->langues, 'Yiddish' ) !== false ) selected @endif>{{ _('Yiddish') }}</option>
                        <option value="Farsi" @if( strpos($user->langues, 'Farsi' ) !== false ) selected @endif>{{ _('Farsi') }}</option>

                </select>


            </div>



            <div class="form-group mb-0">
                <label class="title xxx  required">{{ __('Adresse') }} *</label>
                <div class="form-group sm-mt-2">
                  <input type="text" value="{{ $user->adresse }}" class="form-control" name="adresse" id="search-address" autocomplete="off" required>

                  <input type="hidden" name="pays" class="form-control" id="pays">
                  <input type="hidden" name="ville" class="form-control" id="ville">
                </div>

            </div>

            <div class="form-group mb-0">

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

            </div>

            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Date de naissance') }} *</label>

                <div class="form-group sm-mt-2">
                    <input type="date" class="form-control" name="date_de_naissance" id="date_de_naissance" value="{{ $user->date_de_naissance }}" required>
                </div>


            </div>










            <div class="form-group mb-0">

                <label class="title xxx">{{ __('Orientation religieuse') }}</label>
                <select  class="form-control" id="type" name="types[]" multiple="multiple">

                        <option value="Yeshivish" @if ( strpos($user->types, 'Yeshivish') !== false ) selected @endif>{{ __('Yeshivish') }}</option>
                        <option value="Chassidish" @if ( strpos($user->types, 'Chassidish') !== false ) selected @endif>{{ _('Chassidish') }}</option>
                        <option value="Lubavitch" @if ( strpos($user->types, 'Lubavitch') !== false ) selected @endif>{{ _('Lubavitch') }}</option>
                        <option value="Modern Orthodox Machmir" @if ( strpos($user->types, 'Modern Orthodox Machmir') !== false ) selected @endif>{{ _('Modern Orthodox Machmir') }}</option>
                        <option value="Toradig" @if ( strpos($user->types, 'Toradig') !== false ) selected @endif>{{ _('Toradig') }}</option>
                        <option value="Modern Yeshivish" @if ( strpos($user->types, 'Modern Yeshivish') !== false ) selected @endif>{{ _('Modern Yeshivish') }}</option>
                        <option value="Heimish" @if ( strpos($user->types, 'Heimish') !== false ) selected @endif>{{ _('Heimish') }}</option>
                        <option value="Modern Orthodox Liberal" @if ( strpos($user->types, 'Modern Orthodox Liberal') !== false ) selected @endif>{{ _('Modern Orthodox Liberal') }}</option>
                        <option value="Modern Orthodox Middle" @if ( strpos($user->types, 'Modern Orthodox Middle') !== false ) selected @endif>{{ _('Modern Orthodox Middle') }}</option>
                        <option value="Traditional" @if ( strpos($user->types, 'Traditional') !== false ) selected @endif>{{ _('Traditional') }}</option>

                </select>


            </div>




            <div class="form-group mb-0">


                <label class="title xxx required">{{ __('Numéro de téléphone') }} *</label>
                <div class="form-group sm-mt-2">
                    <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $user->telephone }}" required>
                </div>
            </div>

            <div class="form-group mb-0">

                <label class="mt-5" style="font-size: 1.3rem;">{{ __('Le plublic concerné par vos chidours') }}</label>
                <br />

                <label class="title xxx required">{{ __("Tranche d'âge") }} *</label>
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

                      @if ( $user->age_min_supporte() > 0 && $user->age_max_supporte() > 0 )

                      <input type="hidden" name="age-min-supporte" id="age-min" value="{{ $user->age_min_supporte() }}">
                      <input type="hidden" name="age-max-supporte" id="age-max" value="{{ $user->age_max_supporte() }}">

                  @else

                      <input type="hidden" name="age-min-supporte" id="age-min" value="18">
                      <input type="hidden" name="age-max-supporte" id="age-max" value="90">

                  @endif


                </div>

            </div>

            <div class="form-group mb-0">

                <label class="title xxx">{{ __('Le niveau religieux des profils') }}</label>
                <select  class="form-control" id="orientations_religieuses_profils" name="orientations_religieuses_profils[]" multiple="multiple">

                    <option value="Yeshivish" @if ( strpos($user->types, 'Yeshivish') !== false ) selected @endif>{{ __('Yeshivish') }}</option>
                    <option value="Chassidish" @if ( strpos($user->types, 'Chassidish') !== false ) selected @endif>{{ _('Chassidish') }}</option>
                    <option value="Lubavitch" @if ( strpos($user->types, 'Lubavitch') !== false ) selected @endif>{{ _('Lubavitch') }}</option>
                    <option value="Modern Orthodox Machmir" @if ( strpos($user->types, 'Modern Orthodox Machmir') !== false ) selected @endif>{{ _('Modern Orthodox Machmir') }}</option>
                    <option value="Toradig" @if ( strpos($user->types, 'Toradig') !== false ) selected @endif>{{ _('Toradig') }}</option>
                    <option value="Modern Yeshivish" @if ( strpos($user->types, 'Modern Yeshivish') !== false ) selected @endif>{{ _('Modern Yeshivish') }}</option>
                    <option value="Heimish" @if ( strpos($user->types, 'Heimish') !== false ) selected @endif>{{ _('Heimish') }}</option>
                    <option value="Modern Orthodox Liberal" @if ( strpos($user->types, 'Modern Orthodox Liberal') !== false ) selected @endif>{{ _('Modern Orthodox Liberal') }}</option>
                    <option value="Modern Orthodox Middle" @if ( strpos($user->types, 'Modern Orthodox Middle') !== false ) selected @endif>{{ _('Modern Orthodox Middle') }}</option>
                    <option value="Traditional" @if ( strpos($user->types, 'Traditional') !== false ) selected @endif>{{ _('Traditional') }}</option>

                </select>


            </div>



            <div class="form-group mb-0">
                <label class="title xxx">{{ __('Localisation de vos célibataires') }}</label>
                <select  class="form-control" id="pays_profils" name="pays_profils[]" multiple="multiple">
                        <option value="">{{ __('') }}</option>
                        @foreach ($pays as $item)
                            <option value="{{ $item->nom }}" @if( strpos($user->pays_profils, $item->nom) !== false ) selected @endif>{{ $item->nom }}</option>
                        @endforeach
                </select>
            </div>


            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Langues parlées par vos célibataires') }} *</label>


                <select class="form-control" id="langues_profils" name="langues_profils[]" multiple="multiple" required>

                    <option value="Hébreu" @if( strpos($user->langues_profils, 'Hébreu' ) !== false ) selected @endif>{{ _('Hébreu') }}</option>
                    <option value="Anglais" @if( strpos($user->langues_profils, 'Anglais' ) !== false ) selected @endif>{{ __('Anglais') }}</option>
                    <option value="Français" @if( strpos($user->langues_profils, 'Français' ) !== false ) selected @endif>{{ _('Français') }}</option>
                    <option value="Espagnol" @if( strpos($user->langues_profils, 'Espagnol' ) !== false ) selected @endif>{{ _('Espagnol') }}</option>
                    <option value="Italien" @if( strpos($user->langues_profils, 'Italien' ) !== false ) selected @endif>{{ _('Italien') }}</option>
                    <option value="Portuguais" @if( strpos($user->langues_profils, 'Portuguais' ) !== false ) selected @endif>{{ _('Portuguais') }}</option>
                    <option value="Russe" @if( strpos($user->langues_profils, 'Russe' ) !== false ) selected @endif>{{ _('Russe') }}</option>
                    <option value="Ladino" @if( strpos($user->langues_profils, 'Ladino' ) !== false ) selected @endif>{{ _('Ladino') }}</option>
                    <option value="Yiddish" @if( strpos($user->langues_profils, 'Yiddish' ) !== false ) selected @endif>{{ _('Yiddish') }}</option>
                    <option value="Farsi" @if( strpos($user->langues_profils, 'Farsi' ) !== false ) selected @endif>{{ _('Farsi') }}</option>


                </select>


            </div>


            <div class="form-group mb-0">

                <label class="title xxx required">{{ __('Acceptez-vous les personnes ayant un handicap') }} </label>

                <div class="row sm-mt-2 mb-0">
                    <div class="col-md-6">
                      <div class="radio">
                        <input id="handicap_0" name="handicap_chatrane" value="Oui" type="radio" required checked="checked">
                        <label for="handicap_0">{{ __("Oui") }}</label>
                      </div>
                    </div>
                    <div class="col-md-6 sm-mt-2">
                      <div class="radio">
                        <input id="handicap_1" name="handicap_chatrane" value="Non" @if( $user->handicap_chatrane == "Non") checked="checked" @endif type="radio">
                        <label for="handicap_1">{{ __('Non') }}</label>
                      </div>
                    </div>
                </div>



            </div>



            <div class="form-group mb-0">

                <label class="title xxx required">{{ __('Situation matrimoniale de vos célibataires') }} *</label>
                <select class="form-control" name="type_celibataire[]" id="type_celibataire" multiple="multiple">
                    <option value="Célibataire" @if( strpos( $user->type_celibataire, 'Célibataire') !== false ) selected @endif>{{ __('Célibataire') }}</option>
                    <option value="Marié" @if( strpos( $user->type_celibataire, 'Marié') !== false ) selected @endif>{{ __('Marié') }}</option>
                    <option value="Divorcé" @if( strpos( $user->type_celibataire, 'Divorcé') !== false  ) selected @endif>{{ __('Divorcé') }}</option>
                    <option value="Veuf" @if( strpos( $user->type_celibataire, 'Veuf') !== false ) selected @endif>{{ __('Veuf') }}</option>
                </select>

            </div>








            <div class="mb-5">
                <div class="form-group mb-2 mt-5">

                    <label class="title xxx required">{{ __('Vos tarifs') }} </label>

                    <div class="row sm-mt-2 mb-0">
                        <div class="col-md-6">
                          <div class="radio">
                            <input id="tarif_0" name="tarif_0" value="0" type="radio" required checked="checked">
                            <label for="tarif_0">{{ __("Je suis bénévole du début jusqu'à  la fin") }}</label>
                          </div>
                        </div>
                        <div class="col-md-6 sm-mt-2">
                          <div class="radio">
                            <input id="tarif_1" name="tarif_0" value="1" required @if( $user->tarif_chidour > 0 || $user->tarif_prise_en_charge > 0 ) checked="checked" @endif type="radio">
                            <label for="tarif_1">{{ __('Je fixe rétribution') }}</label>
                          </div>
                        </div>
                    </div>



                </div>


                <div id="benevolat">

                    <div class="form-group mb-2 mt-5">

                        <label class="title xxx required">{{ __("Je souhaite reverser ma rémunération au site  pour financer sa maintenance ou pour aider les gens qui peuvent pas se marier") }}</label>

                        <div class="row mb-0">
                            <div class="col-md-6">
                                <div class="radio">
                                  <input id="benevole_plan_0" name="benevole_plan" value="1" type="radio" required checked="checked">
                                  <label for="benevole_plan_0">{{ __("Oui") }}</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="radio">
                                  <input id="benevole_plan_1" name="benevole_plan" value="0" type="radio" required>
                                  <label for="benevole_plan_1">{{ __("Non") }}</label>
                                </div>
                            </div>


                        </div>

                    </div>




                </div>

                <div id="tarifs">

                    <div class="row mb-0">
                        <div class="form-group col-md-4" style="align-self: flex-end;">
                            <label for="devise" class="title">{{ __("Votre devise") }}</label>

                            <select name="devise" id="devise" class="form-control">
                                <option @if( $user->devise == "ILS" ) selected @endif value="ILS">ILS</option>
                                <option @if( $user->devise == "EUR" ) selected @endif value="EUR">EUR</option>
                                <option @if( $user->devise == "USD" ) selected @endif value="USD">USD</option>
                            </select>

                        </div>

                        <div class="form-group col-md-4" style="align-self: flex-end;">
                            <label for="tarif_prise_en_charge" class="title">{{ __("Tarif pour la prise en charge d'un profil") }}</label>

                            <input class="form-control" value="{{ $user->tarif_prise_en_charge }}" name="tarif_prise_en_charge" id="tarif_prise_en_charge" type="number" value="0" min="0" />
                        </div>

                        <div class="form-group col-md-4" style="align-self: flex-end;">
                            <label for="tarif_chidour" class="title">{{ __("Tarif en cas de fiancailles/mariage") }}</label>

                            <input class="form-control" value="{{ $user->tarif_chidour }}" name="tarif_chidour" id="tarif_chidour" type="number" value="0" min="0" />
                        </div>


                    </div>


                    <div class="form-group mb-0">

                        <label class="title xxx required">{{ __('Vos modalités de paiement') }} </label>
                        <select class="form-control" name="modalites_paiement[]" id="modalites_paiement" multiple="multiple">
                            <option @if( strpos($user->modalites_paiement, 'Virement bancaire') !== false ) checked @endif value="Virement bancaire">{{ __('Virement bancaire') }}</option>
                            <option @if( strpos($user->modalites_paiement, 'Carte') !== false ) checked @endif value="Carte">{{ __('Carte') }}</option>
                            <option @if( strpos($user->modalites_paiement, 'Chèque') !== false ) checked @endif value="Chèque">{{ __('Chèque') }}</option>
                            <option @if( strpos($user->modalites_paiement, 'Autres') !== false ) checked @endif value="Autres">{{ __('Autres') }}</option>
                        </select>

                    </div>




                </div>
            </div>












            <div class="form-group mb-0">
                <label for="nb_max_profils">{{ __('Le nombres maximum de profils dont vous voulez vous occuper') }}</label>
                <input type="number" min="1" value="{{ $user->nb_max_profils }}" name="nb_max_profils" id="nb_max_profils" class="form-control">
            </div>



            <div class="form-group mb-0">
                <label for="nb_max_profils">{{ __('Quels sont vos services?') }} </label>


                <select class="form-control" id="services" name="services[]" multiple="multiple" required>

                    <option value="Accompagnement du chidouh" @if( strpos($user->services, 'Accompagnement du chidouh' ) !== false ) selected @endif>{{ _('Accompagnement du chidouh') }}</option>
                    <option value="Recherche de match" @if( strpos($user->services, 'Recherche de match' ) !== false ) selected @endif>{{ _('Recherche de match') }}</option>
                    <option value="Coaching" @if( strpos($user->services, 'Coaching' ) !== false ) selected @endif>{{ _('Coaching') }}</option>


                </select>
            </div>



            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Sélectionner vos méthodes de contact') }} *</label>


                <select class="form-control" id="contacts" name="contacts[]" multiple="multiple" required>

                        <option value="Email" @if( strpos($user->contacts, 'Email' ) !== false ) selected @endif>{{ _('Email') }}</option>
                        <option value="Téléphone" @if( strpos($user->contacts, 'Téléphone' ) !== false ) selected @endif>{{ _('Téléphone') }}</option>
                        <option value="Zoom" @if( strpos($user->contacts, 'Zoom' ) !== false ) selected @endif>{{ _('Zoom') }}</option>
                        <option value="Sur rendez-vous" @if( strpos($user->contacts, 'Sur rendez-vous' ) !== false ) selected @endif>{{ _('Sur rendez-vous') }}</option>


                </select>


            </div>




            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Comment les célibataires vous approchent') }} *</label>


                <select class="form-control" id="contact_celibataires" name="contact_celibataires[]" multiple="multiple" required>

                    <option value="Amis" @if( strpos($user->contact_celibataires, 'Amis') !== false ) checked @endif >{{ _('Amis') }}</option>
                    <option value="Email" @if( strpos($user->contact_celibataires, 'Email' ) !== false ) selected @endif>{{ _('Email') }}</option>
                    <option value="Téléphone" @if( strpos($user->contact_celibataires, 'Téléphone' ) !== false ) selected @endif>{{ _('Téléphone') }}</option>
                    <option value="Groupe Whatsapp" @if( strpos($user->contact_celibataires, 'Groupe Whatsapp') !== false ) checked @endif>{{ _('Groupe Whatsapp') }}</option>
                    <option value="Groupe Facebook" @if( strpos($user->contact_celibataires, 'Groupe Facebook') !== false ) checked @endif>{{ _('Groupe Facebook') }}</option>

                </select>


            </div>

            <div class="form-group mb-0">
                <label class="title xxx">{{ __('Quelle raison vous pousse à être chadranite?') }}</label>
                <textarea name="a_propos" class="form-control">{{ $user->a_propos }}</textarea>
            </div>

            <div class="form-group mb-0">
                <label class="title xxx">{{ __('Pourquoi  voulez vous être Shadhanite/Shadhan') }}</label>
                <textarea name="motif_chatrane" class="form-control">{{ $user->motif_chatrane }}</textarea>
            </div>




            <div class="form-group mb-0">

                <label class="title xxx required">{{ __('Êtes-vous disponible pour vous occupez de nouveaux profils?') }} </label>

                <div class="row sm-mt-2 mb-0">
                    <div class="col-md-6">
                      <div class="radio">
                        <input id="disponibilite_0" name="disponibilite" value="Oui" type="radio" required checked="checked">
                        <label for="disponibilite_0">{{ __("Oui") }}</label>
                      </div>
                    </div>
                    <div class="col-md-6 sm-mt-2">
                      <div class="radio">
                        <input id="disponibilite_1" name="disponibilite" value="Non" @if($user->disponibilite == "Non") checked @endif type="radio">
                        <label for="disponibilite_1">{{ __('Non') }}</label>
                      </div>
                    </div>
                </div>

            </div>



            <div class="form-group mb-0">

                <label class="title xxx required">{{ _('Votre photo / logo') }} *</label>

                <div class="form-group sm-mt-2">
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


            </div>





            <div class="form-group mb-0 mt-4 text-center">
                <button type="submit" class="button btn-theme full-rounded btn nextBtn btn-lg mt-2 animated right-icn"> {{ __('Soumettre') }} <i class="glyph-icon flaticon-right-arrow" aria-hidden="true"></i> </button>
            </div>


        </div>
    </div>



</form>

