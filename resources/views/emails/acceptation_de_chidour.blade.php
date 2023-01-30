@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Nous vous informons que votre messagerie privée entre vous et votre Chidoukh a été activée.") }}
{{ __("Nous vous invitons à aller dans votre espace personnel > Mes chidouh > Selectionner le Chidoukh puis veuillez cliquer sur le boutton 'Contacter' suivi du nom du chidoukh afin de converser avec le membre.") }}
{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>

{{ config('app.name') }}
@endcomponent
