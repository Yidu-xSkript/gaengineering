@extends('pre-login.index.header')

@section('title', 'FAQs - GA Engineering')
@section('meta_keywords', 'FAQs - GA Engineering, Faq, frequently asked questions')
@section('meta_description', 'Home - GA Engineering')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Frequently Asked Questions</h2>
                        <p>You may have many questions regarding what we do. Here are the main questions we get asked frequently and their answers. </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>FAQs</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                @foreach($faqs as $faq)
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
                    <div class="col-lg-5">
                        <i class="bx bx-help-circle"></i>
                        <h4>{{ $faq->question }}</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div><!-- End F.A.Q Item-->
                @endforeach

            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </main><!-- End #main -->
@endsection
