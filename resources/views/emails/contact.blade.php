@component('mail::message')
{{  $mail->getText('mails.contact_greeting') }} {{ env('APP_NAME')}},
<br/>
<p>{{  $mail->getText('mails.contact_opening_paragraph') }}</p>

{{  $mail->getText('mails.contact_list_credentials') }}<br/>
<strong>{{  $mail->getText('mails.contact_name') }}</strong> {{ $form_data['name'] }}<br/>
<strong>{{  $mail->getText('mails.contact_email') }}</strong> {{ $form_data['email_address'] }}<br/>
<p>{{  $mail->getText('mails.contact_closing_paragraph') }}</p>
{{  $mail->getText('mails.contact_ending') }}
<br/>
<strong>{{ env('APP_NAME') }}</strong>
@endcomponent