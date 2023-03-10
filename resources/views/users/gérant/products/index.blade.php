@extends('layouts.app')

@section('content')


<div class="card container">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Products Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>name</th>
				<th>price</th>
                <th>expiration_date</th>
                <th>image</th>
				<th>Action</th>
			</tr>

				@forelse($products as $row)

					<tr>
                        <td>{{ $row->name }}</td>
						<td>{{ $row->price }}</td>
                        <td>{{ $row->expiration_date }}</td>
						<td  class="d-flex justify-content-center align-items-center"><img src="http://127.0.0.1:8000/images/products/{{$row->image}}" width="75" /></td>
                        <!-- <td>{{ $row->image }}</td> -->
						<td>
							<form method="post" id="deleteForm" action="{{ route('products.destroy', $row->id) }}" class="d-flex justify-content-center">
								@csrf
								@method('DELETE')
								<a href="{{route('products.show',$row->id)}}" class="btn btn-primary btn-sm">View</a>
								<a href="{{route('products.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
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
