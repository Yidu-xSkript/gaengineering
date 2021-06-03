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
                        <h2>Videos</h2>
                        <p>Here is us in action.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Videos</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="" class="videos">
            <div class="container">
                <div class="row">
                    @foreach($videos as $video)
                    <div class="col-lg-4 video-box">
                        <img src="{{ $video->thumbnail }}" class="video-img-container" alt="">
                        <a href="{{ $video->video_url }}" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
