@extends('theme::layouts.master')
@section('content')
	<h2 class="border-b-4 p-2 text-xl bg-gray-300 text-gray-800">Login card</h2>
	<div class="flex flex-col">
		<div>
			<x-theme-auth-login></x-theme-auth-login>
		</div>
	</div>

	<h2 class="border-b-4 p-2 text-xl bg-gray-300 text-gray-800">Register card</h2>
	<div class="flex flex-col">
		<div>
			<x-theme-auth-register></x-theme-auth-register>
		</div>
	</div>
@endsection