@extends('post-login.index.header')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              
              <div class="float-left">
                <i class="mdi mdi-account-location text-info icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right" style="font-size: 14px;">Contacts</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{App\Contact::all()->count()}}</h3>
                </div>
              </div>
            </div>
             <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
              <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Number of contacts
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-receipt text-warning icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right" style="font-size: 14px;">Services</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{App\Service::all()->count()}}</h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
              <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Number of created services
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-poll-box text-success icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right" style="font-size: 14px;">Portfolio</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{App\Portfolio::all()->count()}}</h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
              <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of portfolio/existing projects
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-cube text-danger icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right" style="font-size: 14px;">Gallery</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{App\Gallery::all()->count()}}</h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
              <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of Images and videos
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="float-left">
                <i class="mdi mdi-newspaper text-primary icon-lg"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right" style="font-size: 14px;">News</p>
                <div class="fluid-container">
                  <h3 class="font-weight-medium text-right mb-0">{{App\News::all()->count()}}</h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0" style="font-size: 14px;">
              <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Number of News Created
            </p>
          </div>
        </div>
      </div>
    </div>
    
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
 
  <!-- partial -->
</div>
 @include('post-login.index.footer')
@endsection