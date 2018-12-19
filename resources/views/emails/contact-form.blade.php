@component('mail::message')
Beste Briqchain-team,

Er is contact opgenomen met {{ config('app.name') }}. De gegevens die achtergelaten zijn:
@component('mail::table')
| Component          | Waarde                      |
|:-------------------|:----------------------------|
| Naam               |{{ $data['name'] }}          |
| Telefoonnummer     |{{ $data['phone'] }}         |
| Email              |{{ $data['email'] }}         |
@endcomponent

@component('mail::table')
| Bericht            |
|:-------------------|
| {{ $data['body'] }}|
@endcomponent


Er is een bevestiging gestuurd naar de afzender. Probeer zo snel mogelijk contact op te nemen met de afzender.<br/>

Hartelijke groet,<br/>
# De {{ config('app.name') }} mailserver
@endcomponent