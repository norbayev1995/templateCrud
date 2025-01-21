@extends('layouts/layout')
@section('title', 'Create New Product')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Create New Product</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form id="createForm" method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter product title" required>
                    @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter product description" required></textarea>
                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Enter product price">
                    @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
