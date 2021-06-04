@extends('pre-login.index.header')

@section('title', 'Services - GA Engineering')
@section('meta_keywords', 'Services, GA Engineering, Gezahegn Ayalew')
@section('meta_description', 'These are the main services provided by GA Engineering')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Services</h2>
                        <p> These are the main services provided by GA Engineering... </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services ">
            <div class="container">

                <div class="row">
                    @for($i = 0; $i < count($services); $i++)
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon">
                                <img src="{{ $services[$i]->image_url }}" style="width: 65px;" alt="Service{{$i}}" srcset="{{ $services[$i]->image_url }}">
                            </div>
                            <h4 class="title"><a href="/service/{{ $services[$i]->id }}">{{ $services[$i]->title }}</a></h4>
                            <p><?= Str::limit($services[$i]->slug, 200); ?></p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
