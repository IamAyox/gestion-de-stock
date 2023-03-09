@extends('dash')

@section('content')
<div class="card container" style="width: 26rem;">
  <img class="card-img-top" src="http://127.0.0.1:8000/images/users/admin.jpg" alt="admin img" >
  <!-- <img class="card-img-top" src="{{asset('assets/images/example.jpg')}}" alt="Card image cap"> -->
  <div class="card-body">
      <hr>
    <p class="card-text">
        <a href="users/create" class="btn btn-primary">Add user</a>
        <a href="/gérant/products/create" class="btn btn-primary">Add Product</a>
    </p>
  </div>
</div>
@endsection
