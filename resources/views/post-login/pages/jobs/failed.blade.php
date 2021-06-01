@extends('post-login.index.header')
@section('content')

    @include('partials.error2')
    @include('partials.success2')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:17px; text-transform:uppercase;">
                                <b>Failed Emails</b></h4>
                            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px;">UUID</th>
                                            <th style="font-size: 18px;">payload</th>
                                            <th style="font-size: 18px;">failed at</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($failed_jobs as $failed)
                                            <tr class="record">
                                                <td style="font-size: 15px;">{{ $failed->uuid }}</td>
                                                <td style="font-size: 15px;">{{ $failed->payload }}</td>
                                                <td style="font-size: 15px;">{{ $failed->failed_at }}</td>
                                                <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#resend-failed'.$failed->id;?>><i class="mdi mdi-delete"></i> Resend</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('post-login.index.footer')
    </div>
@endsection
