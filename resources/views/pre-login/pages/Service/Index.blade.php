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
                        <h2>Services</h2>
                        <p> These are the main services provided by GA Engineering... </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="service-single.html">Maintenance and consultancy</a></h4>
                            <p class="description">Regular maintenance helps ensure smooth system operation and equipment
                                longevity....</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Import/Supply</a></h4>
                            <p class="description">Telecommunications Materials, Security Materials, Chemicals and Polymers
                                Products, Different types of vehicles...</p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Supply, design and commissioning</a></h4>
                            <p class="description">Stand By Generators, UPS, Automatic Transfer Switch, Gen-set Controller
                                Boards, MCCB etc.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">Electrical, Electronics and Electro-mechanical Products</a></h4>
                            <p class="description">Electronics equipment & Electrical Equipment...</p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="">Industrial Machinary</a></h4>
                            <p class="description">Universal Manufacturing machinery, Plastic Product machinery, Machinery
                                and spare parts</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="">Installation and Implementation</a></h4>
                            <p class="description">Our installation teams are available to provide a comprehensive
                                service...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
