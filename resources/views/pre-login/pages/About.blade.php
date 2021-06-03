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
                        <h2>About</h2>
                        <p>Get to know us well.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

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
                        <img src="{{ $about->thumbnail }}" class="img-fluid shadow" style="border-radius: 20px;" alt="">
                        <a href="{{ $about->video_url }}" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <?= $about->about_content; ?>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Work Process Section ======= -->
        <section id="work-process" class="work-process mt-5">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Work Process</h2>
                    <p>Our work process ranges from Design to Product to Project Management.</p>
                </div>

                @foreach($workProcess as $work)
                <div class="row content">
                    <div @if($work->image_position == "left") class="col-md-5" @else class="col-md-5 order-1 order-md-2" @endif data-aos="fade-right">
                        <img src="{{$work->image_url}}" class="img-fluid" alt="">
                    </div>
                    <div @if($work->image_position == "left") class="col-md-7 pt-4" @else class="col-md-7 pt-4 order-2 order-md-1" @endif data-aos="fade-left">
                        <h3>{{$work->title}}</h3>
                        <?= $work->slug; ?>
                    </div>
                </div>
                @endforeach
            </div>
        </section><!-- End Work Process Section -->

        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">


                <div class="section-title" data-aos="fade-up">
                    <h2>Our Skills</h2>
                    <p>Our skills range from Supply, design and commissioning to installation and implementation, and to
                        maintenance and consultancy. No matter what your project needs, we can deliver high quality work at
                        all areas as we have been doing for the past 10 years.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ $setting->skill_img }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>We have become amazingly experienced over the past 10 years since our company was first founded.
                        </h3>
                        <p>
                            We are one of the few companies that can offer the full spectrum of solutions related to
                            Electromechanical products, Systems Supply and maintenance including the implementation of the
                            Reliability-Centered Maintenance Strategy with Integrated Asset Condition Monitoring systems.
                        </p>

                        <div class="skills-content">
                            @foreach($skills as $skill)
                            <div class="progress">
                                <span class="skill">{{ $skill->name }}<i class="val">{{ $skill->progress }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->progress }}" aria-valuemin="0" aria-valuemax="{{ $skill->progress }}"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Our Skills Section -->

    </main><!-- End #main -->
@endsection
