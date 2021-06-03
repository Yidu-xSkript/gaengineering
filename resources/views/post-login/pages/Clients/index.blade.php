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
          						<h4 class="card-title">Clients</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">
        					Create Client
      					</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/clients" method="post" enctype="multipart/form-data">
                        @csrf
		                    <div class="form-group">
                                <label for="image" style="font-size: 15px;">Image</label>
                                <input type="file" class="form-control" required style="font-size: 16px;" id=image name="imageURL" placeholder="Image">
                            </div>
                            <div class="form-group">
                                <label for="company name" style="font-size: 15px;">Company Name</label>
                                <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" style="font-size: 15px;">
                            </div>
                            <div class="form-group">
                                <label for="slug" style="font-size: 15px;">Description/slug <small style="color: red;">*</small></label>
                                <textarea class="form-control" rows="8" name="slug" id="slug" placeholder="Slug / Description" required></textarea>
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
                            <b>Clients</b></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">Image</th>
                                        <th style="font-size: 18px;">Company name</th>
                                        <th style="font-size: 18px;">Description</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($clients as $client)
                                    @include('post-login.partials.client-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;"><img src="{{ $client->image_url }}" alt="{{$client->image_url}}"></td>
                                        <td style="font-size: 15px;">{{ $client->company_name }}</td>
                                        <td style="font-size: 15px;"><?= Str::limit($client->slug, 100); ?></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit'.$client->id;?>><i class="mdi mdi-pencil"></i> Update Client</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete'.$client->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
