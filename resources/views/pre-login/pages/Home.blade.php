@extends('pre-login.index.header')

@section('title', 'Home - GA Engineering')
@section('meta_keywords', 'Home - GA Engineering')
@section('meta_description', 'Home - GA Engineering')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url(pre/img/bg.jpg) top center; background-size: cover;">
        <div class="hero-container" data-aos="fade-up">
            <h1>Welcome to GA <br>Engineering</h1>
            <h2>We are a team of engineering professionals.</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="icofont-simple-smile"></i>
                                    <span data-toggle="counter-up">65</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="icofont-document-folder"></i>
                                    <span data-toggle="counter-up">85</span>
                                    <p>Projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box pb-5 pt-0 pt-lg-5">
                                    <i class="icofont-clock-time"></i>
                                    <span data-toggle="counter-up">10</span>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box pb-5 pt-0 pt-lg-5">
                                    <i class="icofont-award"></i>
                                    <span data-toggle="counter-up">15</span>
                                    <p>Awards</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline">
                        <img src="pre/img/about.jpg" class="img-fluid shadow-md" style="border-radius: 20px;" alt="">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>WELCOME TO G.A. GENERAL TRADING</h3>
                        <p class="">
                            Gezahegn Ayalew General Trading is a private company established in 2010 We specialize in
                            Providing Better Services for Supply And Installation Works of Electro-Mechanical and related
                            Equipment In Ethiopia, Our Company is well experienced in this sector and has multiple
                            professionals from different fields. Our company’s constant endeavor has been to extend our
                            expertise in designing and implementation of various plants and facilities both for governmental
                            and Non-governmental Organizations.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Electro-mechanical Parts</li>
                            <li><i class="bx bx-check-double"></i> Industrial automation system</li>
                            <li><i class="bx bx-check-double"></i> Security system (Automated Gate barrier with CCTV Camera)
                            </li>
                            <li><i class="bx bx-check-double"></i> Street light and Flood Light Assembly and installations
                            </li>
                            <li><i class="bx bx-check-double"></i> Heavy-duty Generators, Transformers and Control system
                            </li>
                            <li><i class="bx bx-check-double"></i> IP Video Surveillance System(CCTV) </li>
                            <li><i class="bx bx-check-double"></i> Network Design, installation and configuration </li>
                            <li><i class="bx bx-check-double"></i> Cloud Infrastructure </li>
                            <li><i class="bx bx-check-double"></i> Modular and Container Datacenter Design, installation and
                                configuration </li>
                        </ul>
                        <p>
                            We are one of the few companies that can offer the full spectrum of solutions related to
                            Electromechanical products, Systems Supply and maintenance including the implementation of the
                            Reliability-Centered Maintenance Strategy with Integrated Asset Condition Monitoring systems.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">

                <div class="section-title pt-5" data-aos="fade-up">
                    <h2>Our Services</h2>
                </div>

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

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="fade-in">

                <div class="text-center">
                    <h3>Ready to start working with us?</h3>
                    <p> </p>
                    <a class="cta-btn" href="tel:0920743179">Call us now</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Partners</h2>
                    <p> We work with companies in many sectors, here are a few of our partners. </p>
                </div>

                <div class="owl-carousel clients-carousel" data-aos="fade-up">
                    <a href="https://www.baltoncp.com/" target="_blank"><img src="pre/img/clients/balton.PNG"></a>
                    <a href="http://bstrading.biz" target="_blank"><img src="pre/img/clients/bs-trading.jpg"></a>
                    <a href="http://www.etonepower.com/" target="_blank"><img src="pre/img/clients/etone.png"></a>
                    <a href="https://www.huawei.com/en/" target="_blank"><img src="pre/img/clients/huawei_logo.webp"></a>
                    <a href="https://www.isinaydinlatma.com.tr/en/" target="_blank"><img
                            src="pre/img/clients/isin.png"></a>
                    <a href="http://en.kano-cn.com/" target="_blank"><img src="pre/img/clients/kano.png"></a>
                </div>

            </div>
        </section><!-- End Our Clients Section -->
    </main><!-- End #main -->
@endsection
