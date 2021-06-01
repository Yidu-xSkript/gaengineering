@extends('post-login.index.header')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/contact" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-location text-info icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Contacts</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">
                                        {{ App\Models\Contact::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Clients who are in contact
                            with us
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/service" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-receipt text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Services</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">
                                        {{ App\Models\Service::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Number of created services
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/portfolio" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-poll-box text-success icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Portfolios</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">
                                        {{ App\Models\Portfolio::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of portfolio/existing projects
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/video" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-cube text-danger icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Videos</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">0</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of videos
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/news" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-newspaper text-success icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    News</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of News Created
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/clients" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-multiple-plus text-primary icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Clients</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of clients we have
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/manager" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-outline text-primary icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Content Managers</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of Content Managers created
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <a href="/auth/team" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-multiple text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Team Members</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of team members
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                <a href="/auth/testimony" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-thought-bubble-outline text-info icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Testimonies</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of testimonies we acquired
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                <a href="/auth/partners" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-multiple-outline text-primary icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Partners</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of partners we worked with
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
                <a href="/auth/newsletter" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-calendar-multiple-check text-success icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Newsletters</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of newsletter we created
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
                <a href="/auth/failed-emails" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-email-alert text-danger icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 16px; font-weight: 700;">
                                    Failed Emails</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of failed emails that need to be resent
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
                <a href="/auth/subscription" class="card-href card card-statistics"
                    style="color: #000 !important;text-decoration: none !important; border-radius: 10px;">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-account-multiple-plus-outline text-primary icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right" style="font-size: 15px; font-weight: 700;">
                                    Subscribers</p>
                                <div class="fluid-container">
                                    <h3 class="font-weight-medium text-right mb-0">{{ App\Models\News::all()->count() }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
                            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Total number of subscribers
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('post-login.index.footer')
@endsection
