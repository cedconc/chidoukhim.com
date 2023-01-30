@php
    if(!isset($fake_id)){
        $fake_id = 1;
    }
@endphp
<!-- begin  tab -->
<div class="tab-pane fade" id="profile-photos_{{ $fake_id }}">

    <div class="photo-gallery mt-5">
        <div class="container">

            <div class="row photos">

                    @if ( !is_null($user->photo_1) && $user->photo_1 != '' )
                        <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_1 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_1 }}"></a></div>
                    @endif


                    @if ( !is_null($user->photo_2) && $user->photo_2 != '' )
                        <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_2 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_2 }}"></a></div>
                    @endif


                    @if ( !is_null($user->photo_3) && $user->photo_3 != '' )
                        <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_3 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_3 }}"></a></div>
                    @endif


                    @if ( !is_null($user->photo_4) && $user->photo_4 != '' )
                        <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_4 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_4 }}"></a></div>
                    @endif


                    @if ( Auth::user()->id == $user->id || Auth::user()->admin )

                        @if ( !is_null($user->photo_5) && $user->photo_5 != '' )
                            <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_5 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_5 }}"></a></div>
                        @endif


                        @if ( !is_null($user->photo_6) && $user->photo_6 != '' )
                            <div class="col-sm-6 col-md-4 col-lg-3 item text-center mt-3 mb-3"><a href="{{ assets_base() }}{{ $user->photo_6 }}" data-lightbox="photos"><img class="img-fluid" src="{{ assets_base() }}{{ $user->photo_6 }}"></a></div>
                        @endif

                    @endif





            </div>
        </div>
    </div>

</div>
<!-- end tab -->
