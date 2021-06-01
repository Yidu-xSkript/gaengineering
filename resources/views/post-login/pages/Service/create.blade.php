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
                                        <div class="col-md-10">
                                            <h4 class="card-title">Service</h4>
                                        </div>

                                        <div class="col-md-2">
                                            <a class="btn btn-primary btn-block" href="/auth/service" style="color: #fff;">
                                                <i class="mdi mdi-eye"></i> View Service
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider w-25"></div>

                                    <p class="card-description mt-2 mb-2">
                                        Customize/Add your Services
                                    </p>

                                    <div class="dropdown-divider w-25 "></div>

                                    <form class="forms-sample mt-4" action="{{ route('service.admin.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title" style="font-size: 15px;">Title <small
                                                    style="color: red;">*</small></label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Title" required style="font-size: 15px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="image" style="font-size: 15px;">Image</label>
                                            <input type="file" name="imageURL" required class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" style="font-size: 15px;">slug <small
                                                    style="color: red;">*</small></label>
                                            <textarea class="form-control" rows="8" name="slug" id="slug"
                                                placeholder="Description/slug" style="font-size: 15px;" required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2 mt-4"><i
                                                class="mdi mdi-plus"></i>Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('post-login.index.footer')
    </div>

@endsection
