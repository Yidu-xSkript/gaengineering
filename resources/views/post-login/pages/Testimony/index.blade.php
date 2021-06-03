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
          						<h4 class="card-title">Testimony</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create Testimony</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/testimony" method="post" enctype="multipart/form-data">
                        @csrf
		                    <div class="form-group">
                                <label for="image" style="font-size: 15px;">Image</label>
                                <input type="file" class="form-control" required style="font-size: 16px;" id=image name="image_url" placeholder="Image">
                            </div>

                            <div class="form-group">
                                <label for="name" style="font-size: 15px;">Name (Testimony giver)</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="name" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="company_name" style="font-size: 15px;">Company name</label>
                                <input type="text" class="form-control" name="company_name" id="company name" placeholder="Company name" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="job_title" style="font-size: 15px;">Job Title</label>
                                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="slug" style="font-size: 15px;">Testimony</label>
                                <textarea class="form-control" rows="8" name="testimony" id="slug" placeholder="Description/slug" required></textarea>
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
                                        <th style="font-size: 18px;">name</th>
                                        <th style="font-size: 18px;">company name</th>
                                        <th style="font-size: 18px;">job title</th>
                                        <th style="font-size: 18px;">testimony</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($testimonies as $testimony)
                                    @include('post-login.partials.testimony-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;"><img src="{{ $testimony->image_url }}" alt="{{$testimony->image_url}}"></td>
                                        <td style="font-size: 15px;">{{ $testimony->name }}</td>
                                        <td style="font-size: 15px;">{{ $testimony->company_name }}</td>
                                        <td style="font-size: 15px;">{{ $testimony->job_title }}</td>
                                        <td style="font-size: 15px;"><?= Str::limit($testimony->testimony, 80); ?></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit-testimony'.$testimony->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-testimony'.$testimony->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
