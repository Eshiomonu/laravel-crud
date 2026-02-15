@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Edit Product</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Product List</a>

    </div>
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('product.form')
       
          <button type="submit" class="btn btn-primary">Update Product</button> 
          <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

@endsection