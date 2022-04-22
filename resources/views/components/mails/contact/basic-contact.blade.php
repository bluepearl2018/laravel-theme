<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> {{ config('app.name') }} - {{__('Request for account deletion')}}</title>
    @includeIf('mails.themes.styles')
</head>
<body>
<table style="width: 480px; padding: 0; margin:0 auto; background-color: #fafcfc">
    <tr>
        <td>
            @component('mails.partials.header')@endcomponent
        </td>
    </tr>
    <tr>
        <td>
            <div style="padding:0 8px; margin-top: 12px">
                <p>Dear <strong>{{ $email->name }}</strong>,</p>
                <p>Thank you for your message. A staff member will receive a copy of your message.
                    A temporary account has been created with the data you have provided in the form.
                    This will allow us to make a follow-up.</p>
                <ul>
                    <li>{{__('from')}} : {{$email->from}}</li>
                    <li>{{__('Subject')}} : {{$email->subject}}</li>
                    <li><p>{{__('Message')}} :</p><p>{{$email->message_body}}</p></li>
                </ul>
                <p>{{__('Kind regards,')}}<br>{{ config('app.name') }}</p>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            @component('mails.partials.footer', ['user' => $user ?? NULL])@endcomponent
        </td>
    </tr>
</table>
</body>
</html>
