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
        <section id="login" class="login">
            <div class="container">
                <div class="row mt-5">
                    <div class="offset-md-2 col-lg-8 mt-5 mt-lg-0 shadow-md p-5" data-aos="fade-left">
                        <form action="{{ route('password.email') }}" method="POST" role="form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="text-center"><button type="submit">Send Email</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
