@component('mail::message')
    {{  $mail->getText('mails.contact_greeting') }} {{ $emailSubscription->name }},

    {{  $mail->getText('mails.contact_opening_paragraph') }}

    {{  $mail->getText('mails.contact_name') }} {{ $emailSubscription->name }}
    {{  $mail->getText('mails.contact_greeting') }} {{ $emailSubscription->email_address }}

    {{  $mail->getText('mails.contact_closing_paragraph') }}

    {{  $mail->getText('mails.contact_ending') }}
    Team Briqchain
@endcomponent