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
                        <h2>Why Choose Us</h2>
                        <p>Here is why you should choose us...</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Why Choose Us</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <section>
            <div class="container">
                @foreach($wcus as $wcu)
                <div>
                    <div class="row content why-bg">
                        <div class="col-md-5" data-aos="fade-right">
                            <img src="{{ $wcu->image_url }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4" data-aos="fade-left">
                            <h3>{{ $wcu->title }}</h3>
                            <p><?= $wcu->slug; ?></p>
                        </div>

                    </div>

                </div>

                <hr style="height: 15px;">

                @endforeach
            </div>
        </section>
    </main><!-- End #main -->
@endsection
