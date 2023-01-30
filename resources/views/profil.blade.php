@extends('layouts.profile')

@section('styles')
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
<div class="row">
    <div class="col-md-12">
       <div id="content" class="content content-full-width">
          <!-- begin profile -->
          <div class="profile">
             <div class="profile-header">
                <!-- BEGIN profile-header-cover -->
                <div class="profile-header-cover" style="background-image: url('{{ assets_base() }}{{ $user->photo_1 }}')"></div>
                <!-- END profile-header-cover -->
                <!-- BEGIN profile-header-content -->
                <div class="profile-header-content">
                   <!-- BEGIN profile-header-img -->
                   <div class="profile-header-img">
                      <img src="{{ assets_base() }}{{ $user->photo_1 }}" alt="">
                   </div>
                   <!-- END profile-header-img -->
                   <!-- BEGIN profile-header-info -->
                   <div class="profile-header-info">
                    <h4 class="m-t-10 m-b-5" style="text-transform: none;"> {{ $user->prenom }} {{ $user->name }}

                       <sup>
                           <small>
                                {{ $user->ville }}, {{ $user->pays }}
                           </small>

                       </sup>


                    </h4>
                        <p class="m-b-10">
                            {{ $user->age }} {{ __('ans')  }}

                            @if ( $user->chatrane == 1 && $user->tarif_prise_en_charge == 0 && $user->tarif_chidour == 0 )


                            <span style="font-size: 1rem;" class="badge badge-success">{{ __('Bénévole') }}</span>


                            @endif


                        </p>


                      @if ($user->id == Auth::user()->id || Auth::user()->admin)

                        @php
                            $complete_profil = '/complete_profil';

                            if( Auth::user()->admin ){
                                $complete_profil = '/complete_profil?user_id=' . $user->id;
                            }

                        @endphp
                        <a href="{{ $complete_profil }}" class="btn btn-sm  mb-2 bg-secondary text-white"> <i class="fa fa-pencil"></i> {{ __('Modifier') }}</a>
                      @endif

                   </div>
                   <!-- END profile-header-info -->
                </div>
                <!-- END profile-header-content -->
                <!-- BEGIN profile-header-tab -->
                <ul class="profile-header-tab nav nav-tabs">
                    <li class="nav-item">
                        <a href="#profile-about_1" class="nav-link" data-toggle="tab">{{ __('A PROPOS') }}</a>

                        @if ($user->chatrane)
                            <span style="font-size: 1rem; position: absolute; right: 1rem; top: 15px;" class="badge badge-success">Shadhanite/Shadhan</span>
                        @endif

                    </li>

                    @if ($user->chatrane == 1)
                        <li class="nav-item"><a href="#chatrane-users_1" class="nav-link" data-toggle="tab">{{ __('LISTE DES MEMBRES') }} ({{ $chatrane_users->total() }}) </a></li>
                    @endif

                   @if ($user->chatrane == 0)
                    <li class="nav-item"><a href="#profile-photos_1" class="nav-link" data-toggle="tab">{{ __('PHOTOS') }}</a></li>
                    <li class="nav-item">

                        @if ($user->check_chidour() > 0)
                            <a href="/chidours" class="btn btn-primary">

                                @if (Auth::user()->chatrane == 1)
                                    {{ __('Les Chidoukh de mes membres') }}
                                @else
                                    {{ __('Mon Chidoukh en cours') }}
                                @endif
                            </a>
                        @else
                            @if (Auth::user()->id !=  $user->id)

                                <form action="{{ route('demander_chidour') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="origine" />
                                    <input type="hidden" value="{{ $user->id }}" name="cible" />
                                    <button class="btn btn-primary btn-sm nav-link"type="submit">{{ __('DEMANDER UN CHIDOUH') }}</button>
                                </form>

                            @endif

                        @endif

                    </li>
                   @endif

                    @if ( Auth::user()->admin )
                        <li class="nav-item"><a href="#admin-notes" class="nav-link" data-toggle="tab">{{ __('MES NOTES') }}</a></li>
                    @endif


                </ul>
                <!-- END profile-header-tab -->
             </div>
          </div>
          <!-- end profile -->
          <!-- begin profile-content -->
          <div class="profile-content">


             <!-- begin tab-content -->
             <div class="tab-content p-0">

                @include('profile-tabs.a-propos')

                @if ($user->chatrane == 1)
                    @include('profile-tabs.chatrane_users')
                @endif

                @if ($user->chatrane == 0)
                    @include('profile-tabs.photos')
                @endif

                @if ( Auth::user()->admin )
                    @include('profile-tabs.notes')
                @endif



             </div>
             <!-- end tab-content -->
          </div>
          <!-- end profile-content -->


       </div>
    </div>
 </div>



 @if (Auth::user()->chatrane == 1)
    <div id="avis">
        @comments([
            'model' => $user,
            'perPage' => 15
        ])
    </div>
 @endif

@endsection

@section('scripts')

<script>

    $(document).ready(function(){
        $('#copie-alert').hide();
        $('#copie-alert-register').hide();
    });

    $('#copie-code-chatrane').click(function(){
        copyToClipboard(document.getElementById("url_chatrane"));
        $('#copie-alert').show().delay(500).fadeOut();
    });

    $('#copie-code-chatrane-register').click(function(){
        copyToClipboard(document.getElementById("url_chatrane_register"));
        $('#copie-alert-register').show().delay(500).fadeOut();
    });




    function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }

        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }
        return succeed;
    }

</script>

{{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/mwsgfn6u2ubwh2vlr5dc190xldq5vuxrbsmb6kqyrnlulif0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300,
        directionality : $('#direction').val(),
        language : $('#langue').val()
    });
</script>



@endsection
