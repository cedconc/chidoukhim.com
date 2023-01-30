@extends('layouts.auth')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">


    <style type="text/css">

        .photo-gallery {
        color:#313437;
        background-color:#fff;
        }

        .photo-gallery p {
        color:#7d8285;
        }

        .photo-gallery h2 {
        font-weight:bold;
        margin-bottom:40px;
        padding-top:40px;
        color:inherit;
        }

        @media (max-width:767px) {
        .photo-gallery h2 {
            margin-bottom:25px;
            padding-top:25px;
            font-size:24px;
        }
        }

        .photo-gallery .intro {
        font-size:16px;
        max-width:500px;
        margin:0 auto 40px;
        }

        .photo-gallery .intro p {
        margin-bottom:0;
        }

        .photo-gallery .photos {
        padding-bottom:20px;
        }

        .photo-gallery .item {
        padding-bottom:30px;
        }





        .error{
            color: red!important;
        }

        .has-error{
            border-bottom: 1px solid red!important;
        }

        .stepwizard-step p {
            color: #000;
        }

        form .form-group > label{
            color: var(--secondary);
        }

        form .form-group .checkbox label, form .form-group .radio label{
            color: #000;
        }

        .step-form .form-group textarea.form-control {
            background: #eee;
            border: 1px solid #eee;
            color: #000;
        }

        .radio input[type="radio"] + label::before{
            border: 1px solid #000;
        }

        .radio input[type="radio"]:checked + label::before {
            border: 1px solid #000;
            box-shadow: unset;
            background: var(--primary);
        }
        .btn-circle, .btn-circle.completed, .stepwizard-step::before {
            background: var(--primary);
        }

        form .form-group .form-control {
            color: #000;
            background: #eee;
            border: 1px solid #eee;
        }


        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #eee 1px;
            height: auto;
            padding: 16px 15px;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: #eee;
            border: 1px solid #eee;
            padding: 16px 15px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: #000;
        }


        #step-3-wizard::before {
            display: inline!important;
            background: var(--primary);
            bottom: 0;
            content: " ";
            height: 4px;
            position: absolute;
            right: -10px;
            top: 14px;
            width: 100%;
            z-index: -9;
        }

        #step-4-wizard::before{
            display: none;!important;
        }


        .select2-container{
          width: 100%!important;
        }
        .select2-search--dropdown .select2-search__field {
          width: 98%;
        }





        .slider-labels {
        margin-top: 10px;
        }

        /* Functional styling;
        * These styles are required for noUiSlider to function.
        * You don't need to change these rules to apply your design.
        */
        .noUi-target,.noUi-target * {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -ms-touch-action: none;
        touch-action: none;
        -ms-user-select: none;
        -moz-user-select: none;
        user-select: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }

        .noUi-target {
        position: relative;
        direction: ltr;
        }

        .noUi-base {
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 1;
        /* Fix 401 */
        }

        .noUi-origin {
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        bottom: 0;
        }

        .noUi-handle {
        position: relative;
        z-index: 1;
        }

        .noUi-stacking .noUi-handle {
        /* This class is applied to the lower origin when
        its values is > 50%. */
        z-index: 10;
        }

        .noUi-state-tap .noUi-origin {
        -webkit-transition: left 0.3s,top .3s;
        transition: left 0.3s,top .3s;
        }

        .noUi-state-drag * {
        cursor: inherit !important;
        }

        /* Painting and performance;
        * Browsers can paint handles in their own layer.
        */
        .noUi-base,.noUi-handle {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }

        /* Slider size and handle placement;
        */
        .noUi-horizontal {
        height: 4px;
        }

        .noUi-horizontal .noUi-handle {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        left: -7px;
        top: -7px;
        background-color: #345DBB;
        }

        /* Styling;
        */
        .noUi-background {
        background: #D6D7D9;
        }

        .noUi-connect {
        background: #345DBB;
        -webkit-transition: background 450ms;
        transition: background 450ms;
        }

        .noUi-origin {
        border-radius: 2px;
        }

        .noUi-target {
        border-radius: 2px;
        }

        .noUi-target.noUi-connect {
        }

        /* Handles and cursors;
        */
        .noUi-draggable {
        cursor: w-resize;
        }

        .noUi-vertical .noUi-draggable {
        cursor: n-resize;
        }

        .noUi-handle {
        cursor: default;
        -webkit-box-sizing: content-box !important;
        -moz-box-sizing: content-box !important;
        box-sizing: content-box !important;
        }

        .noUi-handle:active {
        border: 8px solid #345DBB;
        border: 8px solid rgba(53,93,187,0.38);
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        left: -14px;
        top: -14px;
        }

        /* Disabled state;
        */
        [disabled].noUi-connect,[disabled] .noUi-connect {
        background: #B8B8B8;
        }

        [disabled].noUi-origin,[disabled] .noUi-handle {
        cursor: not-allowed;
        }

        select {
            height: unset!important;
        }

        .select2-container .select2-search--inline .select2-search__field{
            font-size: .9rem;
            font-family: unset!important;
            height: 1.5rem;
        }

    </style>
@endsection
@section('content')



        <section class="page-section-ptb">
        {{-- <section class="page-section-ptb text-white" style="background: url(/assets/images/pattern/04.png) no-repeat 0 0; background-size: cover;"> --}}
            <div class="container">
              <div class="row  justify-content-center">
                <div class="col-md-8">
                    @if ( $user->chatrane )
                        @include('complete_profil.chatrane')
                    @else
                        @include('complete_profil.simple_user')
                    @endif
                </div>
              </div>
            </div>
          </section>


@endsection




@section('scripts')

    {{-- {!! JsValidator::formRequest('App\Http\Requests\CompleteUserProfileRequest', '#form') !!} --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script src="/assets/js/autocompleteaddress.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqlPdfW26JFjMKo5NPfC0Y6pcOvVeTATM&callback=initMap&libraries=places" async defer></script>


    <script>


        function get_flag_id(idioma){
            var id = '';
            switch (idioma.id) {
                    case 'Anglais':
                        id = 'United_Kingdom';
                    break;

                    case 'Espagnol':
                        id = 'Spain';
                    break;

                    case 'Ladino':
                        id = 'Spain';
                    break;

                    case 'Russe':
                        id = 'Russian_Federation';
                    break;

                    case 'Français':
                        id = 'France';
                    break;

                    case 'Portuguais':
                        id = 'Portugal';
                    break;

                    case 'Italien':
                        id = 'Italy';
                    break;

                    case 'Français':
                        id = 'France';
                    break;

                    default:
                        id = 'Israel';
                    break;
            }

            return id;
        }

        $('#code_chatrane').change(function () {

            var valeur = $(this).val();
            $('input[name="code_chatrane"]').val(valeur);

        });

        $('input[name="a_chatrane"]').change(function(){
            if( $(this).val() == 'Non' ){
                $('#a_chatrane_div').show();
                $('#a_chatrane_div_2').hide();
            }else{
                $('#a_chatrane_div_2').show();
                $('#a_chatrane_div').hide();
            }

        });


        $('input[name="tarif_0"]').change(function(){
            if( $(this).val() == 0 ){
                $('#tarifs').hide();
                $('#benevolat').show();

            }else{
                $('#tarifs').show();
                $('#benevolat').hide();
            }
        });


        $('input[name="handicap_choix"]').change(function(){
            if( $(this).val() == 0 ){
                $('#handicap').hide();
            }else{
                $('#handicap').show();
            }
        });





        $(document).ready(function() {


            $('#handicap').hide();
            $('#a_chatrane_div').hide();
            $('#a_chatrane_div_2').hide();


            if($('#a_chatrane_1').is(':checked')){
                $('#a_chatrane_div_2').show();
            }


            $('#tarifs').hide();
            $('#no-chatrane').hide();

          //   $('#form').validate({
          //       onfocusout: function (element) {
          //           $(element).valid();
          //       },
          //       rules: {
          //           name: 'required',
          //           telephone: 'required',

          //       },
          //       messages: {
          //           name: 'Requis',
          //           telephone: 'Requis',
          //       }
          // });



            $('#type_celibataire').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#pratique_religieuse').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#modalites_paiement').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#contact_celibataires').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#langues_profils').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#contacts').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });

            $('#orientations_religieuses_profils').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });

            $('#pays_profils').select2({
                    placeholder: "Choisir",
                    allowClear: true
            });


            $('#type').select2({
                placeholder: "Quel est votre type réligieux?",
                allowClear: true
             });

            $("#langues").select2({
                templateResult: function (idioma) {
                    var id = get_flag_id(idioma);
                    var $span = $("<span><img src='https://www.free-country-flags.com/countries/"+id+"/1/tiny/" + id + ".png'/> " + idioma.text + "</span>");
                    return $span;
                },
                templateSelection: function (idioma) {
                    var id = get_flag_id(idioma);
                    var $span = $("<span><img src='https://www.free-country-flags.com/countries/"+id+"/1/tiny/" + id + ".png'/> " + idioma.text + "</span>");
                    return $span;
                },
                placeholder: "Quelles langues parlez-vous?",
                allowClear: true
            });


            $("#services").select2({
                placeholder: "Vos services",
                allowClear: true
            });




          $("#langues_profils").select2({
            templateResult: function (idioma) {
                var id = get_flag_id(idioma);
                var $span = $("<span><img src='https://www.free-country-flags.com/countries/"+id+"/1/tiny/" + id + ".png'/> " + idioma.text + "</span>");
                return $span;
            },
            templateSelection: function (idioma) {
                var id = get_flag_id(idioma);
                var $span = $("<span><img src='https://www.free-country-flags.com/countries/"+id+"/1/tiny/" + id + ".png'/> " + idioma.text + "</span>");
                return $span;
            },
            placeholder: "Quelles langues parlez-vous?",
            allowClear: true
          });

        });



        function readURL(input) {
            var id = $(input).attr("id");
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#' + id + '_img')
                        .attr('src', e.target.result);
                        // .width(150)
                        // .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }





    </script>

@endsection
