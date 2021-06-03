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
                        <h2>Portolio</h2>
                        <p> Here are our recently completed projects.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Portolio</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach($categories as $category)
                            <li data-filter=".filter-{{$category->id}}">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->category->id}}">
                        <div class="portfolio-wrap">
                            <img src="{{ $portfolio->images[0]->image_url }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{ $portfolio->category->name }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ $portfolio->images[0]->image_url }}" data-gall="portfolioGallery" class="venobox"
                                        title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="/portfolio/{{$portfolio->id}}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
@endsection
