@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Vous avez un message non lus de") }} {{ $destinataire }}


{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>


{{ config('app.name') }}
@endcomponent
