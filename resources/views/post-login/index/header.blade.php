<?php $settings = App\Models\Setting::first(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $settings->company_name }} | Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ URL::asset('post/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('post/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('post/vendors/css/vendor.bundle.addons.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('post/css/bootstrap.css') }}">

    <!-- endinject -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{ URL::asset('post/vendors/table/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('post/vendors/table/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('post/vendors/table/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('post/vendors/table/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('post/vendors/table/datatables-responsive/dataTables.responsive.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('post/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('post/fonts/font-awesome-4.7/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('post/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('post/css/style_admin.css') }}">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ URL::asset('storage/app/public/uploads/favicon.png') }}" />
</head>

<style type="text/css">
    p {
        font-size: 20px;
    }

    .page-body-wrapper:not(.auth-page) {
        padding-top: 63px;
    }

</style>

<body>

    <div class="container-scroller">
        @include('post-login.index.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('post-login.index.sidebar')
            @yield('content')
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ URL::asset('post/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ URL::asset('post/vendors/js/vendor.bundle.addons.js') }}"></script>

    <script src="{{ URL::asset('post/js/off-canvas.js') }}"></script>
    <script src="{{ URL::asset('post/js/misc.js') }}"></script>
    <script src="{{ URL::asset('post/js/dashboard.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#slug').summernote({
            height: 400,
            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20'],
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear', 'style']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['fontsize', ['fontsize']],
                ['height', ['height']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview', 'help']],
                ['table', ['table']],
            ]
        });
        $('#slug_modal').summernote({
            height: 400,
            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20'],
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear', 'style']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['fontsize', ['fontsize']],
                ['height', ['height']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview', 'help']],
                ['table', ['table']],
            ]
        });
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>
