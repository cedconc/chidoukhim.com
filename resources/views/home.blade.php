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

    <style type="text/css">

        .card-container {
            padding: 100px 0px;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .profile-card-1 {
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            background-image: url(../img/profile-bg-1.jpg);
            background-position: center;
            padding-top: 100px;
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            max-width: 300px;
        }

        .profile-card-1 .profile-content {
            position: relative;
            background-color: #FFF;
            padding: 70px 20px 20px 20px;
            text-align: center;
        }

        .profile-card-1 .profile-img {
            position: absolute;
            height: 100px;
            left: 0px;
            right: 0px;
            z-index: 10;
            top: -50px;
            transition: all 0.25s linear;
            transform-style: preserve-3d;
        }

        .profile-card-1 .profile-img img {
            height: 100px;
            margin: auto;
            border-radius: 50%;
            border: 5px solid #FFF;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-card-1 .profile-name {
            font-size: 18px;
            font-weight: bold;
            color: #021830;
        }

        .profile-card-1 .profile-address {
            color: #777;
            font-size: 12px;
            margin: 0px 0px 15px 0px;
        }

        .profile-card-1 .profile-description {
            font-size: 13px;
            padding: 5px 10px;
            color: #777;
        }

        .profile-card-1 .profile-icons .fa {
            margin: 5px;
            color: #777;
        }

        .profile-card-1:hover {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
        }

        .profile-card-1:hover .profile-img {
            transform: rotateY(180deg);
        }

        .profile-card-2 {
            max-width: 300px;
            background-color: #FFF;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            border-radius: 10px;
        }

        .profile-card-2 img {
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-name {
            position: absolute;
            left: 30px;
            bottom: 70px;
            font-size: 30px;
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-icons {
            position: absolute;
            bottom: 30px;
            right: 30px;
            color: #FFF;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-username {
            position: absolute;
            bottom: 50px;
            left: 30px;
            color: #FFF;
            font-size: 13px;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-2:hover img {
            filter: grayscale(100%);
        }

        .profile-card-2:hover .profile-name {
            bottom: 80px;
        }

        .profile-card-2:hover .profile-username {
            bottom: 60px;
        }

        .profile-card-2:hover .profile-icons {
            right: 40px;
        }

        .profile-card-3 {
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 25px 15px;
        }

        .profile-card-3 .profile-name {
            font-weight: bold;
            color: #21304e;
        }

        .profile-card-3 .profile-location {
            color: #999;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-card-3 img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            margin: 10px auto;
            border-radius: 50%;
            transition: all linear 0.25s;
        }

        .profile-card-3 .profile-description {
            font-size: 13px;
            color: #777;
            padding: 10px;
        }

        .profile-card-3 .profile-icons {
            margin: 15px 0px;
        }

        .profile-card-3 .profile-icons .fa {
            color: #fe455a;
            margin: 0px 5px;
        }

        .profile-card-3:hover img {
            height: 110px;
            width: 110px;
            margin: 5px auto;
        }

        .profile-card-4 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-4 img {
            transition: all 0.25s linear;
        }

        .profile-card-4 .profile-content {
            position: relative;
            padding: 15px;
            background-color: #FFF;
        }

        .profile-card-4 .profile-name {
            font-weight: bold;
            position: absolute;
            left: 0px;
            right: 0px;
            top: -70px;
            color: #FFF;
            font-size: 17px;
        }

        .profile-card-4 .profile-name p {
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1.5px;
        }

        .profile-card-4 .profile-description {
            color: #777;
            font-size: 12px;
            padding: 10px;
        }

        .profile-card-4 .profile-overview {
            padding: 15px 0px;
        }

        .profile-card-4 .profile-overview p {
            font-size: 10px;
            font-weight: 600;
            color: #777;
        }

        .profile-card-4 .profile-overview h4 {
            color: #273751;
            font-weight: bold;
        }

        .profile-card-4 .profile-content::before {
            content: "";
            position: absolute;
            height: 20px;
            top: -10px;
            left: 0px;
            right: 0px;
            background-color: #FFF;
            z-index: 0;
            transform: skewY(3deg);
        }

        .profile-card-4:hover img {
            transform: rotate(5deg) scale(1.1, 1.1);
            filter: brightness(110%);
        }

        .profile-card-5 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 50px 15px 25px 15px;
        }

        .profile-card-5 img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            margin: 10px auto;
            border-radius: 50%;
            transition: all linear 0.25s;
            position: relative;
        }

        .profile-card-5::before {
            content: "";
            position: absolute;
            top: -60px;
            right: 0px;
            left: 0px;
            height: 170px;
            background-color: #4fb96e;
            transform: skewY(-20deg);
        }

        .profile-card-5 .profile-name {
            padding-top: 15px;
            font-weight: bold;
            color: #333;
        }

        .profile-card-5 .profile-designation {
            font-size: 13px;
            color: #777;
        }

        .profile-card-3 .profile-location {
            color: #999;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-card-5 .profile-description {
            font-size: 13px;
            color: #777;
            padding: 10px;
        }

        .profile-card-5 .profile-overview {
            padding: 15px 0px;
        }

        .profile-card-5 .profile-overview p {
            color: #777;
            font-size: 13px;
        }

        .profile-card-5 .profile-overview h2 {
            font-weight: bold;
            color: #1e2832;
        }

        .profile-card-5 .profile-icons .fa {
            margin: 7px;
            color: #4fb96e;
        }

        .profile-card-5:hover img {
            transform: rotate(-5deg);
        }

        .profile-card-6 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-6 img {
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-name {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 25px;
            font-weight: bold;
            color: #FFF;
            padding: 15px 20px;
            background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-position {
            position: absolute;
            color: rgba(255, 255, 255, 0.4);
            left: 30px;
            top: 100px;
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-overview {
            position: absolute;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
            color: #FFF;
            padding: 50px 0px 20px 0px;
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-overview h3 {
            font-weight: bold;
        }

        .profile-card-6 .profile-overview p {
            color: rgba(255, 255, 255, 0.7);
        }

        .profile-card-6:hover img {
            filter: brightness(80%);
        }

        .profile-card-6:hover .profile-name {
            padding-left: 25px;
            padding-top: 20px;
        }

        .profile-card-6:hover .profile-position {
            left: 40px;
        }

        .profile-card-6:hover .profile-overview {
            padding-bottom: 25px;
        }

        .profile-card-7 {
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-7 .profile-content {
            padding: 60px 30px 30px 30px;
            background-color: #FFF;
            position: relative;
        }

        .profile-card-7 .profile-content img {
            position: absolute;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            top: -40px;
            border: 5px solid #FFF;
        }

        .profile-card-7 .profile-content .profile-name {
            position: absolute;
            font-size: 17px;
            font-weight: bold;
            top: -35px;
            left: 125px;
            color: #FFF;
        }

        .profile-card-7 .profile-overview {
            padding: 5px 0px;
        }

        .profile-card-7 .profile-overview p {
            color: #777;
            font-size: 11px;
            font-weight: 600;
        }

        .profile-card-7 .profile-overview h5 {
            color: #142437;
            font-weight: bold;
        }

        .profile-card-8 {
            background: linear-gradient(#09121c, #36445a);
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            transition: all 0.25s linear;
        }

        .profile-card-8 .profile-name {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 25px;
            color: #58d683;
            font-size: 17px;
            font-weight: bold;
        }

        .profile-card-8 .profile-designation {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 50px;
            color: #FFF;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .profile-card-8 .profile-icons {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 80px;
            color: rgba(255, 255, 255, 0.7);
        }

        .profile-card-8 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-8:hover {
            transform: scale(1.05, 1.05);
        }

        .profile-card-9 {
            border-radius: 10px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 30px 15px;
            background-color: #FFF;
            transition: all 0.25s linear;
        }

        .profile-card-9 img {
            height: 120px;
            width: 120px;
            border-radius: 50%;
            margin: 10px auto;
        }

        .profile-card-9 .profile-name {
            font-size: 15px;
            color: #3249b9;
            font-weight: 600;
        }

        .profile-card-9 .profile-designation {
            font-size: 13px;
            color: #777;
        }

        .profile-card-9 .profile-description {
            padding: 10px;
            font-size: 13px;
            color: #777;
            margin: 15px 0px;
            background-color: #F1F2F3;
            border-radius: 5px;
        }

        .profile-card-9 a {
            padding: 10px 15px;
            background-color: #3249b9;
            color: #FFF;
            font-size: 11px;
            border-radius: 25px;
        }

        .profile-card-9:hover {
            transform: scale(1.05, 1.05);
        }

        .profile-card-10 {
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 30px 15px;
            background-color: #1f2124;
            color: #EEE;
        }

        .profile-card-10 img {
            margin: 10px auto;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid transparent;
            box-shadow: 0px 0px 0px 2px #64c17b;
            transition: all 0.25s linear;
        }

        .profile-card-10 .profile-name {
            color: #FFF;
            font-weight: bold;
            font-size: 17px;
        }

        .profile-card-10 .profile-location {
            font-size: 13px;
            opacity: 0.7;
        }

        .profile-card-10 .profile-description {
            padding: 10px;
            font-size: 13px;
        }

        .profile-card-10 .profile-icons .fa {
            color: #ffc75e;
            margin: 10px;
        }

        .profile-card-10:hover img {
            transform: scale(1.1);
        }

        .pagination{
            justify-content: center;
        }
    </style>
@endsection

@section('content')

<div class="text-left container">
    <a class="text-black" href="/"><i class="fa fa-home"></i>{{ __("Accueil") }}</a> / {{ __("Charte Chadrane") }}
</div>

<form action="{{ route('home') }}" method="GET">
    <section class="form-1 py-3" style="top: 0;">
        {{--


            Age

        --}}


            <div class="container">


                @if (Auth::user()->chatrane == 1)

                    <div class="row mb-3" style="">

                        <div class="col-md-12 text-center">
                            <a id="import-btn" class="btn btn-primary mb-3 text-white">{{ __('Importer des profils') }}</a>
                        </div>
                        <div class="col-md-12" id="import-form">
                            <div class="main-card mb-3 card">
                                <div class="card-body text-center">

                                        <form></form>
                                        <form method="POST"  action="{{ route('post_import') }}" class="text-center" enctype="multipart/form-data">
                                            @csrf
                                            <input class="" accept=".xlsx" name="fichier" id="fichier" type="file" required="" style="border: 1px dashed gray; padding: .5rem 1rem;">

                                            @error('fichier')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button type="submit" class="btn btn-success" style="padding: .5rem 1rem;">{{ _('Soumettre') }}</button>
                                            <br>
                                            <a href="{{ assets_base() }}/files/import.xlsx" class="text-danger font-weight-bold" target="_blank">{{ __('Cliquer ici pour télécharger le fichier modèle') }}</a>
                                        </form>



                                </div>
                            </div>

                        </div>
                    </div>

                @endif



                <div class="banner-form">

                    <div class="mt-2 col-md-12 text-center" style="color: #eee; font-size: 1rem; font-style: italic;">

                        <i class="fa fa-info-circle"></i>  {{ __("Vous pouvez lancer un tri sur un ou plusieurs criteres") }}

                     </div>

                <div class="row">



                    @if (Auth::user()->chatrane == 1)

                        <div class="mt-2 col-md-2">
                            <div class="form-group">


                                <select class="form-control" id="genre" name="genre">
                                    <option value="">{{ __('Genre') }}</option>
                                    <option value="">{{ __('Tout') }}</option>
                                    <option @if ($genre == 'Femme') selected @endif value="Femme">{{ __('Femme') }}</option>
                                    <option @if ($genre == 'Homme') selected @endif value="Homme">{{ __('Homme') }}</option>
                                </select>
                            </div>
                        </div>

                    @endif

                    <div class="mt-2 col-md-2">
                    <div class="form-group">

                        <select name="niveau_religieux" class="form-control" id="niveau_religieux">
                            <option selected disabled>{{ __('Niveau réligieux') }}</option>

                            <option value="Dati léoumi" @if($niveau_religieux == 'Dati léoumi') selected @endif>{{ __('Dati léoumi') }}</option>
                            <option value="Dati light" @if($niveau_religieux == 'Dati light') selected @endif>{{ __('Dati light') }}</option>
                            <option value="Harédi" @if($niveau_religieux == 'Harédi') selected @endif>{{ __('Harédi') }}</option>
                            <option value="Hassid" @if($niveau_religieux == 'Hassid') selected @endif>{{ __('Hassid') }}</option>
                            <option value="Hiloni" @if($niveau_religieux == 'Hiloni') selected @endif>{{ __('Hiloni') }}</option>
                            <option value="Massorati" @if($niveau_religieux == 'Massorati') selected @endif>{{ __('Massorati') }}</option>


                            <option value="Chassidish" @if($niveau_religieux == 'Chassidish') selected @endif>{{ __('Chassidish') }}</option>
                            <option value="Hassiddique - Breslev" @if($niveau_religieux == 'Hassiddique - Breslev') selected @endif>{{ __('Hassiddique - Breslev') }}</option>
                            <option value="Hassiddique - Habad" @if($niveau_religieux == 'Hassiddique - Habad') selected @endif>{{ __('Hassiddique - Habad') }}</option>
                            <option value="Hassiddique - Autres" @if($niveau_religieux == 'Hassiddique - Autres') selected @endif>{{ __('Hassiddique - Autres') }}</option>
                            <option value="Shlihout, port du Sirtouk" @if($niveau_religieux == 'Shlihout, port du Sirtouk') selected @endif>{{ __('Shlihout, port du Sirtouk') }}</option>
                            <option value="Juste sympathisant Habad" @if($niveau_religieux == 'Juste sympathisant Habad') selected @endif>{{ __('Juste sympathisant Habad') }}</option>
                            <option value="Heimish" @if($niveau_religieux == 'Heimish') selected @endif>{{ __('Heimish') }}</option>
                            <option value="Laïque" @if($niveau_religieux == 'Laïque') selected @endif>{{ __('Laïque') }}</option>
                            <option value="Lubavitch" @if($niveau_religieux == 'Lubavitch') selected @endif>{{ __('Lubavitch') }}</option>
                            <option value="Orthodoxe - Liberal" @if($niveau_religieux == 'Orthodoxe - Liberal') selected @endif>{{ __('Orthodoxe - Liberal') }}</option>
                            <option value="Orthodoxe - Machmir" @if($niveau_religieux == 'Orthodoxe - Machmir') selected @endif>{{ __('Orthodoxe - Machmir') }}</option>
                            <option value="Orthodoxe - Moderne" @if($niveau_religieux == 'Orthodoxe - Moderne') selected @endif>{{ __('Orthodoxe - Moderne') }}</option>
                            <option value="Toradig" @if($niveau_religieux == 'Toradig') selected @endif>{{ __('Toradig') }}</option>
                            <option value="Traditionaliste" @if($niveau_religieux == 'Traditionaliste') selected @endif>{{ __('Traditionaliste') }}</option>
                            <option value="Yeshivish" @if($niveau_religieux == 'Yeshivish') selected @endif>{{ __('Yeshivish') }}</option>



                        </select>


                    </div>
                    </div>
{{--
                    <div class="mt-2 col-md-2">
                    <div class="form-group">

                        <select name="etude" id="etude" class="form-control">
                            <option value="" >{{ __("Niveau d'étude") }}</option>
                            <option value="">{{ __('Tout') }}</option>
                            <option @if ($etude == 'Niveau collège') selected @endif value="Niveau collège">{{ __('Niveau collège') }}</option>
                            <option @if ($etude == 'Niveau BAC') selected @endif value="Niveau BAC">{{ __('Niveau BAC') }}</option>
                            <option @if ($etude == 'Niveau universitaire') selected @endif value="Niveau universitaire">{{ __('Niveau universitaire') }}</option>

                        </select>

                    </div>
                    </div> --}}

                    <div class="mt-2 col-md-2">
                        <div class="form-group">


                            <select name="pay" id="pays" class="form-control">
                                <option selected value="">{{ __("Pays") }}</option>
                                @foreach ($pays as $item)
                                    <option value="{{ $item->pays }}" @if ($pay == $item->pays) selected @endif>{{ $item->pays }}</option>
                                @endforeach

                            </select>


                            <div id="ville-div">

                                <br />

                                <select name="ville" id="ville" class="form-control">
                                    <option selected disabled>{{ __("Ville") }}</option>
                                    @foreach ($villes as $item)
                                        <option value="{{ $item->ville }}" @if ($ville == $item->ville) selected @endif>{{ $item->ville }}</option>
                                    @endforeach

                                </select>

                            </div>



                        </div>
                    </div>


                    <div class="mt-2 col-md-2">
                        <div class="form-group">

                            <select class="form-control" id="langue" name="langue" >
                                <option selected disabled>{{ __("Langue parlée") }}</option>
                                <option value="Hébreu" @if($langue == 'Hébreu') selected @endif>{{ _('Hébreu') }}</option>
                                <option value="Anglais" @if($langue == 'Anglais') selected @endif >{{ __('Anglais') }}</option>
                                <option value="Français" @if($langue == 'Français') selected @endif >{{ _('Français') }}</option>
                                <option value="Espagnol" @if($langue == 'Espagnol') selected @endif >{{ _('Espagnol') }}</option>
                                <option value="Italien" @if($langue == 'Italien') selected @endif >{{ _('Italien') }}</option>
                                <option value="Portuguais" @if($langue == 'Portuguais') selected @endif >{{ _('Portuguais') }}</option>
                                <option value="Russe" @if($langue == 'Russe') selected @endif >{{ _('Russe') }}</option>
                                {{-- <option value="Ladino" >{{ _('Ladino') }}</option>
                                <option value="Yiddish" >{{ _('Yiddish') }}</option>
                                <option value="Farsi" >{{ _('Farsi') }}</option> --}}

                        </select>

                        </div>
                    </div>

{{--
                    <div class="mt-2 col-md-2">
                    <div class="form-group">
                        <select name="profession" class="form-control" id="profession">
                            <option selected disabled>{{ __('Profession') }}</option>
                            @foreach ($professions as $item)
                                <option value="{{ $item->profession }}" @if($profession == $item->profession) selected @endif>{{ __($item->profession) }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div> --}}



                    <div class="mt-2 col-md-2">
                    <div class="form-group">

                        <select name="statut_marital" id="statut_marital" class="form-control">
                            <option selected disabled>{{ __("Situation familiale") }}</option>
                            <option @if ($statut_marital == 'Célibataire') selected @endif  value="Célibataire">{{ __('Célibataire') }}</option>
                            <option @if ($statut_marital == 'Divorcé') selected @endif  value="Divorcé">{{ __('Divorcé') }}</option>
                            <option @if ($statut_marital == 'Veuf') selected @endif  value="Veuf">{{ __('Veuf') }}</option>
                        </select>

                    </div>
                    </div>

{{--
                    <div class="mt-2 col-md-3">
                    <div class="form-group">

                        <input type="number" value="{{ $nb_enfants }}" name="nb_enfants" id="nb_enfants" class="form-control" placeholder="{{ __("Nombre d'enfants") }}">

                        <label style="font-size: 0.8rem; margin-top: -1rem;" for=""><sup>*</sup>{{ "Nb. enfants à la maison" }}</label>

                    </div>
                    </div>
 --}}


{{--
                    <div class="mt-2 col-md-5">
                    <div class="form-group">
                        <select name="delocaliser" id="delocaliser" class="form-control">
                            <option value="" >{{ __("Volonté de se délocaliser pour suivre le conjoint") }}</option>
                            <option value="">{{ __('Tout') }}</option>
                            <option @if ($delocaliser == 'Oui') selected @endif  value="Oui">{{ __('Oui') }}</option>
                            <option  @if ($delocaliser == 'Non') selected @endif value="Non">{{ __('Non') }}</option>
                        </select>
                    </div>
                    </div> --}}


                    {{-- <div class="mt-2 col-md-2">
                        <div class="form-group">
                            <input type="text" value="{{ $a_propos }}" name="a_propos" id="a_propos" class="form-control" placeholder="{{ __("Traits de caractère") }}">
                        </div>
                    </div> --}}



                    {{-- <div class="mt-2 col-md-2">
                    <div class="form-group">
                        <input min="18" type="number" value="{{ $age_min }}" name="age_min" id="age_min" class="form-control" placeholder="{{ __("Age min") }}">
                    </div>
                    </div>


                    <div class="mt-2 col-md-2">
                        <div class="form-group">
                            <input max="120" type="number" value="{{ $age_max }}" name="age_max" id="age_max" class="form-control" placeholder="{{ __("Age max") }}">
                        </div>
                    </div> --}}

                    <div class="mt-2 col-md-2 row">


                        <div class="col-sm-12">
                          <div id="slider-range"></div>
                        </div>

                        <div class="col-md-6 caption text-white font-weight-bold">
                          <strong>Min:</strong> <span id="slider-range-value1">{{ $age_min }}</span>
                        </div>
                        <div class="col-md-6 caption text-white">
                          <strong>Max:</strong> <span id="slider-range-value2">{{ $age_max }}</span>
                        </div>

                        <label style="width: 100%;" class="text-white text-center" for="">{{ __("Intervalle d'age") }}</label>
                        <div class="col-sm-12">



                                  <input type="hidden" name="age_min" id="age-min" value="{{ $age_min }}">
                                  <input type="hidden" name="age_max" id="age-max" value="{{ $age_max }}">




                        </div>
                    </div>


                    <div class="mt-2 col-md-12 row">
                        <div class="col-md-6 text-left">
                            <button type="button" id="reset-btn" class="btn btn-danger full-rounded animated right-icn">{{ __('Réinitialiser') }}</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="button btn-lg btn-theme full-rounded animated right-icn"><span> {{ __('Valider') }} <i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>
                        </div>
                    </div>













                    @if (Auth::user()->chatrane == 1)
                        <div class="mt-2 col-md-2">

                            <label for="my_profil" style="color: #fff;">
                                <span class="mr-2">{{ __("Aficher que mes profils") }}</span>
                                <input @if ($my_profil == 'Oui') checked="checked" @endif type="checkbox" name="my_profil" id="my_profil" value="Oui" class="" />
                            </label>
                        </div>

                    @endif







                </div>
                </div>
            </div>

    </section>

</form>





<div class="container mt-10 text-center">

        <div class="row mt-2 mb-2">

            <div class="col-md-12 text-center" style="font-size: 2rem; font-weight: 600;">
               <i class="fa fa-search"></i> {{ $users->total() }} {{ __('Résultat(s) visible(s) de tous') }}
               <br />



            </div>

            <div class="col-md-12 text-center font-weight-bold">{{ __("3276 visible(s) que des Shadhanites") }}</div>

        </div>

	<div class="row">


        @foreach ($users as $user)
            <a target="_blank" href="/user/{{ $user->slug }}" class="col-md-4">

                <div class="profile-card-4 text-center" style="background-color: #eee;">
                    <img style="height: 15rem; width: auto;" src="{{ assets_base() }}{{ $user->photo_1 }}" class="img img-responsive" alt="">
                    <div class="profile-content">
                        <div class="profile-name" style="background-color: rgba(0,0,0,0.5); padding-top: 5px;">{{ $user->name }} {{ $user->prenom }}
                            <sup>
                                @foreach ($user->langues_ids as $item)
                                    <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                                @endforeach

                            </sup>

                            <p> <small> {{ $user->age }} {{ __('ans')  }} -  {{ $user->ville }}, {{ $user->pays }} </small> </p>

                        </div>
                        <div style="height: 4rem;" class="profile-description"> {{ $user->brief }} </div>
                        <div class="row">

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">
                                        @if (is_null($user->ethnicite))
                                            -
                                        @else
                                            {{ $user->ethnicite }}
                                        @endif
                                    </p>

                                </div>
                            </div>

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">

                                        @if (is_null($user->taille))
                                            -
                                        @else
                                            {{ $user->taille }} cm
                                        @endif
                                    </p>

                                </div>
                            </div>

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">

                                        @if (is_null($user->silhouette))
                                            -
                                        @else
                                            {{ $user->silhouette }}
                                        @endif

                                    </p>

                                </div>
                            </div>



                            <p class="text-black mb-0 text-center" style="width: 100%;">
                                <strong> {{ $user->nb_chidours }} {{ __('Chidoukh') }}(s) </strong>
                                <br>
                                @foreach ($user->get_orientation_religieuse() as $type)
                                    @if ($type != '')
                                        <span class="mr-1 ml-1 pl-2 pr-2" style="background-color: #eee; border-radius: 5px;">  {{ $type }} </span>
                                    @endif

                                @endforeach


                            </p>

                        </div>
                    </div>
                </div>
            </a>
        @endforeach



	</div>

    <div class="row">
        <div class="col-md-12 text-center">
            {{ $users->links("pagination::bootstrap-4") }}
        </div>

    </div>

</div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#import-form').hide();
            $('#ville-div').hide();
        });

        $('#pays').change(function() {

            var pays = $(this).val();

            $.ajax({
            url: "/get_villes",
            data:{
                pays: pays,
            },
            type:'GET',
            success:function(response){

                $('#ville').html(response);
                $('#ville-div').show();
            }
        });

        });

        $('#import-btn').click(function() {
            $('#import-form').show();
        });

        $('#reset-btn').click(function() {
            $('#ville').val(null);
            $('#niveau_religieux').val(null);
            $('#langue').val(null);
            $('#statut_marital').val(null);
        });
    </script>
@endsection
