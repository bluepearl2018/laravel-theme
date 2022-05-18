<table style="width: 480px; border-top:solid 2px #fcc309">
	<tr>
		<td>
			{{__('labels.Phone')}} : {{ config('laravel-corporate.general_phone') }}
			|
			{{__('labels.Email')}} : {{ config('laravel-corporate.general_email') }}
		</td>
	</tr>
</table>
@includeIf('mails.partials.warnings')
