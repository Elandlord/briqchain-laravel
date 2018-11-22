@component('mail::message')
Beste {{ $data['name'] }},

U heeft contact opgenomen met {{ config('app.name') }}. De gegevens die u achtergelaten heeft:
@component('mail::table')
| Component          | Waarde                      |
|:-------------------|:----------------------------|
| Naam               |{{ $data['name'] }}          |
| Telefoonnummer     |{{ $data['phone'] }}         |
| Email              |{{ $data['email'] }}         |
@endcomponent

@component('mail::table')
| Uw bericht         |
|:-------------------|
| {{ $data['body'] }}|
@endcomponent


Wij nemen zo spoedig mogelijk contact met u op.<br/>

Hartelijke groet,<br/>
# Het {{ config('app.name') }}-team
@endcomponent