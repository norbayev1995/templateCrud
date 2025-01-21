@extends('layouts/layout')
@section('title', 'Product CRUD')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Product CRUD</h1>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('products.show', ['product' => $product]) }}" class="btn btn-success">Show</a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p>Nothing</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
