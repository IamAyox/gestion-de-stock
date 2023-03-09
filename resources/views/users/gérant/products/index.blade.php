@extends('layouts.app')

@section('content')


<div class="card">
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

				@foreach($products as $row)

					<tr>
                        <td>{{ $row->name }}</td>
						<td>{{ $row->price }}</td>
                        <td>{{ $row->expiration_date }}</td>
						<td  class="d-flex justify-content-center align-items-center"><img src="http://127.0.0.1:8000/images/products/{{$row->image}}" width="75" /></td>
                        <!-- <td>{{ $row->image }}</td> -->
						<td>
							<form method="post" action="{{ route('products.destroy', $row->id) }}" class="d-flex justify-content-center">
								@csrf
								@method('DELETE')
								<a href="" class="btn btn-primary btn-sm">View</a>
								<a href="{{route('products.edit')}}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

		</table>
	</div>
</div>

@endsection
