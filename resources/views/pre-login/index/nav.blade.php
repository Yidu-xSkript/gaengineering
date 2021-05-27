<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <a href="/"><img src="{{URL::asset('storage/uploads/logo-icon.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li @if(\Request::is('/')) class="active" @endif><a href="/">Home</a></li>
                <li class="drop-down"><a href="#">About</a>
                    <ul>
                        <li @if(\Request::is('/about')) class="active" @endif >
                            <a href="/about">About Us</a>
                        </li>
                        <li @if(\Request::is('/team')) class="active" @endif >
                            <a href="/team">Our Team</a>
                        </li>
                        <li @if(\Request::is('/why-Choose-Us')) class="active" @endif >
                            <a href="/why-Choose-Us">Why Choose Us</a>
                        </li>
                        <li @if(\Request::is('/clients')) class="active" @endif >
                            <a href="/clients">Our Clients</a>
                        </li>
                        <li @if(\Request::is('/testimonials')) class="active" @endif >
                            <a href="/testimonials">Testimonials</a>
                        </li>
                        <li @if(\Request::is('/FAQs')) class="active" @endif >
                            <a href="/FAQs">FAQs</a>
                        </li>
                    </ul>
                </li>

                <li @if(\Request::is('/videos')) class="active" @endif>
                    <a href="/videos">Videos</a>
                </li>
                <li class="drop-down"><a href="/services">Services</a>
                    <ul>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Maintenance and consultancy</a>
                        </li>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Import/Supply</a>
                        </li>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Supply, design and commissioning</a>
                        </li>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Electrical, Electronics and Electro-mechanical Products</a>
                        </li>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Industrial Machinary</a>
                        </li>
                        <li @if(\Request::is('/service/1')) class="active" @endif>
                            <a href="/service/1">Installation and Implementation</a>
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

                <li class="get-started"><a href="contact.html">Get Started</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
