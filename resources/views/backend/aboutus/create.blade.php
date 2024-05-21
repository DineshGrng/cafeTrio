<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Add Detail's</h1>
            </div>
            <div>
                <a href="{{ route('aboutus.index') }}" class="btn btn-sm btn-primary">back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('aboutus.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Descriptin</label>
                        <textarea id="description" class="form-control summernote" name="description" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" class="form-control-file" type="file" name="image" required>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
