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
                        <h2>Portfolio Details</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="/pre/img/portfolio/news-4.jpg" class="img-fluid" alt="">
                        <img src="/pre/img/portfolio/news-2.jpg" class="img-fluid" alt="">
                        <img src="/pre/img/portfolio/news-4.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Installation</li>
                            <li><strong>Client</strong>: Ethiopian Airlines</li>
                            <li><strong>Project date</strong>: 01 March, 2021</li>
                            <li><strong>Project URL</strong>: <a href="https://www.ethiopianairlines.com/">Ethiopian
                                    Airlines</a></li>
                        </ul>
                    </div>
                </div>

                <div class="portfolio-description">
                    <h2>Our Mega Project with Ethiopian Airlines</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia
                        quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem
                        officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum
                        deserunt eius.
                    </p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
@endsection
