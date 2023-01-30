
@php
    if(!isset($fake_id)){
        $fake_id = 1;
    }
@endphp

@if ($user->chatrane == 0)
    @include('profile-tabs.a-propos-simple-user')
@else
    @include('profile-tabs.a-propos-chatrane')
@endif
