<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> {{ config('app.name') }} - {{__('Customer account deletion')}}</title>
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
                <p>Dear <strong>{{ $user->name }}</strong>,</p>
                <p>We have received a request for account deletion.<br>
                    However, this is impossible at the moment because we have made an agreement.<br>
                    Please, contact us as soon as possible to discuss the reason why you would like
                    to delete your account.
                </p>
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
