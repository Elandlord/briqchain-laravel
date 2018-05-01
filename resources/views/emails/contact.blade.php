@component('mail::message')
Beste {{ env('APP_NAME')}},
<br/>
<p>Er heeft zich zojuist via het contactformulier op <a href="{{ env('APP_URL') }}">{{ env('APP_NAME')}}</a> aangemeld voor de primaire obligatie uitgifte van {{ env('APP_NAME')}}.</p>

De volgende gegevens zijn achtergelaten:<br/>
<strong>Naam:</strong> {{ $form_data['name'] }}<br/>
<strong>Email:</strong> {{ $form_data['email_address'] }}<br/>
<p>U kunt contact opnemen met bovenstaande persoon via het mailadres.</p>
Vriendelijke groet,
<br/>
<strong>{{ env('APP_NAME') }}</strong>
@endcomponent