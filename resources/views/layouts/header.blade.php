            <!--=================================
             header -->

             <header id="header" class="dark">
                <div class="topbar bg-primary">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6" style="align-self: center;">
                        <div class="topbar-left text-left">
                          <ul class="list-inline">
                            <li><a href="mailto:contact@chidoukhim.com"><i class="fa fa-envelope-o"> </i> contact@chidoukhim.com </a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> <b>FR</b>  +33.1.77.50.32.55</a></li>
                            <li><a href="#"> <b>ISR</b>  +972.54.64.85.357 </a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="topbar-right text-right">
                          <ul class="list-inline social-icons color-hover">
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
                          <ul class="list-inline text-uppercase top-menu">


                              @if (Auth::check())
                              <ul class="navbar-nav" style="display: inline;">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-2x fa-user rounded-circle"></i>
                                </a>
                                <div class="dropdown-menu bg-primary" style="width: fit-content;" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/user/{{ Auth::user()->slug }}">
                                        {{ __('Mon profil') }}
                                        @if (Auth::user()->chatrane == 1)
                                            {{ __("Shadhanite/Shadhan") }}
                                        @endif
                                    </a>

                                    <a class="dropdown-item" href="/chidours">

                                        @if (Auth::user()->chatrane == 1)
                                            {{ __('Les Chidoukh de mes membres') }}
                                        @else
                                            {{ __('Mes Chidoukh') }}
                                        @endif


                                    </a>
                                  <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Se déconnecter') }}</a>
                                </div>
                              </li>
                            </ul>
                              @else

                                <li><a href="{{ route('register') }}">{{ __("Créer un compte") }}</a></li>
                                <li><a href="{{ route('login') }}">{{ __("S'identifier") }}</a></li>

                              @endif

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--=================================
               mega menu -->

                <div class="menu bg-light">
                  <!-- menu start -->
                  <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items bg-light">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                              <li> <a href="/"><img src="/assets/images/logo.png" alt="logo" /> </a> </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                              <!-- active class -->
                              <li><a style="color: #000;" href="/"> {{ __('Accueil') }} </a> </li>
                              <li><a style="color: #000;" href="{{ route('home') }}"> {{ __('Profils') }} </a> </li>
                              <li><a style="color: #000;" href="{{ route('charte_chatrane') }}"> {{ __('Charte Shadhanite') }} </a> </li>
                              <li><a style="color: #000;" href="{{ route('cgu') }}"> {{ __("CGU") }} </a> </li>
                            </ul>

                              {{--
                              <li><a href="javascript:void(0)">Profiles <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel left-menu">
                                  <li><a href="profile.html">Profiles 01</a></li>
                                  <li><a href="profile-2.html">Profiles 02</a></li>
                                </ul>
                              </li>
                              <li><a href="javascript:void(0)">Stories <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel left-menu">
                                  <li><a href="stories.html">Stories 01</a></li>
                                  <li><a href="stories-2.html">Stories 02</a></li>
                                </ul>
                              </li>
                              <li class="active"><a href="javascript:void(0)"> Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down full width -->
                                <div class="drop-down grid-col-12">
                                  <!--grid row-->
                                  <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="about-1.html">About 01</a></li>
                                        <li><a href="about-2.html"> About 02 </a></li>
                                        <li><a href="team-1.html"> Team 01</a></li>
                                        <li><a href="team-2.html"> Team 02</a></li>
                                        <li><a href="team-single.html"> Team Single</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="faqs-1.html"> Faqs 01</a></li>
                                        <li><a href="faqs-2.html"> Faqs 02</a></li>
                                        <li><a href="contact-1.html"> Contact 01</a></li>
                                        <li><a href="contact-2.html"> Contact 02</a></li>
                                        <li><a href="contact-3.html"> Contact 03</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="login.html">Login 01</a></li>
                                        <li><a href="login-2.html">Login 02</a></li>
                                        <li><a href="register.html">Register 01</a></li>
                                        <li><a href="register-2.html">Register 02</a></li>
                                        <li><a href="step.html">Step</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="error-404.html"> 404 Error </a></li>
                                        <li><a href="coming-soon.html">Coming Soon </a></li>
                                        <li><a href="terms-conditions.html"> Terms Conditions</a></li>
                                        <li><a href="privacy-policy.html"> Privacy Policy</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li><a href="javascript:void(0)"> Blog <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel left-menu">
                                  <li><a href="javascript:void(0)">Blog Classic <i class="fa fa-angle-right fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel right-menu">
                                      <li><a href="blog-left.html">Left Sidebar</a></li>
                                      <li><a href="blog-right.html">Right Sidebar</a></li>
                                      <li><a href="blog-fullwidth.html">Fullwidth</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="javascript:void(0)">Blog Masonry <i class="fa fa-angle-right fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel right-menu">
                                      <li><a href="blog-masonry-2-columns.html">2 Columns</a></li>
                                      <li><a href="blog-masonry-3-columns.html">3 Columns</a></li>
                                      <li><a href="blog-masonry-fullwidth.html">Fullwidth</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="javascript:void(0)">Blog Single <i class="fa fa-angle-right fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel right-menu">
                                      <li><a href="blog-singal-left.html">Single Left</a></li>
                                      <li><a href="blog-singal-right.html">Single Right</a></li>
                                      <li><a href="blog-singal-fullwidth.html">Single Fullwidth</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="javascript:void(0)"> Shortcodes <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down full width -->
                                <div class="drop-down grid-col-12">
                                  <!--grid row-->
                                  <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="elements-accordions.html"><i class="fa fa-list-ul"></i> accordions </a></li>
                                        <li><a href="elements-action-box.html"><i class="fa fa-rocket"></i> action box</a></li>
                                        <li><a href="elements-alerts-and-callouts.html"><i class="fa fa-info-circle"></i> alerts and callouts</a></li>
                                        <li><a href="elements-buttons.html"><i class="fa fa-external-link"></i> buttons</a></li>
                                        <li><a href="elements-carousel-slider.html"><i class="fa fa-exchange"></i> carousel slider</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="elements-columns.html"><i class="fa fa-th"></i> columns</a></li>
                                        <li><a href="elements-content-box.html"><i class="fa fa-file-text-o"></i> content box</a></li>
                                        <li><a href="elements-counter.html"><i class="fa fa-sort-numeric-asc"></i> counter</a></li>
                                        <li><a href="elements-data-table.html"><i class="fa fa-table"></i> data table</a></li>
                                        <li><a href="elements-lists-style.html"><i class="fa fa-th-list"></i> lists style</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="elements-post-style.html"> <i class="fa fa-photo"></i> post style</a></li>
                                        <li><a href="elements-timeline.html"><i class="fa fa-tasks"></i>Timeline</a></li>
                                        <li><a href="elements-social-icon.html"><i class="fa fa-share-alt"></i> social icon</a></li>
                                        <li><a href="elements-testimonial.html"><i class="fa fa-quote-left"></i> testimonial</a></li>
                                        <li><a href="elements-tabs.html"><i class="fa fa-star"></i> tabs</a></li>
                                      </ul>
                                    </div>
                                    <!--grid column 3-->
                                    <div class="grid-col-3">
                                      <ul>
                                        <li><a href="elements-team.html"><i class="fa fa-users"></i> team</a></li>
                                        <li><a href="elements-typography.html"><i class="fa fa-italic"></i> typography</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel right-menu">
                                  <li><a href="contact-1.html">Contact 1</a></li>
                                  <li><a href="contact-2.html">Contact 2</a></li>
                                  <li><a href="contact-3.html">Contact 3</a></li>
                                </ul>
                              </li>
                            </ul> --}}
                          </div>
                        </div>
                      </div>
                    </section>
                  </nav>
                  <!-- menu end -->
                </div>
              </header>

            <div id="messenger-iframe-container">
                <a href="#" title="close" id="messenger-close"><i class="fa fa-3x fa-times-circle-o text-danger" aria-hidden="true"></i> </a>
                <iframe id="messenger-iframe" src="{{url('/messages')}}">Your browser isn't compatible</iframe>
            </div>


            <div id="message-bull"><a class="top arrow bg-secondary" href="#top"><i class="fa fa-comments"></i></a></div>

            @if (session('show_messagerie') == 1)

                <style>


                    #messenger-iframe, #messenger-iframe-container{
                        display: inline-block!important;
                        /* animation: blinker 1s linear 1000; */
                    }

                    @keyframes blinker {
                        50% {
                            opacity: 0;
                        }
                    }
                </style>
            @endif

              <!--=================================
               header -->
