@component('mail::message')
# Message 

Bonjour {{ $data['firstname'] }} {{ $data['lastname'] }},
Merci de nous ecrire. Nous traitons votre requête.

@component('mail::button', ['url' => '/home'])
Voir site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
