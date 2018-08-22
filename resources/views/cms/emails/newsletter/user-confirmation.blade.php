@component('mail::message')
    <p>Beste {{ $emailSubscription->name }},</p>
    <br/>
    <p>Je hebt je ingeschreven voor de nieuwsbrief van Briqchain.com:</p
    <br/>
    <p>Naam: {{ $emailSubscription->name }}</p>
    <p>Email: {{ $emailSubscription->email_address }}</p>
    <br/>
    <p>Je kan je te alle tijden uitschrijven voor deze nieuwsbrief via de link in een nieuwsbrief.</p>
    <br/>
    <p>Met vriendelijke groet,</p>
    <p>Team Briqchain</p>
@endcomponent