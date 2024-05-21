<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>Gallary </h1>
                <span>(in order to change imgae click the image there is options)</span>
            </div>
            <div>
                <a href="{{ route('photo.create') }}" class="btn btn-sm btn-primary">add images</a>
            </div>
        </div>
        <div class="card-body">
            {{-- {{ $photos }} --}}
            <div class="row g-2">
                @foreach ($photos as $photo)
                    {{-- <div class="col-md-6">

                        <img src="{{ asset($photo->image) }}" alt="" height="255px" style="overflow: hidden; object-fit: cover" class="rounded" >
                        <h5>ID number:{{ $photo->id }}</h5>
                    </div> --}}
                    <div class="col-md-6">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $photo->id }}">
                            <img src="{{ asset($photo->image) }}" height="255px" alt=""
                                style="overflow: hidden; object-fit: cover" class="rounded">

                        </a>
                        <h5>index number:{{ $index++ }}</h5>
                        <div class="modal fade" id="exampleModal{{ $photo->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Id_number:{{ $photo->id }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset($photo->image) }}" alt="" class="img-fluid">
                                        <form action="{{ route('photo.update',$photo->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                           <h5>change Image</h5>
                                           <div class="form-group">
                                            <label for="image">image</label>
                                            <input id="image" class="form-control-file" type="file" name="image">
                                           </div>
                                           <button type="submit" class="btn btn-lg btn-success">
                                            update Records
                                           </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</x-app-layout>
