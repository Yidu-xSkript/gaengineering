@extends('post-login.index.header')
@section('content')

@include('partials.error2')
@include('partials.success2')

<div class="main-panel">
	<div class="content-wrapper">
	  	<div class="row">
	    	<div class="col-md-12 grid-margin stretch-card">
      			<div class="card">
        			<div class="card-body">
        				<div class="row">
        					<div class="col-md-12">
          						<h4 class="card-title">Videos</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">
        					Add Video
      					</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/partners" method="post" enctype="multipart/form-data">
                        @csrf
		                    <div class="form-group">
                                <label for="thumbnail" style="font-size: 15px;">Thumbnail</label>
                                <input type="file" class="form-control" required style="font-size: 16px;" id=thumbnail name="thumbnail" placeholder="Select Image">
                            </div>

                            <div class="form-group">
                                <label for="video_url" style="font-size: 15px;">Video URL</label>
                                <input type="url" class="form-control" name="video_url" id="video_url" placeholder="video url" style="font-size: 15px;">
                            </div>

			                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Add</button>
      					</form>
        			</div>
      			</div>
			</div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:17px; text-transform:uppercase;">
                            <b>Partners</b></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">Image</th>
                                        <th style="font-size: 18px;">Video URL</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($videos as $video)
                                    @include('post-login.partials.modal.video-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;"><img src="{{ $video->image_url }}" alt="{{$video->image_url}}"></td>
                                        <td style="font-size: 15px;">{{ $video->url }}</td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-video'.$video->id;?>><i class="mdi mdi-eimagedit"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-video'.$video->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
