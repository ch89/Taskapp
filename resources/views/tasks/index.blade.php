@extends('layout')

@section('content')

	<h1>Tasks</h1>

	@if($tasks->count())
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Content</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tasks as $task)
					<tr>
						<td>{{ $task->title }}</td>
						<td>{{ $task->content }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No tasks defined</p>
	@endif

	<a href="tasks/create" class="btn btn-primary">New</a>

@stop