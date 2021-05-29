@extends('pre-login.index.header')
@section('content')
    @include('partials.error2')
    @include('partials.success2')
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">
                    <div class="breadcrumb-hero">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Login</li>
                </ol>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
                        <form action="{{ route('login') }}" method="POST" role="form" class="php-email-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" />
                            </div>
                            <div class="text-center"><button type="submit">Login</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
