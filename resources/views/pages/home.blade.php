@extends('layout')
@section('content')
	@unless($employees)
		<h1>there is no data !!</h1>
	@endunless

	@foreach ($employees as $employee)
		<h4>the names is </h$>
		<li>{{ $employee->name }}</li>

		<h4>the addresses is </h$>
		<li>{{ $employee->address }}</li>
	@endforeach
@stop