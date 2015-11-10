@extends('layout')

@section('content')

<div class="container">
	<h1>Create</h1>

	{!! Form::open(['route' => 'tasks.store']) !!}
		<div class='form-group'>
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('content', 'Content') !!}
			{!! Form::text('content', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

	@include('partials.errors')
</div>

@stop