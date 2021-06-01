<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <a href="/"><img src="{{URL::asset('storage/uploads/logo-icon.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li @if(\Request::is('/')) class="active" @endif><a href="/">Home</a></li>
                <li @if(\Request::is('/about') || \Request::is('/team') || \Request::is('/why-choose-us') || \Request::is('/clients') || \Request::is('/testimonials') || \Request::is('/FAQs')) class="drop-down active" @else class="drop-down" @endif><a href="#">About</a>
                    <ul>
                        <li> <a href="/about">About Us</a></li>
                        <li> <a href="/team">Our Team</a></li>
                        <li> <a href="/why-choose-us">Why Choose Us</a></li>
                        <li> <a href="/clients">Our Clients</a></li>
                        <li> <a href="/testimonials">Testimonials</a></li>
                        <li> <a href="/FAQs">FAQs</a></li>
                    </ul>
                </li>

                <li @if(\Request::is('/videos')) class="active" @endif>
                    <a href="/videos">Videos</a>
                </li>
                <li class="drop-down"><a href="/services">Services</a>
                    <ul>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Maintenance and consultancy</a>
                        </li>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Import/Supply</a>
                        </li>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Supply, design and commissioning</a>
                        </li>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Electrical, Electronics and Electro-mechanical Products</a>
                        </li>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Industrial Machinary</a>
                        </li>
                        <li @if(\Request::is('/service/detail')) class="active" @endif>
                            <a href="/service/detail">Installation and Implementation</a>
                        </li>
                    </ul>
                </li>
                <li @if(\Request::is('/porfolio')) class="active" @endif>
                    <a href="/portfolio">Portfolio</a>
                </li>
                <li @if(\Request::is('/news')) class="active" @endif>
                    <a href="/news">News</a>
                </li>
                <li @if(\Request::is('/contact')) class="active" @endif>
                    <a href="/contact">Contact Us</a>
                </li>

                <li class="get-started">@guest<a href="/contact">Get Started</a>@endguest @auth<a href="/auth/dashboard">Go to Dashboard</a>@endauth</li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
