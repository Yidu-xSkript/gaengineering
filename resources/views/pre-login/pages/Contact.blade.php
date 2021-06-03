@extends('pre-login.index.header')

@section('title', 'Contact - GA Engineering')
@section('meta_keywords', 'Contact Us, GA Engineering, Contact, Talk with us, Gezahegn Ayalew')
@section('meta_description', 'We will get back to you soon!')

@section('content')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Contact</h2>
                        <p>We will get back to you soon!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="{{ $setting->map_location }}"
                        style="border:0;" loading="lazy" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?= $setting->location; ?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p> <a href="tel:{{$setting->phone_number}}"> {{$setting->phone_number}} </a></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                        <form action="/contact" method="post" role="form" class="login">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Your Email" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" required placeholder="Message"></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
