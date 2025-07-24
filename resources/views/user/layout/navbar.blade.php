<header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="d-none d-md-flex align-items-center">
                    <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-phone me-1"></i> Call us now {{ $company->phone }}
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ ($company && $company->logo) ? asset('storage/'.$company->logo) : asset('assets/user/img/logo.png') }}" alt="">
                  
                    <!-- Uncomment the line below if you also wish to use a text logo -->
                    <h1 class="sitename">{{ $company->name }}</h1> 
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('home') }}#hero" class="active">Home</a></li>
                        <li><a href="{{ route('home') }}#about">About</a></li>
                        <li><a href="{{ route('home') }}#product">Product</a></li>
                        <li><a href="{{ route('home') }}#management">Management</a></li>
                        <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
                        <li class="dropdown"><a href="#"><span>Delerlist</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ route('delearlist') }}">Dealer List</a></li>
                                <li><a href="{{ route('delearform') }}">Dealer Request Form</a></li>
                                
                            </ul>
                            </li>

                        <!-- <li><a href="#contact"></a></li> -->
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn" href="{{ route('contact') }}">Contact Us</a>

            </div>

        </div>

    </header>