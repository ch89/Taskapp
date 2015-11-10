@extends('layout')

@section('content')

	<div class="container">
		<h1>Users</h1>

		@if($users->count())
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<p>No users defined</p>
		@endif
	</div>

@stop