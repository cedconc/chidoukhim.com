{{-- -------------------- Saved Messages -------------------- --}}
{{-- @if($get == 'saved')
    <table class="messenger-list-item m-li-divider @if('user_'.Auth::user()->id == $id && $id != "0") m-list-active @endif">
        <tr data-action="0">

            <td>
            <div class="avatar av-m" style="background-color: #d9efff; text-align: center;">
                <span class="far fa-bookmark" style="font-size: 22px; color: #68a5ff; margin-top: calc(50% - 10px);"></span>
            </div>
            </td>


            <td>
                <p data-id="{{ 'user_'.Auth::user()->id }}"> {{ __('Messages enrégistrés') }} </p>

                 <span>{{ __('Enrégistrer ici vos notes') }}</span>
            </td>


        </tr>
    </table>
@endif --}}

{{-- -------------------- All users/group list -------------------- --}}

@if($get == 'users')


<table class="messenger-list-item @if($user->id == $id && $id != "0") m-list-active @endif" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td style="position: relative">
            @if($user->active_status)
                <span class="activeStatus"></span>
            @endif
        <div class="avatar av-m"
        style="background-image: url('{{ assets_base() }}{{ $user->photo_1 }}');">
        </div>
        </td>
        {{-- center side --}}
        <td>
        <p data-id="{{ $type.'_'.$user->id }}">

            {{ strlen($user->name . ' ' . $user->prenom) > 12 ? trim(substr($user->name . ' ' . $user->prenom,0,12)).'..' : $user->name . ' ' . $user->prenom }}

            {{-- <sup>
                @foreach ($user->langues_ids() as $item)
                    <span style="margin-right: 5px;" ><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                @endforeach

            </sup> --}}

            <span>{{ $lastMessage->created_at_diff_for_humans() }}</span>

        </p>
        <span>
            {{-- Last Message user indicator --}}
            {!!
                $lastMessage->from_id == Auth::user()->id
                ? '<span class="lastMessageIndicator"> ' . __("Vous") .':</span>'
                : ''
            !!}
            {{-- Last message body --}}
            @if($lastMessage->attachment == null)
            {{
                strlen($lastMessage->body) > 30
                ? trim(substr($lastMessage->body, 0, 30)).'..'
                : $lastMessage->body
            }}
            @else
            <span class="fas fa-file"></span> Attachment
            @endif
        </span>
        {{-- New messages counter --}}
            {!! $unseenCounter > 0 ? "<b>".$unseenCounter."</b>" : '' !!}
        </td>

    </tr>
</table>
@endif

{{-- -------------------- Search Item -------------------- --}}
@if($get == 'search_item')
<table class="messenger-list-item" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td>
        <div class="avatar av-m"
        style="background-image: url('{{ assets_base() }}{{ $user->photo_1 }}');">
        </div>
        </td>
        {{-- center side --}}
        <td>
        <p data-id="{{ $type.'_'.$user->id }}">
            {{ strlen($user->name . ' ' . $user->prenom) > 12 ? trim(substr($user->name . ' ' . $user->prenom,0,12)).'..' : $user->name . ' ' . $user->prenom }}
            <sup>
                @foreach ($user->langues_ids() as $item)
                    <span style="margin-right: 5px;" ><img src='https://www.free-country-flags.com/countries/{{ $item }}/1/tiny/{{ $item }}.png' alt="{{ $item }}"/> </span>
                @endforeach

            </sup>
        </p>
        </td>

    </tr>
</table>
@endif

{{-- -------------------- Shared photos Item -------------------- --}}
@if($get == 'sharedPhoto')
<div class="shared-photo chat-image" style="background-image: url('{{ $image }}')"></div>
@endif


