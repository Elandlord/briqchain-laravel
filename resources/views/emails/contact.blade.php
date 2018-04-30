@component('mail::message')
Beste {{ env('APP_NAME')}},
<br/><br/>
<p>Er heeft zich zojuist via het contactformulier op <a href="{{ env('APP_URL') }}">{{ env('APP_NAME')}}</a> aangemeld voor de primaire obligatie uitgifte van {{ env('APP_NAME')}}.</p>
<br/>
De volgende gegevens zijn achtergelaten:
<strong>Naam:</strong> {{ $form_data['name'] }}<br/><br/
<strong>Email:</strong> {{ $form_data['email_address'] }}<br/>
<p>U kunt contact opnemen met bovenstaande persoon via het mailadres.</p>
<br/>
Vriendelijke groet,
<br/>
<strong>{{ env('APP_NAME') }}</strong>
@endcomponent