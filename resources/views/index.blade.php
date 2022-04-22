@extends('frontend::layouts.master')
@auth('admin')
	@section('content')
		<x-theme::h1>About laravel theme</x-theme::h1>
		<p class="mb-2 italic">Laravel theme est le module de référence pour le design de toutes les applications Eutranet.</p>
		<div class="container">
			<x-theme::h2>Components</x-theme::h2>
			<p>Les composants sont essentiellements des composants de vues.</p>
			<x-theme::h2 class="mt-4">Composers</x-theme::h2>
			<p>Les composers vont à la recherche d'informations à rendre dans les vues.</p>
			<x-theme::h2 class="mt-4">Traits</x-theme::h2>
			<p>Les traits du package sont essentiellement applicables à l'UI.</p>
		</div>
	@endsection
@endauth