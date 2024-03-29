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
          						<h4 class="card-title">Partners</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create Partner</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/partners" method="post" enctype="multipart/form-data">
                        @csrf
		                    <div class="form-group">
                                <label for="image" style="font-size: 15px;">Image</label>
                                <input type="file" class="form-control" required style="font-size: 16px;" id=image name="imageURL" placeholder="Image">
                            </div>
                            <div class="form-group">
                                <label for="url" style="font-size: 15px;">URL</label>
                                <input type="url" class="form-control" name="url" id="url" placeholder="URL" style="font-size: 15px;" required>
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
                                        <th style="font-size: 18px;">URL</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($partners as $partner)
                                    @include('post-login.partials.partner-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;"><img src="{{ $partner->image_url }}" alt="{{$partner->image_url}}"></td>
                                        <td style="font-size: 15px;">{{ $partner->url }}</td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit-partner-image'.$partner->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-partner'.$partner->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
