@extends('pre-login.index.header')
@section('content')
    @include('partials.error2')
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
        <section id="login" class="login">
            <div class="container">
                <div class="row mt-5 ">
                    <div class="offset-md-2 col-lg-8 mt-5 mt-lg-0 shadow-md p-5" data-aos="fade-left">
                        <form action="{{ route('login.store') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required name="password" id="password" placeholder="Password" />
                            </div>
                            <button class="btn-block" style="font-weight: 900;" type="submit">Login</button>
                        </form>
                        <div class="text-center"><a href="/forgot-password">Forgot your password?</a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
