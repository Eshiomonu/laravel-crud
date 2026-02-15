@extends('layouts.app')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Product Details</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Product List</a>
    </div>

    <div class="card mb-3">
        <div class="row g-0">
            @if($product->image)
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded-start" alt="{{ $product->name }}">
            </div>
            @endif
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title
">{{ $product->name }}</h5>
                    <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $product->category->name }}</p>
                    <p class="card-text"><strong>Quantity:</strong> {{ $product->quantity }}</p>
                    <p class="card-text"><strong>Price:</strong> N{{ number_format($product->price, 2) }}</p>
                    <p class="card-text"><strong>Status:</strong> <span class="p-2 bg-success text-white border rounded-5">{{ ucfirst($product->status) }}</p>
                </div>
            </div>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary m-3">Edit Product</a>
            <a href="{{ route('products.index') }}" class="btn btn-secondary m-3">Back to Product List</a>
        </div>
    </div>
     

@endsection