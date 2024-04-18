<!-- resources/views/products/edit.blade.php -->

@extends('dashboard.dashboard')

@section('main')
    <div class="page-content">

        <nav class="page-breadcrumb">
    <div class="container">
        <h2>Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" name="code" class="form-control" value="{{ $product->code }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="text" name="image_url" class="form-control" value="{{ $product->image_url }}">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" name="category" class="form-control" value="{{ $product->category }}" required>
            </div>
            <div class="form-group">
                <label for="manufacturer">Manufacturer:</label>
                <input type="text" name="manufacturer" class="form-control" value="{{ $product->manufacturer }}" required>
            </div>
            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" name="area" class="form-control" value="{{ $product->area }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
        </nav>
    </div>
@endsection
