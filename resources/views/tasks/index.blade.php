@extends('layouts.app')

@section('content')
	<div class="card">

		<div class="card-body">

			@include('common.errors')

			<form action="{{ url('task') }}" method="POST">

				<div class="form-group">
					<label for="name">Task</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Add task</button>
				</div>

				{{ csrf_field() }}

			</form>

		</div>

	</div>

	@include('tasks.task')

@endsection
