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
          						<h4 class="card-title">Team</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Add Team Member</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/team" method="post" enctype="multipart/form-data">
                            @csrf
      						<div class="form-group">
		                      	<label for="name" style="font-size: 15px;">Name</label>
		                      	<input type="text" class="form-control"  style="font-size: 16px;" id=name name="name" placeholder="Name" required>
		                    </div>

                            <div class="form-group">
                                <label for="position" style="font-size: 15px;">Job Title</label>
                                <input type="text" class="form-control"  style="font-size: 16px;" id="position" name="position" placeholder="Job Title" required>
                            </div>

		                    <div class="form-group">
                                <label for="image" style="font-size: 15px;">Image</label>
                                <input type="file" class="form-control"  style="font-size: 16px;" id=image name="image_url" placeholder="Image">
                            </div>

		                    <div class="form-group">
		                      	<label for="slug" style="font-size: 15px;">Slug / Description</label>
		                      	<textarea class="form-control testimony" rows="10" style="font-size: 16px;" id="slug" name="slug" placeholder="Description" ></textarea>
		                    </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Twitter" style="font-size: 15px;">Twitter</label>
                                        <input type="url" class="form-control"  style="font-size: 16px;" id="Twitter" name="twitter" placeholder="Twitter Link" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="facebook" style="font-size: 15px;">Facebook</label>
                                        <input type="url" class="form-control"  style="font-size: 16px;" id='facebook' name="facebook" placeholder="Facebook" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="linked_in" style="font-size: 15px;">linked in</label>
                                        <input type="url" class="form-control"  style="font-size: 16px;" id="linked_in" name="linked_in" placeholder="Linked in" >
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="instagram" style="font-size: 15px;">Instagram</label>
                                        <input type="url" class="form-control"  style="font-size: 16px;" id="instagram" name="instagram" placeholder="Instagram" >
                                    </div>
                                </div>
                            </div>

			                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Add</button>
      					</form>
        			</div>
      			</div>
			</div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:17px; text-transform:uppercase;"><b>Team members</b></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">Name</th>
                                        <th style="font-size: 18px;">Image</th>
                                        <th style="font-size: 18px;">Company Position</th>
                                        <th style="font-size: 18px;">Slug</th>
                                        <th style="font-size: 18px;">Social Media</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($team as $person)
                                    @include('post-login.partials.team-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{$person->name}}</td>

                                        <td style="font-size: 15px;">@if(!is_null($person->image_url))<img src="{{ $person->image_url }}" alt="testimony">@endif</td>
                                        <td style="font-size: 15px;">{{$person->position}}</td>
                                        <td style="font-size: 15px;"><?= Str::limit($person->slug, 100); ?></td>

                                        <td style="font-size: 15px;">@if(!is_null($person->facebook))<a href="{{$person->facebook}}" target="#">Facebook</a>, @endif @if(!is_null($person->linked_in)) <br><a target="#" href="{{$person->linked_in}}">Linked In</a>, @endif @if(!is_null($person->instagram)) <br> <a target="#" href="{{$person->instagram}}">Instagram</a>, @endif @if(!is_null($person->twitter)) <br><a target="#" href="{{$person->twitter}}">Twitter</a> @endif</td>
                                        <td style="font-size: 17px;"><button type="button" class="btn btn-info"  data-toggle="modal" data-target=<?= '#edit-person'.$person->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-person'.$person->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
