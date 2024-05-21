<x-frontend-layout>
    <section>
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">{{ $categories->name }}</h1>
            </div>
            <div class="card-body">
                <div>

                    <div class="row">
                        @foreach ($categories->products as $product)
                            {{-- {{ $product }} --}}
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{ asset($product->image) }}" alt=""
                                            style="height: 250px; object-fit: cover">
                                    </div>
                                    <div class="card-body">
                                        <h1>{{ $product->name }}</h1>
                                        @if ($product->sale_price == 0)
                                            <div class="fs-3">
                                               <span class="text-danger">Rs.</span> {{ $product->regular_price }}
                                            </div>
                                        @else
                                        <div >
                                            <div class="fs-3">
                                                <span class="text-danger">Rs.</span>{{ $product->regular_price }}
                                            </div>
                                            <div class="fs-4">
                                               <del> <span class="text-danger">Rs.</span>{{ $product->sale_price }}</del>
                                            </div>

                                        </div>


                                        @endif
                                        <span>
                                        </span>
                                        {{-- {{ $product}} --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
