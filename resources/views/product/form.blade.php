
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name',$product->name ?? '') }}" id="name">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
       <div class="mb-3">
        <label for="name" class="form-label">Description</label>
        <input type="text" name="name" class="form-control" value="{{ old('description',$product->description ?? '') }}" id="description">
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
  <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity',$product->quantity ?? '') }}" id="quantity">
            @error('quantity')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price',$product->price ?? '') }}" id="price" step="0.01">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (old('category_id',$product->category_id ?? '') == $category->id) ? 'selected' : ''}}>{{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="">Select Status</option>
                <option value="active" {{ (old('status',$product->status ?? '') == 'active') ? 'selected' : ''}}>Active</option>
                <option value="inactive" {{ (old('status',$product->status ?? '') == 'inactive') ? 'selected' : ''}}>Inactive</option>
                
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            @if(!empty($product->image))
            <div class="mb-3">
                <label for="image" class="form-label">Current Image</label><br>
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 200px;">
        </div>
            @endif
            <label for="image" class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" id="image">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

             