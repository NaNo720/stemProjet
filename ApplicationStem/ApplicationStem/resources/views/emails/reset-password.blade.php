<!-- resources/views/emails/reset_password.blade.php -->

@component('mail::message')
# Réinitialiser le mot de passe

Vous recevez cet email car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.

@component('mail::button', ['url' => $url])
Réinitialiser le mot de passe
@endcomponent

Si vous n'avez pas demandé de réinitialisation de mot de passe, aucune action supplémentaire n'est requise.

Merci,<br>
{{ config('app.name') }}
@endcomponent
