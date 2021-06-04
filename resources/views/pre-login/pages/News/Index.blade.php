@extends('pre-login.index.header')

@section('title', 'News - GA Engineering')
@section('meta_keywords', 'News, GA Engineering, Gezahegn Ayalew')
@section('meta_description', 'We provide you the latest news from our company. Browse through our news.')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>News</h2>
                        <p>Browse through our news.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>News</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">
                    @foreach($newz as $news)
                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="/news/{{ $news->id }}">{{ $news->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="/news/{{ $news->id }}"><time datetime="2020-01-01">{{ $news->created_at->diffForHumans() }}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= Str::limit($news->slug, 200); ?>
                                </p>
                                <div class="read-more">
                                    <a href="/news/{{$news->id}}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>
                    @endforeach
                </div>


                {{ $newz->links('pre-login.pages.pagination.index') }}
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
