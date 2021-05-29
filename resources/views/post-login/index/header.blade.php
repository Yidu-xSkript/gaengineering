<?php

$settings = App\CompanySettings::first();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{$settings->company_name}} | Admin</title>

  <!-- ################ Identification ################# -->

  <meta name="description" content="_J_HackeR_ ;-)=)" />

  <meta name="keywords" content="_+251-932-38-23-36_" />

  <meta name="author" content="Yididya Goitom" />

  <!-- ################################################# -->

  <!-- plugins:css -->


  <link rel="stylesheet" href="{{ URL::asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.addons.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap3-wysihtml5.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">

  <!-- endinject -->

  <script src="{{ URL::asset('vendors/table/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ URL::asset('vendors/table/metisMenu/metisMenu.min.js') }}"></script>


  <script src="{{ URL::asset('vendors/table/datatables/js/jquery.dataTables.min.js') }}"></script>

  <script src="{{ URL::asset('vendors/table/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>

  <script src="{{ URL::asset('vendors/table/datatables-responsive/dataTables.responsive.js') }}"></script>
  
  <link rel="stylesheet" href="{{ URL::asset('fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome-4.7/css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}">

  <!-- inject:css -->

  <link rel="stylesheet" href="{{ URL::asset('css/style_admin.css') }}">

  <!-- endinject -->

  <link rel="shortcut icon" href="{{URL::asset('storage/app/public/uploads/favicon.png')}}" />

</head>

<style type="text/css">
  p{
    font-size: 20px;
  }
  .page-body-wrapper:not(.auth-page) {
    padding-top: 63px; }
</style>

<body>

  <div class="container-scroller">

    @include('post-login.index.navbar')

    <div class="container-fluid page-body-wrapper">

      @include('post-login.index.sidebar')

      @yield('content')

    </div>

  </div>
  
  <!-- container-scroller -->

  <!-- plugins:js -->
  
  <script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>
  
  <script src="{{ URL::asset('vendors/js/vendor.bundle.addons.js') }}"></script>

  <!-- endinject -->
  
  <!-- Plugin js for this page-->
  
  <!-- End plugin js for this page-->
  
  <!-- inject:js -->
  
  <script src="{{ URL::asset('js/off-canvas.js') }}"></script>
  
  <script src="{{ URL::asset('js/misc.js') }}"></script>
  
  <!-- endinject -->
  
  <!-- Custom js for this page-->
  
  <script src="{{ URL::asset('js/dashboard.js') }}"></script>
  
  <!-- End custom js for this page-->

  <script src="{{ URL::asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>

</body>

</html>