<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<x-theme::mails.partials.head>{{$title}}</x-theme::mails.partials.head>
<body>
<table style="width: 480px; padding: 0; margin:0 auto; background-color: #fafcfc">
	<tr>
		<td>
			<x-theme::mails.partials.header>{{$title}}</x-theme::mails.partials.header>
		</td>
	</tr>
	<tr>
		<td>
			<x-theme::mails.partials.message :user="$user">{{$slot}}</x-theme::mails.partials.message>
		</td>
	</tr>
	<tr>
		<td>
			<x-theme::mails.partials.footer :user="$user"></x-theme::mails.partials.footer>
		</td>
	</tr>
</table>
</body>
</html>
