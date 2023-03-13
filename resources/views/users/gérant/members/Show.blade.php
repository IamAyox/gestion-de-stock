@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header d-flex justify-content-center ">
                <img class="card-img-top w-50" src="http://127.0.0.1:8000/images/users/{{$user->image}}"   />
                </div> -->
                <div class="card-body">
                        <div class="row mb-3">
                            <label for="'nom'" class="col-md-4 col-form-label text-md-end">{{ __('Member name') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="'nom'" type="text" class="form-control" 
                                name="name" value="{{ $user->nom }}"  autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('prenom') }}</label>
                            
                            <div class="col-md-6">
                                <input disabled id="prenom" type="text" class="form-control px-1"
                                 name="prenom" value="{{ $user->prenom }}" required autocomplete="prenom"
                                 autofocus/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="phone" type="text" step="0.01" class="form-control" 
                                name="phone" value="{{ $user->phone }}"  autocomplete="phone" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="role" type="text" class="form-control " 
                                name="role" value="{{ $user->role }}"  autocomplete="role" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('email') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="email" type="email" class="form-control" 
                                name="email" value="{{ $user->email }}" required autocomplete="email">
                            </div>
                           
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
