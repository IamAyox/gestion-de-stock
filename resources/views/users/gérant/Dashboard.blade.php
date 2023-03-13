@extends('layouts.dash')

@section('content')
<div class="card container" style="width: 26rem;">
  <img class="card-img-top" src="http://127.0.0.1:8000/images/users/admin.jpg" alt="admin img" >
  <!-- <img class="card-img-top" src="{{asset('assets/images/example.jpg')}}" alt="Card image cap"> -->
  <div class="card-body">
      <hr>
    <p class="card-text">
        <a href="{{route('users.index')}}" class="btn btn-primary">Manage Users</a>
        <a href="{{route('products.index')}}" class="btn btn-primary">Manage Products</a>
    </p>
  </div>
</div>
@endsection
