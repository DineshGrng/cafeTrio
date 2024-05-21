<x-app-layout>
   <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div>
        <h1>
            Create New Category
        </h1>
       </div>
       <div>
        <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">back</a>
       </div>
    </div>
    <div class="card-body">
       <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="photo">Category Photo</label>
            <input id="photo" class="form-control-file" type="file" name="photo">
        </div>
        <button type="submit" class="btn btn-lg btn-success">Save Records</button>
    </form>
    </div>
   </div>
</x-app-layout>
