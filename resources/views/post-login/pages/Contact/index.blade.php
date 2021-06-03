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
                                <b>Contacts</b></h4>
                            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px;">Name</th>
                                            <th style="font-size: 18px;">email</th>
                                            <th style="font-size: 18px;">subject</th>
                                            <th style="font-size: 18px;">message</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            @include('post-login.partials.contact-modal')
                                            <tr class="record">
                                                <td style="font-size: 15px;">{{ $contact->name }}</td>
                                                <td style="font-size: 15px;">{{ $contact->email }}</td>
                                                <td style="font-size: 15px;">{{ $contact->subject }}</td>
                                                <td style="font-size: 15px;">{{ $contact->message }}</td>
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
