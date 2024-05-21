<x-app-layout>
   <div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>
            <h1>Create New Product</h1>
        </div>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary">back</a>
        </div>
    </div>
    <div class="card-body">
       <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input id="name" class="form-control" type="text" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="regular_price">Regular price</label>
                    <input id="regular_price" class="form-control" type="text" name="regular_price" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sale_price">Sale price</label>
                    <input id="sale_price" class="form-control" type="text" name="sale_price" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_id">Select Category</label>
                    <select id="category_id" class="form-control" name="category_id">
                       @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->slug }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="image">Porduct Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
            </div>


        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-success">Save Record's</button>
        </div>
       </form>
    </div>
   </div>
</x-app-layout>
