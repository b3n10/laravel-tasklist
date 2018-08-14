@if ($tasks->count())
	<div class="card">
		<div class="card-header">
			Current Tasks
		</div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th scope="col">Task</th>
						<th scope="col" colspan="2">Created At</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tasks as $task)
						<tr>
							<td>
								{{ $task->name }}
							</td>
							<td>
								{{ $task->created_at->diffForHumans() }}
							</td>
							<td>
								<form action="{{ url('task/' . $task->id) }}" method="POST">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-danger">Delete</button>
									{{ method_field('DELETE') }}
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	</div>
@else
	<div class="alert alert-primary" role="alert">
		No task on list :)
	</div>
@endif
