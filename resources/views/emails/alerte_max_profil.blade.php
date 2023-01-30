@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Attention votre limite de profils est atteinte!") }}

{{ __("Vous ne serez plus visible comme chadranite disponible, libre à vous de modifier la limite du nombre de vos profils que vous souhaitez vous occuper.") }}

{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>

{{ config('app.name') }}
@endcomponent
