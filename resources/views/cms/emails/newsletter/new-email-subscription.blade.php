@component('mail::message')

    <p>Beste Jos,</p>
    <br/>
    <p>Er is een nieuwsbriefinschrijving met de volgende gegevens:</p>
    <br/>
    <p>Naam: {{ $emailSubscription->name }}</p>
    <p>Email: {{ $emailSubscription->email_address }}</p>
    <br/>
    <p>Deze gegevens zijn ook te bekijken in het beheersysteem.</p>
    <br/>
@endcomponent