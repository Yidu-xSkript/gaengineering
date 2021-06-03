@extends('pre-login.index.header')

@section('title', $portfolio->title . ' - GA Engineering')
@section('meta_keywords', $portfolio->title . ' , Portfolio, GA Engineering, Gezahegn Ayalew')
@section('meta_description', $portfolio->slug)

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>{{$portfolio->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>{{$portfolio->title}}</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        @foreach($portfolio->images as $image)
                        <img src="{{$image->image_url}}" class="img-fluid" alt="">
                        @endforeach
                    </div>

                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $portfolio->category->name }}</li>
                            <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                            <li><strong>Project date</strong>: {{ $portfolio->project_date }}</li>
                            <li><strong>Project URL</strong>: <a href="{{ $portfolio->portfolio_url }}">{{ $portfolio->client }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="portfolio-description">
                    <h2>{{$portfolio->title}}</h2>
                    <p>
                        <?= $portfolio->slug; ?>
                    </p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
@endsection
