@extends('pre-login.index.header')
@section('content')
    @include('partials.error2')
    @include('partials.success2')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Forgot-Password</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Forgot-Password</li>
                </ol>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Email</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
