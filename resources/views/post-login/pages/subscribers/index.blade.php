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
                                <b>Subscription</b></h4>
                            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px;">Email</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($subscribers as $contact)
                                        @include('post-login.partials.subscription-modal')
                                            <tr class="record">
                                                <td style="font-size: 15px;">{{ $contact->email }}</td>
                                                <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete'.$contact->id;?>><i class="mdi mdi-delete"></i> Remove</button></td>
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
