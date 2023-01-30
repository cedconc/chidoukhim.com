@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Nous vous informons que votre demande de mise en chidouh a été refusée") }}
{{ __("Nous vous invitons à poursuivre votre recherche") }}



{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>

{{ config('app.name') }}
@endcomponent
