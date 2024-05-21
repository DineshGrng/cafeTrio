<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Edit Category</h1>
            </div>
            <div>
                <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                </div>
               <div class="d-flex">
                <div class="form-group">
                    <label for="photo">Category Photo</label>
                    <input id="photo" class="form-control-file" type="file" name="photo">
                </div>
                <div>
                    <img src="{{ asset($category->photo) }}" height="200px" alt="" class="rounded">
                </div>
               </div>
                    <button type="submit" class="btn btn-lg btn-success">Update Record's</button>
                </div>
               </form>

        </div>
    </div>
</x-app-layout>
