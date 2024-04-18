<!-- resources/views/products/show.blade.php -->

@extends('dashboard.dashboard')

@section('main')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <div class="container">
                <h2>Product Details</h2>
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Code:</strong> {{ $product->code }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Image URL:</strong> {{ $product->image_url }}</p>
                <p><strong>Category:</strong> {{ $product->category }}</p>
                <p><strong>Manufacturer:</strong> {{ $product->manufacturer }}</p>
                <p><strong>Area:</strong> {{ $product->area }}</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </nav>
    </div>
@endsection
