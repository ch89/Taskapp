@extends('layout')

@section('content')

	<h1>Games</h1>

	@if(count($games))
		<ul>
			@foreach($games as $game)
				<li>{{ $game }}</li>
			@endforeach
		</ul>
	@else
		<p>No games defined</p>
	@endif

@stop