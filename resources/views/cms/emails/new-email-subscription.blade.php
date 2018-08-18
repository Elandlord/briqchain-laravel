@component('mail::message')

    Beste Jos,

    Er is een nieuwsbriefinschrijving met de volgende gegevens:

    naam: {{ $emailSubscription->name }}
    email: {{ $emailSubscription->email_address }}

@endcomponent