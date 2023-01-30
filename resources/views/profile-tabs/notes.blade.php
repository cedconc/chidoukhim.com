@php
    if(!isset($fake_id)){
        $fake_id = 1;
    }
@endphp

<!-- begin  tab -->
<div class="tab-pane fade" id="admin-notes">

    @php
        $langue = 'en_US';
        $direction = 'ltr';


        if( app()->getLocale() == 'fr'){
             $langue = 'fr_FR';
        }



        if( app()->getLocale() == 'he'){
             $langue = 'he_IL';
             $direction = 'rtl';
        }



    @endphp

    <input type="hidden" id="langue" value="{{ $langue }}">
    <input type="hidden" id="direction" value="{{ $direction }}">

    <div class="container mt-10 text-center">

        <div class="row">
            <div class="col-md-12">
                {{-- {{ $user->notes }} --}}
            </div>
        </div>


        <div class="row">

            <form action="{{ route('post_notes') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}"required/>
                {{-- <input type="" name="admin_id" value="{{ Auth::user()->id }}"required/> --}}

                <textarea class="description" name="notes">{{ $user->notes }}</textarea>

                <div class="row">
                    <div class="col-md-12 text-right mt-5">
                        <button type="submit" class="btn btn-primary">{{ __('Soumettre') }}</button>
                    </div>
                </div>

            </form>




        </div>



    </div>

</div>
<!-- end tab -->
