<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> {{ config('app.name') }} - {{__('Request for account deletion cancelled')}}</title>
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
                <p>The account deletion is cancelled.<br>
                    Your account deletion will not be executed.
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
