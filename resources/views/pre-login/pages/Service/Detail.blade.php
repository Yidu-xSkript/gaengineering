@extends('pre-login.index.header')

@section('title', $service->title.' - GA Engineering')
@section('meta_keywords', 'Service, Services we provide, Services - GA Engineering, Gezahegn Ayalew, GA general trading, '. $service->title)
@section('meta_description', $service->slug)

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>{{ $service->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li> <a href="/services">Services</a></li>
                    <li>{{$service->title}}</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="services">
            <div class="container">
                <div class="row content">
                    <div class="col-md-12" data-aos="fade-right">
                        <?= $service->slug; ?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
