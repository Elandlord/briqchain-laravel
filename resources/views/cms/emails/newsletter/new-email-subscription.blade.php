@component('mail::message')

    {{  $mail->getText('mails.contact_greeting') }},

    {{  $mail->getText('mails.contact_list_credentials') }}

    {{  $mail->getText('mails.name') }} {{ $emailSubscription->name }}
    {{  $mail->getText('mails.email') }} {{ $emailSubscription->email_address }}

    {{  $mail->getText('mails.contact_closing_paragraph') }}
@endcomponent