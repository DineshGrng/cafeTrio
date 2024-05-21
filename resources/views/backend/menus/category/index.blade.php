<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>
                    Category Section
                </h1>
            </div>
            <div>
                <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div>
                <table class="table">
                    <tr class="bg-light">
                        <th class="border border-1">index</th>
                        <th class="border border-1">name</th>
                        <th class="border border-1">slug</th>
                        <th class="border border-1">image</th>
                        <th class="border border-1">actions</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="border border-1">{{ $loop->iteration-1 }}</td>
                        <td class="border border-1">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $category->id }}">
                                <img src="{{ asset($category->photo) }}" height="55" alt="">

                            </a>
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$category->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $category->name }} , index:{{ $index++ }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset($category->photo) }}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="border border-1">{{ $category->name }}</td>
                        <td class="border border-1">{{ $category->slug }}</td>
                        <td class="border border-1">
                           <form action="{{ route('category.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-primary">edit</a>
                            <button type="submit" class="btn btn-sm btn-danger">delete</button>
                           </form>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
