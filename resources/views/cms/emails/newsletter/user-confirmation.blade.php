@component('mail::message')

    Beste {{ $emailSubscription->name }},

    Je hebt je ingeschreven voor de nieuwsbrief van Briqchain.com:

    naam: {{ $emailSubscription->name }}
    email: {{ $emailSubscription->email_address }}


    Je kan je te alle tijden uitschrijven voor deze nieuwsbrief via de link in een nieuwsbrief.

    Met vriendelijke groet,
    Jos van Alphen
@endcomponent