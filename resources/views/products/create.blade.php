<!-- resources/views/products/create.blade.php -->

@extends('dashboard.dashboard')

@section('main')
    <div class="page-content">

        <nav class="page-breadcrumb">
    <div class="container">
        <h2>Create Product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="text" name="image_url" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="manufacturer">Manufacturer:</label>
                <input type="text" name="manufacturer" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="area">Area:</label>
                <input type="text" name="area" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        </nav>
    </div>
@endsection
