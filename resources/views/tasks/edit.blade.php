@extends('layout')

@section('content')

<div class="container">

	<h1>Edit</h1>

	{!! Form::model($task, ['route' => ['tasks.update', $task->slug], 'method' => 'patch']) !!}
		<div class='form-group'>
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('content', 'Content') !!}
			{!! Form::text('content', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

	@include('partials.errors')

</div>
	
@stop