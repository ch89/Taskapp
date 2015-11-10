@extends('layout')

@section('content')

<div class="container">
	<h1>Tasks</h1>

	@if($tasks->count())
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Content</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($tasks as $task)
					<tr>
						<td><a href="{{ route('tasks.show', $task->slug) }}">{{ $task->title }}</a></td>
						<td>{{ $task->content }}</td>
						<td>
							<a href="{{ route('tasks.edit', $task->slug) }}" class="btn btn-primary">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No tasks defined</p>
	@endif

	<a href="tasks/create" class="btn btn-primary">New</a>
</div>

@stop