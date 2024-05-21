<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>
                    Product Detail's
                </h1>
            </div>
            <div>
                <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        <img src="{{ asset($product->image) }}" height="255px" class="rounded" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ $product->name }}" required disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="regular_price">Regular price</label>
                        <input id="regular_price" class="form-control" type="text" name="regular_price" value="{{ $product->regular_price }}" required disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sale_price">Sale price</label>
                        <input id="sale_price" class="form-control" type="text" name="sale_price" value="{{ $product->sale_price }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select id="category_id" class="form-control" name="category_id" disabled >
                            {{-- value="{{ $product->category->name }}"  --}}
                           @foreach ($categories as $category)
                           <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected': '' }}>{{ $category->name }}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3" disabled> {{ $product->description }}</textarea>
                    </div>
                </div>




            </div>
        </div>
    </div>
</x-app-layout>
