@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Nous vous informons que votre messagerie privée entre vous et le Membre") }} {{ $user->prenom }} {{ $user->nom }} {{ __("a été fermée.") }}

{{ __("Nous vous invitons à aller dans votre espace personnel afin de sélectionner un nouveau Membre pour un autre chidouhk.") }}



{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>

{{ config('app.name') }}
@endcomponent
