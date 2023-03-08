@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('home') }}</div>

                <div class="card-body d-flex justify-content-center">
                    <a href="{{$dashRoute}}" class="btn btn-primary">Dashboard</a>
                   @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
