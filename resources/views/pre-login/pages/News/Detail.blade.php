@extends('pre-login.index.header')

@section('title', $news->title . ' - News')
@section('meta_keywords', $news->title . ', News, GA Engineering, Gezahegn Ayalew, Engineering')
@section('meta_description', $news->slug)

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>News</h2>
                        <!-- <p> News title... </p> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/news">News</a></li>
                    <li>{{ $news->title }}</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ $news->image_url }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                {{ $news->title }}
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center" style="font-size:12px;"><i class="icofont-wall-clock" style="font-size:12px;"></i><time datetime="2020-01-01">{{ $news->created_at->diffForHumans() }}</time></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <?= $news->slug; ?>
                            </div>

                        </article><!-- End blog entry -->

                    </div>

                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="/news/search/find" method="GET" role="search">
                                    <input type="text" name="query" required>
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>

                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach($recents as $recent)
                                <div class="post-item clearfix">
                                    <img src="{{ $recent->image_url }}" alt="">
                                    <h4><a href="/news/{{ $recent->id }}">{{ $recent->title }}</a></h4>
                                    <time datetime="2020-01-01">{{ $recent->created_at->diffForHumans() }}</time>
                                </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->
                            <!-- End sidebar tags-->
                        </div><!-- End sidebar -->
                    </div><!-- End blog sidebar -->
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
