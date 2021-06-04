@extends('pre-login.index.header')

@section('title', 'Testimonials - GA Engineering')
@section('meta_keywords', 'Testimonials, Testimonies, GA Engineering, Gezahegn Ayalew, Engineering')
@section('meta_description', 'Witness more about what our clients are saying about us')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Our Testimonials</h2>
                        <p>What they are saying about us...</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Testimonials</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <section class="section-primary t-bordered">
            <div class="container">
                <div class="row testimonial-three testimonial-three--col-three">
                    @foreach($testimonies as $testimony)
                    <div class="col-md-4 testimonial-three-col">
                        <div class="testimonial-inner">
                            <div class="testimonial-image" itemprop="image">
                                <img width="180" height="180" style="background-position: center; object-fit: cover;" src="{{$testimony->image_url}}">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    <?= $testimony->testimony; ?>
                                </p>
                            </div>
                            <div class="testimonial-meta">
                                <strong class="testimonial-name" itemprop="name">{{$testimony->name}}</strong>
                                <span class="testimonial-job-title" itemprop="jobTitle">{{$testimony->job_title}}</span> – <a
                                    class="testimonial-link" href="#">{{ $testimony->company_name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
