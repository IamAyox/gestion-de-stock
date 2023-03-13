@extends('layouts.app')

@section('content')


<div class="card container text-center">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>users Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('users.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>first name</th>
				<th>last name</th>
                <th>role</th>
				<th>Action</th>
			</tr>

				@forelse($users as $row)

					<tr>
                        <td>{{ $row->prenom }}</td>
						<td>{{ $row->nom }}</td>
                        <td>{{ $row->role }}</td>
                        <!-- <td>{{ $row->image }}</td> -->
						<td>
							<form method="post" id="deleteForm" action="{{ route('users.destroy', $row->id) }}" class="d-flex justify-content-center">
								@csrf
								@method('DELETE')
								<a href="{{route('users.show',$row->id)}}" class="btn btn-primary btn-sm">View</a>
								<a href="{{route('users.edit',$row->id)}}" class="btn btn-warning btn-sm mx-2">Edit</a>
								<button  type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure you want to delete this user?')">delete</button>
							</form>
							
						</td>
					</tr>
					@empty
						</table>
						<h3 class="text-center">No records found</h3>
				@endforelse

		</table>
	</div>
</div>

@endsection
