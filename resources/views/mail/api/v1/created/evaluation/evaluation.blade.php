@component( 'mail::message' )

# Olá!

você recebeu um novo comentário!

@component( 'mail::button', [ 'url' => config( 'api.url_frontend' ) ] )

Clique aqui e confira

@endcomponent

Obrigado,<br>

Att. Ezequiel Dhonatan!

{{ config( 'app.name' ) }}

@endcomponent
