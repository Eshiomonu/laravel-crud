@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Product List</h2>
        <form action="{{ route('products.index') }}" method="GET" class="d-flex">
            <input type="text" name="search" class="form-control me-2" placeholder="Search products..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-outline-primary">Search</button>   
        </form>
        <a href="{{route('products.create')}}" class="btn btn-success">Add New Product</a>    
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success">
        <span>{{ session('success') }}</span>
    </div>
@endif

    <table class="table table-stripe table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                 <th>Description</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price (N)</th>
                <th>Status</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($products) > 0 )
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->status }}</td>
                
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="8" class="text-center">No products found.</td> 
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection