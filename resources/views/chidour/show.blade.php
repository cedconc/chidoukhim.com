@extends('layouts.profile')

@section('styles')

    <style>
        * { box-sizing: border-box; }


        .rating {
        display: flex;
        width: 100%;
        justify-content: center;
        overflow: hidden;
        flex-direction: row-reverse;
        position: relative;
        }

        .rating-0 {
        filter: grayscale(100%);
        }

        .rating > input {
        display: none;
        }

        .rating > label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-top: auto;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        transition: .3s;
        }

        .rating > input:checked ~ label,
        .rating > input:checked ~ label ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }


        .rating > input:not(:checked) ~ label:hover,
        .rating > input:not(:checked) ~ label:hover ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        }

        .emoji-wrapper {
        width: 100%;
        text-align: center;
        height: 100px;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        }

        .emoji-wrapper:before,
        .emoji-wrapper:after{
        content: "";
        height: 15px;
        width: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
        }

        .emoji-wrapper:before {
        top: 0;
        background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
        }

        .emoji-wrapper:after{
        bottom: 0;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
        }

        .emoji {
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: .3s;
        }

        .emoji > svg {
        margin: 15px 0;
        width: 70px;
        height: 70px;
        flex-shrink: 0;
        }

        #rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
        #rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
        #rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
        #rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
        #rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

        .feedback {
        max-width: 360px;
        }

    </style>

@endsection


@section('content')
<div class="row" style="background-color: #fff;">

    @if ($chidour->marie)
        <div class="col-md-12 text-center alert alert-success alert-dismissible">
            {{ __('Ce chidouh a aboutti a un mariage') }}
        </div>
    @endif


    <div class="col-sm-6">

        <table class="table table-borderless table-striped">
            <tr>
                <td>
                    <strong>{{ __('Shadhanite/Shadhan') }} : </strong>
                    {{ $chatrane_origine->prenom }} {{ $chatrane_origine->name }}
                    <sup>
                        @foreach ($chatrane_origine->langues_ids() as $item)
                            <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                        @endforeach

                    </sup>
                </td>

                @if ( Auth::user()->chatrane == 1 || Auth::user()->code_chatrane == $chatrane_origine->slug )
                    <td>

                        <form class="text-center" action="{{ route('contacter') }}" method="post">

                            @csrf
                            <input type="hidden" name="user_id" value="{{ $chatrane_origine->id }}">
                            @if (Auth::user()->id != $chatrane_origine->id)
                                <button type="submit" class="p-2 btm btn-secondary" style="font-size: 1rem;"><i class="fa fa-envelope"></i> {{ __('Contacter') }}</button>
                            @endif

                        </form>


                    </td>

                @endif


            </tr>

            @if ($chidour->marie && Auth::user()->admin)
                <tr>
                    <td> <h6>{{ __("Laissez une évaluation pour ce Shadhanite/Shadhan") }}</h6> </td>
                    <td>

                        <form class="rating-form" action="{{ route('post_rating') }}" method="post">
                            @csrf
                            <input type="hidden" name="chatrane_id" value="{{ $chatrane_origine->id }}">
                            @php
                                $total_ratings = $chatrane_origine->ratings()->count();

                                $ratings = $chatrane_origine->ratings();

                                $quantity = $ratings->count();

                                $total = $ratings->selectRaw('SUM(rating) as total')->pluck('total');
                                $vrai_total = 0;
                                foreach ($total as $t) {
                                    $vrai_total = $t;
                                }
                                $vrai_total = intval($vrai_total);

                                $average = 0;

                                if ($quantity != 0) {
                                    $average = ceil ($vrai_total / $quantity);
                                }


                            @endphp



                            <div class="container">
                                <div class="feedback">
                                    <div class="rating">
                                        <input type="radio" class="ratings-1" name="ratings" id="rating-5" value="5" @if( $average == 5 ) checked @endif>
                                        <label for="rating-5"></label>
                                        <input type="radio" class="ratings-1" name="ratings" id="rating-4" value="4" @if( $average == 4 ) checked @endif>
                                        <label for="rating-4"></label>
                                        <input type="radio" class="ratings-1" name="ratings" id="rating-3" value="3" @if( $average == 3 ) checked @endif>
                                        <label for="rating-3"></label>
                                        <input type="radio" class="ratings-1" name="ratings" id="rating-2" value="2" @if( $average == 2 ) checked @endif>
                                        <label for="rating-2"></label>
                                        <input type="radio" class="ratings-1" name="ratings" id="rating-1" value="1" @if( $average == 1 ) checked @endif>
                                        <label for="rating-1"></label>

                                    </div>
                                </div>
                            </div>

                        </form>

                    </td>
                </tr>
            @endif



        </table>

    </div>



    <div class="col-sm-6">

        <table class="table table-borderless table-striped">
            <tr>
                <td>
                    <strong>{{ __('Shadhanite/Shadhan') }} : </strong>
                    {{ $chatrane_cible->prenom }} {{ $chatrane_cible->name }}
                    <sup>
                        @foreach ($chatrane_cible->langues_ids() as $item)
                            <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                        @endforeach

                    </sup>
                </td>

                @if ( Auth::user()->chatrane == 1 || Auth::user()->code_chatrane == $chatrane_cible->slug )
                    <td>
                        <form class="text-center" action="{{ route('contacter') }}" method="post">

                            @csrf
                            <input type="hidden" name="user_id" value="{{ $chatrane_cible->id }}">
                            @if (Auth::user()->id != $chatrane_cible->id)
                                <button type="submit" class="p-2 btm btn-secondary" style="font-size: 1rem;"><i class="fa fa-envelope"></i> {{ __('Contacter') }}</button>
                            @endif

                        </form>


                    </td>


                @endif


            </tr>


            @if ($chidour->marie && Auth::user()->admin)
                <tr>
                    <td> <h6>{{ __("Laissez une évaluation pour ce Shadhanite/Shadhan") }}</h6> </td>
                    <td>

                        <form class="rating-form" action="{{ route('post_rating') }}" method="post">
                            @csrf
                            <input type="hidden" name="chatrane_id" value="{{ $chatrane_cible->id }}">
                            @php
                                $total_ratings = $chatrane_cible->ratings()->count();

                                $ratings = $chatrane_cible->ratings();

                                $quantity = $ratings->count();

                                $total = $ratings->selectRaw('SUM(rating) as total')->pluck('total');
                                $vrai_total = 0;
                                foreach ($total as $t) {
                                    $vrai_total = $t;
                                }
                                $vrai_total = intval($vrai_total);

                                $average = 0;

                                if ($quantity != 0) {
                                    $average = ceil ($vrai_total / $quantity);
                                }


                            @endphp



                            <div class="container">
                                <div class="feedback">
                                    <div class="rating">
                                        <input type="radio" name="ratings" id="rating-6" value="5" @if( $average == 5 ) checked @endif>
                                        <label for="rating-6"></label>
                                        <input type="radio" name="ratings" id="rating-7" value="4" @if( $average == 4 ) checked @endif>
                                        <label for="rating-7"></label>
                                        <input type="radio" name="ratings" id="rating-8" value="3" @if( $average == 3 ) checked @endif>
                                        <label for="rating-8"></label>
                                        <input type="radio" name="ratings" id="rating-9" value="2" @if( $average == 2 ) checked @endif>
                                        <label for="rating-9"></label>
                                        <input type="radio" name="ratings" id="rating-10" value="1" @if( $average == 1 ) checked @endif>
                                        <label for="rating-10"></label>

                                    </div>
                                </div>
                            </div>

                        </form>

                    </td>
                </tr>
            @endif




        </table>

    </div>


    <div class="row col-md-12">



        @if ( Auth::user()->id == $chidour->chatrane_origine && is_null($chidour->acceptation_origine)  )
            <div class="col-md-6 text-center mb-3">
                <a href="/accept_chidour/origine/{{ $id_chidour }}" class="btn btn-success">{{ __('Accepter Chidouh') }}</a> {{ __('OU') }} <a href="/refuse_chidour/origine/{{ $id_chidour }}" class="btn btn-danger">{{ __('Refuser Chidouh') }}</a>
            </div>
        @else

            @if( $chidour->acceptation_origine == 1 || is_null($chidour->acceptation_origine) )

                @if ($chidour->acceptation_origine == 1)
                    <div class="col-md-6 text-center mb-3">
                        <span class="p-2 badge badge-success" style="font-size: 1rem;"> <i class="fa fa-thumbs-up"></i> {{ __('Chidouh accepté') }}</span>
                    </div>
                @else
                    <div class="col-md-6 text-center mb-3">
                        <span class="p-2 badge badge-info" style="font-size: 1rem;"> <i class="fa fa-ellipsis-h"></i> {{ __('Chidouh en attente') }}</span>
                    </div>
                @endif



            @else
                <div class="col-md-6 text-center mb-3">
                    <span class="p-2 badge badge-danger" style="font-size: 1rem;"> <i class="fa fa-thumbs-down"></i> {{ __('Chidouh refusé') }}</span>
                </div>
            @endif

        @endif


        @if ( Auth::user()->id == $chidour->chatrane && is_null($chidour->acceptation_cible) )
            <div class="col-md-6 text-center mb-3">
                <a href="/accept_chidour/cible/{{ $id_chidour }}" class="btn btn-success">{{ __('Accepter Chidouh') }}</a> {{ __('OU') }} <a href="/refuse_chidour/cible/{{ $id_chidour }}" class="btn btn-danger">{{ __('Refuser Chidouh') }}</a>
            </div>


        @else

            @if( $chidour->acceptation_cible == 1 || is_null($chidour->acceptation_cible))

                @if ($chidour->acceptation_cible == 1)
                    <div class="col-md-6 text-center mb-3">
                        <span class="p-2 badge badge-success" style="font-size: 1rem;"> <i class="fa fa-thumbs-up"></i> {{ __('Chidouh accepté') }}</span>
                    </div>
                @else
                    <div class="col-md-6 text-center mb-3">
                        <span class="p-2 badge badge-info" style="font-size: 1rem;"> <i class="fa fa-ellipsis-h"></i> {{ __('Chidouh en attente') }}</span>
                    </div>
                @endif




            @else
                <div class="col-md-6 text-center mb-3">
                    <span class="p-2 badge badge-danger" style="font-size: 1rem;"> <i class="fa fa-thumbs-down"></i> {{ __('Chidouh refusé') }}</span>
                </div>
            @endif

        @endif
    </div>





    <div class="col-md-6">
       <div id="content" class="content content-full-width">
          <!-- begin profile -->
          <div class="profile">
             <div class="profile-header">
                <!-- BEGIN profile-header-cover -->
                <div class="profile-header-cover" style="background-image: url('{{ assets_base() }}{{ $origine->photo_1 }}')"></div>
                <!-- END profile-header-cover -->
                <!-- BEGIN profile-header-content -->
                <div class="profile-header-content">
                   <!-- BEGIN profile-header-img -->
                   <div class="profile-header-img">
                      <img src="{{ assets_base() }}{{ $origine->photo_1 }}" alt="">
                   </div>
                   <!-- END profile-header-img -->
                   <!-- BEGIN profile-header-info -->
                   <div class="profile-header-info">
                    <h4 class="m-t-10 m-b-5" style="text-transform: none;"> {{ $origine->prenom }} {{ $origine->name }}

                       <sup>
                           <small>
                                {{ $origine->ville }}, {{ $origine->pays }}
                           </small>

                       </sup>
                    </h4>
                        <p class="m-b-10">
                            {{ $origine->age() }} {{ __('ans')  }}
                        </p>


                   </div>
                   <!-- END profile-header-info -->
                </div>
                <!-- END profile-header-content -->
                <!-- BEGIN profile-header-tab -->
                <ul class="profile-header-tab nav nav-tabs">
                   <li class="nav-item"><a href="#profile-about_1" class="nav-link" data-toggle="tab">{{ __('A PROPOS') }}</a></li>

                   <li class="nav-item"><a href="#profile-photos_1" class="nav-link" data-toggle="tab">{{ __('PHOTOS') }}</a></li>



                </ul>
                <!-- END profile-header-tab -->
             </div>
          </div>
          <!-- end profile -->
          <!-- begin profile-content -->
          <div class="profile-content">



                @if ( $chidour->acceptation_cible == 1 && $chidour->acceptation_origine == 1 )

                    <form class="text-center" action="{{ route('post_accept_chidour') }}" method="post">

                        @csrf
                        <input type="hidden" name="user_id" value="{{ $origine->id }}">
                        @if (Auth::user()->id != $origine->id)
                            <button type="submit" class="p-2 btm btn-primary" style="font-size: 1rem;"><i class="fa fa-envelope"></i> {{ __('Contacter') }} {{ $origine->prenom }} {{ $origine->name }}</button>
                        @endif

                    </form>

                @endif
             <!-- begin tab-content -->
             <div class="tab-content p-0">
                @include('profile-tabs.a-propos', array('user' => $origine, 'fake_id' => 1))

                @if ($cible->chatrane == 0)
                    @include('profile-tabs.photos', array('user' => $origine, 'fake_id' => 1))
                @endif

             </div>
             <!-- end tab-content -->
          </div>
          <!-- end profile-content -->
       </div>
    </div>




    <div class="col-md-6">
        <div id="content" class="content content-full-width">
           <!-- begin profile -->
           <div class="profile">
              <div class="profile-header">
                 <!-- BEGIN profile-header-cover -->
                 <div class="profile-header-cover" style="background-image: url('{{ assets_base() }}{{ $cible->photo_1 }}')"></div>
                 <!-- END profile-header-cover -->
                 <!-- BEGIN profile-header-content -->
                 <div class="profile-header-content">
                    <!-- BEGIN profile-header-img -->
                    <div class="profile-header-img">
                       <img src="{{ assets_base() }}{{ $cible->photo_1 }}" alt="">
                    </div>
                    <!-- END profile-header-img -->
                    <!-- BEGIN profile-header-info -->
                    <div class="profile-header-info">
                     <h4 class="m-t-10 m-b-5" style="text-transform: none;"> {{ $cible->prenom }} {{ $cible->name }}

                        <sup>
                            <small>
                                 {{ $cible->ville }}, {{ $cible->pays }}
                            </small>

                        </sup>
                     </h4>
                         <p class="m-b-10">
                             {{ $cible->age() }} {{ __('ans')  }}
                         </p>


                    </div>
                    <!-- END profile-header-info -->
                 </div>
                 <!-- END profile-header-content -->
                 <!-- BEGIN profile-header-tab -->
                 <ul class="profile-header-tab nav nav-tabs">
                    <li class="nav-item"><a href="#profile-about_2" class="nav-link" data-toggle="tab">{{ __('A PROPOS') }}</a></li>

                    <li class="nav-item"><a href="#profile-photos_2" class="nav-link" data-toggle="tab">{{ __('PHOTOS') }}</a></li>



                 </ul>
                 <!-- END profile-header-tab -->
              </div>
           </div>
           <!-- end profile -->
           <!-- begin profile-content -->
           <div class="profile-content">


                @if ( $chidour->acceptation_cible == 1 && $chidour->acceptation_origine == 1 )

                    <form class="text-center" action="{{ route('post_accept_chidour') }}" method="post">

                        @csrf
                        <input type="hidden" name="user_id" value="{{ $cible->id }}">
                        @if (Auth::user()->id != $cible->id)
                            <button type="submit" class="p-2 btm btn-primary" style="font-size: 1rem;"><i class="fa fa-envelope"></i> {{ __('Contacter') }} {{ $cible->prenom }} {{ $cible->name }}</button>
                        @endif

                    </form>

                @endif


              <!-- begin tab-content -->
              <div class="tab-content p-0">

                 @include('profile-tabs.a-propos', array('user' => $cible, 'fake_id' => 2))

                 @if ($cible->chatrane == 0)
                     @include('profile-tabs.photos', array('user' => $cible, 'fake_id' => 2))
                 @endif


              </div>
              <!-- end tab-content -->
           </div>
           <!-- end profile-content -->
        </div>
    </div>



 </div>

 <div id="avis">
    @comments([
        'model' => $chidour,
        'perPage' => 15
    ])
  </div>
@endsection


@section('scripts')
    <script>
        $('input[name="ratings"]').change(function(){
            $('.rating-form').submit();
        });
    </script>
@endsection
