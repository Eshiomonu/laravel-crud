@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Add New Product</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Product List</a>

    </div>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('product.form')
       
          <button type="submit" class="btn btn-primary">Add Product</button> 
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection