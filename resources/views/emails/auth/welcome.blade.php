@component('mail::message')
# {{ __("Bonjour") }}!

{{ __("Nous vous confirmons la mise en ligne de votre profil. Nous vous souhaitons de rencontrer votre mazal.") }}

{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>


{{ config('app.name') }}
@endcomponent
