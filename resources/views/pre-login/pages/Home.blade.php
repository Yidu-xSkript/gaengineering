@extends('pre-login.index.header')

@section('title', 'Home - GA Engineering')
@section('meta_keywords', 'Gezahegn Ayalew, GA Engineering, Home Page, Engineering Co., GA general trading')
@section('meta_description', 'Home - GA Engineering')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url({{$header->image_url}}) top center; background-size: cover;">
        <div class="hero-container" data-aos="fade-up">
            <h1 style="width: 20%;">{{ $header->title }}</h1>
            <h2>{{$header->slug}}</h2>
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
                                    <span data-toggle="counter-up">{{$setting->happy_client}}</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box py-5">
                                    <i class="icofont-document-folder"></i>
                                    <span data-toggle="counter-up">{{$setting->project}}</span>
                                    <p>Projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box pb-5 pt-0 pt-lg-5">
                                    <i class="icofont-clock-time"></i>
                                    <span data-toggle="counter-up">{{$setting->years_of_experience}}</span>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box pb-5 pt-0 pt-lg-5">
                                    <i class="icofont-award"></i>
                                    <span data-toggle="counter-up">{{$setting->award}}</span>
                                    <p>Awards</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline">
                        <img src="{{ $about->thumbnail }}" class="img-fluid shadow-md" style="border-radius: 20px;" alt="{{ $about->thumbnail }}">
                        <a href="{{ $about->video_url }}" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <?= $about->about_content; ?>
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
                    @for($i = 0; $i < count($services); $i++)
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon">
                                <img src="{{ $services[$i]->image_url }}" style="width: 65px;" alt="Service{{$i}}" srcset="{{ $services[$i]->image_url }}">
                            </div>
                            <h4 class="title"><a href="/service/{{ $services[$i]->id }}">{{ $services[$i]->title }}</a></h4>
                            <p><?= Str::limit($services[$i]->slug, 200); ?></p>
                        </div>
                    </div>
                    @endfor
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="fade-in">

                <div class="text-center">
                    <h3>Ready to start working with us?</h3>
                    <p> </p>
                    <a class="cta-btn" href="tel:{{$setting->phone_number}}">Call us now</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        @if(!is_null($partners))
        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Partners</h2>
                    <p> We work with companies in many sectors, here are a few of our partners. </p>
                </div>

                <div class="owl-carousel clients-carousel" data-aos="fade-up">
                    @foreach($partners as $partner)
                    <a href="{{ $partner->url }}" target="_blank"><img src="{{ $partner->image_url }}"></a>
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Clients Section -->
        @endif
    </main><!-- End #main -->
@endsection
