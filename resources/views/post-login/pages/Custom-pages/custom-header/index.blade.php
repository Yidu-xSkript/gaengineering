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
                                            <h4 class="card-title">Customize</h4>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider w-25"></div>
                                    <p class="card-description mt-2 mb-2">Cusomtize Header</p>
                                    <div class="dropdown-divider w-25 "></div>

                                    <form class="forms-sample mt-4" action="/auth/custom-header" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method("PATCH")
                                        <div class="form-group">
                                            <label for="title" style="font-size: 15px;">Title <small
                                                    style="color: red;">*</small></label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Title" value="{{ $header->title }}" style="font-size: 15px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" style="font-size: 15px;">Slug/Description <small style="color: red;">*</small></label>
                                            <textarea class="form-control" rows="8" name="slug" id="slug" placeholder="Slug / Description" style="font-size: 15px;" required>
                                            <?= $header->slug; ?>
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image" style="font-size: 15px;">Image </label>
                                            <input type="file" name="imageURL" class="form-control" id="image"
                                                placeholder="Image" style="font-size: 15px; font-weight: bold;">
                                        </div>

                                        @if(!is_null($header->image_url))
                                        <img src="{{ $header->image_url }}" class="img-card" style="width: 100%; height: auto; object-fit: cover;">
                                        @endif

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
