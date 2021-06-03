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
                        <h2>Team</h2>
                        <p>Our company is comprised of many talented professionals with strong expertise in the Engineering industry.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Team</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    @foreach($team as $member)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="{{ $member->image_url }}" class="img-fluid" alt="">
                                <div class="social">
                                    @if(!is_null($member->twitter))<a href="{{ $member->twitter }}" target="_blank"><i class="icofont-twitter"></i></a>@endif
                                    @if(!is_null($member->facebook))<a href="{{ $member->facebook }}" target="_blank"><i class="icofont-facebook"></i></a>@endif
                                    @if(!is_null($member->instagram))<a href="{{ $member->instagram }}" target="_blank"><i class="icofont-instagram"></i></a>@endif
                                    @if(!is_null($member->linked_in))<a href="{{ $member->linked_in }}" target="_blank"><i class="icofont-linkedin"></i></a>@endif
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $member->name }}</h4>
                                <span>{{ $member->position }}</span>
                                <p><?= $member->slug; ?></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
@endsection
