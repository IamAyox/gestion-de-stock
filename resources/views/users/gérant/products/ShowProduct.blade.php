@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-center ">
                <img class="card-img-top w-50" src="http://127.0.0.1:8000/images/products/{{$product->image}}"   />
                </div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Product name') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="name" type="text" class="form-control" 
                                name="name" value="{{ $product->name }}"  autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>
                            
                            <div class="col-md-6">
                                <textarea disabled id="description" type="text" class="form-control px-1"
                                 name="description" value="{{ $product->description }}" required autocomplete="description"
                                 autofocus>{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('price') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="price" type="number" step="0.01" class="form-control" 
                                name="price" value="{{ $product->price }}"  autocomplete="price" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('quantity') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="quantity" type="text" class="form-control " 
                                name="quantity" value="{{ $product->quantity }}"  autocomplete="quantity" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="expiration_date" class="col-md-4 col-form-label text-md-end">{{ __('expiration_date') }}</label>

                            <div class="col-md-6">
                                <input disabled  id="expiration_date" type="date" class="form-control" 
                                name="expiration_date" value="{{ $product->expiration_date }}" required autocomplete="expiration_date">
                            </div>
                           
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
