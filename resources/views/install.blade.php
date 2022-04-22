@extends('package::install.master')
@section('content')
	<x-theme::h1>{{__('Package installation required')}}</x-theme::h1>
	{{$message}}
@endsection