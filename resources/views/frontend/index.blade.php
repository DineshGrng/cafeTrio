<x-frontend-layout>
    <x-carousel />
    <style>
        .menus {
            height: 460px;
            /* width: 750px; */
        }

        .menus img {
            height: 450px;
            /* width: 750px; */
            overflow: hidden;
            object-fit: cover;
        }

        .cat_photo {
            height: 510px;
            /* width: 750px; */
        }

        .cat_photo img {
            height: 500px;
            /* width: 750px; */
            overflow: hidden;
            object-fit: cover;
        }

        .ourStoryimg {
            height: 510px;
            /* width: 750px; */
        }

        .ourStoryimg img {
            height: 500px;
            /* width: 750px; */
            overflow: hidden;
            object-fit: cover;
        }

        .cat_img {
            height: 360px;
            width: 350px;
        }

        .cat_img img {
            height: 350px;
            width: 350px;
            overflow: hidden;
            object-fit: cover;
        }
    </style>
    <!-- out menus -->
    <section>
        <div class="card  bg-primary fs-4 text-light ">
            <div class="card-body container my-5">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            {!! $aboutus[1]->description !!}
                        </p>
                        <div class="text-center d-grid gap-2 mt-5">
                            <a href="" class="btn btn-outline-light ">Menus</a>
                        </div>
                    </div>
                    <div class="col-md-5 menus ms-5 ">
                        <img src="{{ asset($aboutus[1]->image) }}" alt="" class="rounded img-thumbnail ms-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of our menus -->

    <!-- start of locations -->
    <section class="">
        <div class="">
            <div class="card bg-light ">
                <div class="container">
                    <div class="card-header ">
                        <div class="text-center my-5">
                            <h1>
                                Visit Us & Garb Trio Combo Pack's
                            </h1>
                        </div>
                    </div>
                    <div class="card-body my-5">
                        <div class="row">
                            <div class="col-md-7 fs-4">
                                <h1 class="mt-5">
                                    Grab Cafe Trio Special Combo Pack
                                </h1>
                                <div class=" my-5">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $company[0]->address }}
                                </div>
                                <div class="my-2">
                                    <span>
                                        <i class="fa-solid fa-mobile-screen"></i>
                                        {{ $company[0]->phone1 }}
                                    </span>||
                                    <span>
                                        <i class="fa-solid fa-phone"></i>
                                        {{ $company[0]->phone2 }}
                                    </span>
                                </div>
                                <div class="my-2">
                                    <i class="fa-solid fa-envelope"></i>
                                    {{ $company[0]->email }}
                                </div>
                                <div class="text-center my-5">
                                    <h1>Our Categories</h1>
                                    <div class="my-3">
                                        @foreach ($category as $item)
                                            <a href="" class="btn btn-outline-dark">
                                                <span> {{ $item->name }} </span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 cat_photo  ">
                                {{-- {{ $category }} --}}
                                <img src="{{ asset($photos[7]->image) }}" alt="" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the locations -->

    <!-- about us -->
    <section>
        <div>
            <div class="card bg-primary">
                <div class="card-body text-light my-5">
                    <div class="row">
                        <div class="col-md-6 ourStoryimg">
                            <img src="{{ asset($aboutus[2]->image) }}" alt="" class="border border-5 rounded">
                        </div>
                        <div class="col-md-6 my-3">
                            <h1 class="">
                                {{-- {{ $aboutus }} --}}
                                {{ $aboutus[2]->title }}
                            </h1>
                            <div>
                                {!! $aboutus[2]->description !!}
                            </div>
                            <div class="text-center d-grid gap-2 mt-5">
                                <a href="" class="btn btn-outline-light ">Our Storie's</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the about us -->

    <!-- category section -->
    <section>
        <div class="card bg-light ">
            <div class="card-body container mt-3">
                <h1 class="text-center">Categorie's</h1>
                <div class="row gap-5 my-5">
                    @foreach ($category as $item)
                        <div class="col-md-3 cat_img ">
                           {{-- <a href="" class="text-dec"> --}}
                            <img src="{{ asset($item->photo) }}" alt="" class="rounded">
                            <div class="text-center mt-1">
                                <h5>
                                    {{ $item->name }}
                                </h5>
                            </div>
                           {{-- </a> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- categoty section end -->
</x-frontend-layout>
