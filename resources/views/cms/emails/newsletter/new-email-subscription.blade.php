@component('mail::message')

    Beste Jos,

    Er is een nieuwsbriefinschrijving met de volgende gegevens:

    Naam: {{ $emailSubscription->name }}
    Email: {{ $emailSubscription->email_address }}

    Deze gegevens zijn ook te bekijken in het beheersysteem.
@endcomponent