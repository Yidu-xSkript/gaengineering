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
                        <h2>Our Clients</h2>
                        <!-- <p> Companies we have worked with. </p> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Our Clients</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- --- clients section ---  -->
        <section id="work-process" class="work-process">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Committed to delivering high quality service</h2>
                    <p>Serving our clients—including corporations, private equity firms, and government organizations—is a
                        privilege and responsibility that we do not take lightly.</p>
                </div>

                <div class="row content">
                    @foreach($clients as $client)
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5" data-aos="fade-right">
                                <img src="{{ $client->image_url }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 pt-4" data-aos="fade-left">
                                <h3>{{ $client->company_name }}</h3>
                                <p class="font-italic"><?= $client->slug; ?></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
