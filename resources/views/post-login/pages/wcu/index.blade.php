@extends('post-login.index.header')
@section('content')

    @include('partials.error2')
    @include('partials.success2')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch grid-margin">
                    <div class="row flex-grow">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="card-title">Add WCU</h4>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider w-25"></div>
                                    <p class="card-description mt-2 mb-2">Add Wcu</p>
                                    <div class="dropdown-divider w-25 "></div>

                                    <form class="forms-sample mt-4" action="/auth/why-choose-us" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title" style="font-size: 15px;">Title <small
                                                    style="color: red;">*</small></label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Title" style="font-size: 15px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="image" style="font-size: 15px;">Image </label>
                                            <input type="file" name="imageURL" class="form-control" id="image"
                                                placeholder="Image" style="font-size: 15px; font-weight: bold;">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" style="font-size: 15px;">Slug/Description <small style="color: red;">*</small></label>
                                            <textarea class="form-control" rows="8" name="slug" id="slug" placeholder="Slug / Description" style="font-size: 15px;" required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2 mt-4"><i
                                                class="mdi mdi-plus"></i>Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size:17px; text-transform:uppercase;">
                                <b>Why Choose Us</b></h4>
                            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 18px;">image</th>
                                            <th style="font-size: 18px;">title</th>
                                            <th style="font-size: 18px;">description</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($wcus as $wcu)
                                        @include('post-login.partials.wcu-modal')
                                        <tr class="record">
                                            <td style="font-size: 15px;"><img src="{{ $wcu->image_url }}" alt="{{$wcu->image_url}}"></td>
                                            <td style="font-size: 15px;">{{ $wcu->title }}</td>
                                            <td style="font-size: 15px;"><?= Str::limit($wcu->slug, 120); ?></td>

                                            <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit'.$wcu->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                            <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete'.$wcu->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
