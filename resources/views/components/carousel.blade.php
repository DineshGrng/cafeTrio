<div>
    <style>

        .carousel_img{
            height: 660px;
            width: 100%;
        }
        .carousel_img img{
            height: 660px;
            width: 100%;
            overflow: hidden;
            object-fit: cover;
        }
    </style>
    <section >
        <div class="card">
            <div class="card-body bg-light ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carousel_img ">
                            {{-- {{ $photos }} --}}
                            {{-- {{ $aboutus }} --}}
                            <img src="{{ asset($aboutus[0]->image) }}" alt="" class="rounded">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="mt-5">
                            <h1 class="mt-5">
                                {{ $aboutus[0]->title }}
                            </h1>
                            <p class="mt-5">
                                {!! $aboutus[0]->description !!}
                            </p>
                            <div class="text-center d-grid gap-2 mt-5">
                                <a href="" class="btn btn-outline-light ">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
