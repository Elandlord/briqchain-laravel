@component('mail::message')
Beste {{ $form_data['name'] }},
<br/>
<p>U heeft zich zojuist via <a href="{{ env('APP_URL') }}">{{ env('APP_NAME')}}</a> aangemeld voor de primaire obligatie uitgifte van {{ env('APP_NAME')}}.</p>
U heeft de volgende gegevens achtergelaten:

<strong>Naam:</strong> {{ $form_data['name'] }}<br/>
<strong>Email:</strong> {{ $form_data['email_address'] }}

<p>Wij houden u op de hoogte van de voortgang van Briqchain.</p>

Vriendelijke groet,
<br/>
<strong>{{ env('APP_NAME') }}</strong>
@endcomponent