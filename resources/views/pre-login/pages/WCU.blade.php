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
                <div>
                    <div class="row content why-bg">
                        <div class="col-md-5" data-aos="fade-right">
                            <img src="pre/img/work-process-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4" data-aos="fade-left">
                            <h3>Reason 1</h3>
                            <p>Description.</p>
                        </div>

                    </div>

                </div>

                <hr style="height: 15px;">

                <div class="row content ">
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="pre/img/work-process-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left">
                        <h3>Reason 2</h3>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
