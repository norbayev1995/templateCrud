@extends('layouts/layout')
@section('title', 'Edit Product')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form id="editForm" method="post" action="{{ route('products.update', ['product' => $product]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="editTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="editTitle" value="{{ $product->title }}" required>
                    @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="editDescription" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="editDescription" rows="3" required>{{ $product->description }}</textarea>
                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="editPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="editPrice" value="{{ $product->price }}">
                    @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn btn-warning">Update Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
