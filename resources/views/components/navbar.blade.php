<div>
    <style>
        .parents {
            display: grid;
            grid-template-columns: 2fr 1fr 2fr;
            gap: 10px;
            /* text-align: center; */
            margin-top: 15px;
        }

        .nav-link {
            color: rgb(214, 211, 211) !important;
            font-size: 20px;
        }

        .linksLogo a {
            text-decoration: none;
            color: rgb(208, 202, 202) !important;
            font-size: 20px;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="parents">
                <div class="my-5 ">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                {{-- <h1>{{ $company }}</h1> --}}
                                <a class="nav-link active" aria-current="page" href="{{ route('front_home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front_about') }}">Our Story</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
                                <ul class="dropdown-menu bg-light ">
                                    <li>
                                        @foreach ($category as $item)
                                            <a class="dropdown-item " href="/product-category/{{ $item->id }}" >
                                                {{ $item->name }}</a>
                                        @endforeach
                                    </li>
                                    {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front_contact')}}">Contact Us</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li> --}}



                        </ul>
                    </div>
                </div>
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset($company[0]->logo) }}" alt="" height="150px" class="rounded">
                    </a>
                </div>
                <div class="mt-4 linksLogo d-flex ">
                    <div class="mx-3">
                        <div>
                            <a href="#">
                                <i class="fa-solid fa-location-dot"></i>
                                <span class=" fs-4">{{ $company[0]->address }} </span>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <i class="fa-solid fa-square-phone"></i>
                                <span class=" fs-4">{{ $company[0]->phone1 }}, {{ $company[0]->phone1 }}</span>
                            </a>
                        </div>
                    </div>

                    <div class="mx-3">

                        <a href="{{ $company[0]->facebook }}" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="{{ $company[0]->instagram }}" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="" target="_blank">
                            <i class="fa-brands fa-square-youtube"></i>
                        </a>
                        <div>
                            <a href="{{ route('login') }}" class="login">
                                <i class="fa-regular fa-user">Login</i>
                            </a>
                        </div>
                    </div>

                    {{-- <div
                            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                         <a href="{{ url('/dashboard') }}" class="btn btn-lg btn-light">Dashboard</a>
                                    @else


                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="login">Register</a>
                                    @endif
                                    @endauth
                                </div>
                            @endif
                        </div> --}}

                </div>
            </div>

        </div>
    </nav>

</div>
