@php
    if(!isset($fake_id)){
        $fake_id = 1;
    }
@endphp

<!-- begin  tab -->
<div class="tab-pane fade" id="chatrane-users_{{ $fake_id }}">

    <div class="container mt-10 text-center">

        <div class="row mt-2 mb-2">

            <div class="col-md-12 text-center" style="font-size: 2rem; font-weight: 600;">
               <i class="fa fa-search"></i> {{ $chatrane_users->total() }} {{ __('Membre(s)') }}
            </div>

        </div>

	<div class="row">


        @foreach ($chatrane_users as $u)
            <a target="_blank" href="/user/{{ $u->slug }}" class="col-md-4">

                <div class="profile-card-4 text-center" style="background-color: #eee;">
                    <img style="height: 15rem; width: auto;" src="{{ assets_base() }}{{ $u->photo_1 }}" class="img img-responsive" alt="">
                    <div class="profile-content">
                        <div class="profile-name" style="background-color: rgba(0,0,0,0.5); padding-top: 5px;">{{ $u->name }} {{ $u->prenom }}
                            <sup>
                                @foreach ($u->langues_ids as $item)
                                    <span><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                                @endforeach

                            </sup>

                            <p> <small> {{ $u->age }} {{ __('ans')  }} -  {{ $u->ville }}, {{ $u->pays }} </small> </p>
                        </div>
                        <div style="height: 4rem;" class="profile-description"> {{ $u->brief }} </div>
                        <div class="row">

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">
                                        @if (is_null($u->ethnicite))
                                            -
                                        @else
                                            {{ $u->ethnicite }}
                                        @endif
                                    </p>

                                </div>
                            </div>

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">

                                        @if (is_null($u->taille))
                                            -
                                        @else
                                            {{ $u->taille }} cm
                                        @endif
                                    </p>

                                </div>
                            </div>

                            <div class="col-sm-4" style="width: 33.33%;">
                                <div class="profile-overview">
                                    <p class="mb-0">

                                        @if (is_null($u->silhouette))
                                            -
                                        @else
                                            {{ $u->silhouette }}
                                        @endif

                                    </p>

                                </div>
                            </div>

                            <p class="text-black mb-0 text-center">
                                <strong> {{ $user->nb_chidours }} {{ __('Chidoukh') }}(s) </strong>
                                <br>
                                @foreach ($u->get_orientation_religieuse() as $type)
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
            {{ $chatrane_users->links("pagination::bootstrap-4") }}
        </div>

    </div>

</div>

</div>
<!-- end tab -->
