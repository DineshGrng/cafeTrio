<div>
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('dashboard.index') }}"> <img alt="image" src="/assets/img/logoss.jpg" class="header-logo" /> <span
                        class="logo-name">Cafe Trio </span>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Main</li>
                <li class="dropdown active">
                    <a href="{{ route('dashboard.index') }}" class="nav-link"><i data-feather="monitor"></i><span>
                            Dashboard</span></a>
                </li>
                <li class="dropdown ">
                    <a href="{{ route('front_home') }}" class="nav-link"><i data-feather="cast"></i><span>Front
                            Page</span></a>
                </li>
                <li class="menu-header">Company</li>

                <li><a class="nav-link" href="{{ route('company.index') }}"><i
                            data-feather="home"></i><span>Company</span></a></li>
                <li><a class="nav-link" href="{{ route('aboutus.index') }}"><i
                            data-feather="folder-minus"></i><span>About US</span></a></li>
                <li><a class="nav-link" href="{{ route('photo.index') }}"><i
                            data-feather="image"></i><span>Gallery</span></a></li>
                <li class="menu-header">menus</li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="list"></i><span>Menus</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('category.index') }}">Categories</a></li>
                        <li><a class="nav-link" href="{{ route('product.index') }}">Products</a></li>
                    </ul>
                </li>
                <li class="menu-header">reservation</li>
                <li><a class="nav-link" href="{{ route('feedback.index') }}"><i
                    data-feather="mail"></i><span>Feedback</span></a></li>

            </ul>
        </aside>
    </div>
</div>
