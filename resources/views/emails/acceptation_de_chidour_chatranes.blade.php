@component('mail::message')
# {{ __("Bonjour!") }}

{{ __("Le Membre") }} {{ $origine->prenom }} {{ $origine->name }} {{ __("souhaite rentrer en chidouh avec le membre") }}  {{ $cible->prenom }} {{ $cible->name }} {{ __("par l'intermédiaire de la messagerie privée") }}

{{ __("Nous vous tiendrons au courant de la suite.") }}

@component('mail::button', ['url' =>  config('app.url')  . '/chidours'])
{{ __("Liste de Chidouh") }}
@endcomponent


{{ __("Nous vous informons que vous trouverez dans votre espace la  messagerie nouvellement crée avec la chadranite de l’autre Membre.") }}

{{ __("Nous vous remercions pour votre collaboration au sein de la plate-forme.") }}

{{ __("L’équipe de la plate-forme.") }}


<small><strong>{{ __("Confidentialité:") }}</strong> {{ __("Toutes les informations que vous nous transmettez via votre espace “mon compte” demeurent strictement confidentielles.") }}</small>


{{ config('app.name') }}
@endcomponent
