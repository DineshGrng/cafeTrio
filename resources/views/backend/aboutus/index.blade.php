<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>About Us</h1>
            </div>
            <div>
                <a href="{{ route('aboutus.create') }}" class="btn btn-sm btn-primary">Add Info</a>
            </div>
        </div>
        <div class="card-body">
            @foreach ($aboutus as $about)
                <div class="form-group">
                    <label for="my-input">Title</label>
                    <input id="my-input" class="form-control" type="text" name="" value="{{ $about->title }}"
                        disabled>
                </div>
                <div class="d-flex gap-5">
                    <div>
                        <img src="{{ asset($about->image) }}" alt="" height="350px" style="object-fit: cover" class="rounded">
                    </div>
                    <div>
                        <p>
                            {!!  $about->description !!}
                        </p>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <a href="{{ route('aboutus.edit',$about->id) }}" class="btn btn-lg btn-primary"> edit About us {{ $index++ }}</a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
