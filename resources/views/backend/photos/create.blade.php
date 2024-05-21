<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Add Photo's</h1>
            </div>
            <div>
                <a href="{{ route('photo.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>

                <div>
                    <button type="submit" class="btn btn-lg btn-success">Save Record's</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
