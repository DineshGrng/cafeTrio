<footer>
    <style>
        .navs a{

            /* text-decoration: none; */
            color : rgb(224, 224, 224) !important;;
        }
    </style>
    <div class="card bg-primary text-light">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="fs-4">
                        <div>
                            <h1>
                                {{ $company[0]->name }}
                            </h1>
                        </div>
                        <div class=" mt-5">
                            <i class="fa-solid fa-location-dot"></i>
                            {{ $company[0]->address }}
                        </div>
                        <div class="mt-3">
                            <span>
                                <i class="fa-solid fa-mobile-screen"></i>
                                {{ $company[0]->phone1 }}
                            </span>||
                            <span>
                                <i class="fa-solid fa-phone"></i>
                                {{ $company[0]->phone2 }}
                            </span>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-envelope"></i>
                            {{ $company[0]->email }}
                        </div>

                        <div class="my-5">
                            <h3>
                                We are available on
                            </h3>
                            <div class="mt-3 text-dec" >
                                <a href="{{ $company[0]->facebook }}" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="{{ $company[0]->instagram }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="" target="_blank">
                                    <i class="fa-brands fa-square-youtube"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <h1>
                        quick Link's
                    </h1>
                    <div class="my-3 fs-3 navs" >

                       <div>
                        <a href="{{ route('front_home') }}">home</a>
                       </div>
                       <div>
                        <a href="{{ route('front_about') }}">Our Story</a>
                       </div>
                       <div>
                        <a href="">Catrgories</a>
                       </div>
                       <div>
                        <a  href="{{ route('front_contact')}}">Contact US</a>
                       </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mt-3">
                        <img src="{{ asset($company[0]->logo) }}" alt="" style="height: 355px">
                    </div>
                    <h1 class="text-light">
                        {{ $company[0]->name }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</footer>
