<table style="width: 480px; border-top:solid 2px #fcc309">
	<tr>
		<td>
			{{__('Phone')}} : {{ config('laravel-be::config.general_phone') }}
			|
			{{__('Email')}} : {{ config('laravel-be::config.general_email') }}
		</td>
	</tr>
</table>
@component('theme::components.mails.partials.warnings', ['user' => $user])@endcomponent