<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Hessed Chidouhkim" />
        <meta name="description" content="Hessed Chidouhkim" />
        <meta name="author" content="jago.cartman@gmail.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hessed Chidoukhim</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico" />

        <!-- bootstrap -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/bootstrap-slider.min.css" rel="stylesheet" type="text/css" />

        <!-- mega menu -->
        <link href="/assets/css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

        <!-- font-awesome -->
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Flaticon -->
        <link href="/assets/css/flaticon.css" rel="stylesheet" type="text/css" />

        <!-- General style -->
        <link href="/assets/css/general.css" rel="stylesheet" type="text/css" />

        <!-- main style -->
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{assets_base()}}/vendor/cookie-consent/css/cookie-consent.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet" />




        <style>
            .menu-logo img{
                width: 70px;
            }

            #content {
                position: relative;
                min-height: 100vh;

            }
        </style>


        @yield('styles')

        </head>


        <body>

            <!--=================================
             preloader -->
            {{-- <div id="preloader">
              <div class="clear-loading loading-effect"><img src="/assets/images/loading.gif" alt="" /></div>
            </div> --}}

            <!--=================================
             preloader -->

            @include('layouts.header')

            <div id="content" class="bg-light">

                @include('flash')


                @yield('content')
            </div>





            @include('layouts.footer')

            <!--=================================
            Color Customizer -->



            <!--=================================
             jquery -->

            <!-- jquery  -->
            <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="/assets/js/popper.min.js"></script>

            <!-- bootstrap -->
            <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
            <script type="text/javascript" src="/assets/js/bootstrap-slider.min.js"></script>

            <!-- appear -->
            <script type="text/javascript" src="/assets/js/jquery.appear.js"></script>

            <!-- appear -->
            <script type="text/javascript" src="/assets/js/jquery.appear.js"></script>

            <!-- Menu -->
            <script type="text/javascript" src="/assets/js/mega-menu/mega_menu.js"></script>



            <!-- custom -->
            <script type="text/javascript" src="/assets/js/custom.js"></script>
            <script type="text/javascript" src="/assets/vendor/jsvalidation/js/jsvalidation.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="{{ assets_base() }}/assets/js/custom-slider.js"></script>

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

            @yield('scripts')
        </body>
</html>
