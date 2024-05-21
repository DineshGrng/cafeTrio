<x-app-layout>
    {{-- <x-dashboard/> --}}
    <div class="bg-light">
        <h1>Welcome To admin Control Pannel of <br>
             {{ $company[0]->name }}</h1>

        <div class="card">
            <div class="card-header ">
                <h1 class="">Company Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Total Categorie({{ $categoriesCount }})</h5>

                            </div>
                            <div class="card-body">

                                @foreach ($categories as $category)
                                    <ul>
                                        <li>{{ $category->name }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- {{ $categories }} --}}
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Total Products ({{ $ProductsCount }})</h5>
                            </div>
                            <div class="card-body">

                                @foreach ($products as $product)
                                    <ul>
                                        <li>{{ $product->name }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
