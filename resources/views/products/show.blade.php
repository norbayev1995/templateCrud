@extends('layouts/layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4">Details</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h5 class="text-muted">Title:</h5>
                <p class="fw-bold">{{ $product->title }}</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-muted">Description:</h5>
                <p class="fw-bold">{{ $product->description }}</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-muted">Price:</h5>
                <p class="fw-bold">${{ number_format($product->price, 2) }}</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
