<x-frontend-layout>
    <section>
        <style>
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
        </style>
        <div>
            <div class="card bg-light">
                <div class="card-body text-light my-5">
                    <div class="row">
                        <div class="col-md-6 ourStoryimg">
                            <img src="{{ asset($aboutus[2]->image) }}" alt="" class="border border-5 rounded">
                        </div>
                        <div class="col-md-6 my-3">
                            <h1 class="text-dark">
                                {{-- {{ $aboutus }} --}}
                                {{ $aboutus[2]->title }}
                            </h1>
                            <div class="text-dark">
                                {!! $aboutus[2]->description !!}
                            </div>
                            {{-- <div class="text-center d-grid gap-2 mt-5 ">
                                <a href="" class="btn btn-outline-light text-dark ">Our Storie's</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
