<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1>
                    Product's List
                </h1>
            </div>
            <div>
                <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">Add New(+)</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tr class="bg-light">
                    <th class="border border-1">index</th>
                    <th class="border border-1">photo</th>
                    <th class="border border-1 w-25">name</th>
                    <th class="border border-1">regular_price</th>
                    <th class="border border-1">sale_price</th>
                    <th class="border border-1">category</th>
                    <th class="border border-1">actions</th>

                </tr>
                {{-- {{ $products }} --}}
                @foreach ($products as $product)
                    <tr>
                        <td class="border border-1">{{ $index++ }}</td>
                        <td class="border border-1">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}">
                                <img src="{{ asset($product->image) }}" height="55" alt="">

                            </a>
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $product->name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset($product->image) }}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="border border-1">{{ $product->name }}</td>
                        <td class="border border-1">{{ $product->regular_price }}</td>
                        <td class="border border-1">{{ $product->sale_price }}</td>
                        <td class="border border-1">{{ $product->category->name }}</td>
                        <td class="border border-1">
                            <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('product.edit', $product->id) }}"
                                    class="btn btn-sm btn-primary">edit</a>
                                    <a href="{{ route('product.show', $product->id) }}"
                                        class="btn btn-sm btn-info">show</a>

                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
