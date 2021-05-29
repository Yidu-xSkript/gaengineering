@extends('pre-login.index.header')

@section('title', 'Home - GA Engineering')
@section('meta_keywords', 'Home - GA Engineering')
@section('meta_description', 'Home - GA Engineering')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Service name</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li> <a href="/services">Services</a></li>
                    <li>Maintenance</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="services">
            <div class="container">
                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="/pre/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left">
                        <h3>Our maintenance and consultancy service is one of our highly desired services - here is why...
                        </h3>
                        <p>
                            Our installation teams are available to provide a comprehensive service to supply, install,
                            connect, test and commission for Electrical power products and electromechanical control system.
                            If you would prefer to carry out the civil foundation work yourselves then we can oversee and
                            advise contractors to ensure that the ground works are completed to specification.
                        </p>
                        <ul>
                            <li>Design</li>
                            <li>Product</li>
                            <li>Project Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
