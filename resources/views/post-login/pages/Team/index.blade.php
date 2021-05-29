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

      					<p class="card-description mt-2 mb-2">

        					Create Person

      					</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/team" method="post" enctype="multipart/form-data">

                        @csrf

      						      <div class="form-group">

		                      	<label for="name" style="font-size: 20px;">Name</label>

		                      	<input type="text" class="form-control"  style="font-size: 16px;" id=name name="name" placeholder="Name" required>

		                    </div>

                        <div class="form-group">

                            <label for="position" style="font-size: 20px;">Company Position</label>

                            <input type="text" class="form-control"  style="font-size: 16px;" id="position" name="position" placeholder="Company Position" required>

                        </div>

		                    <div class="form-group">

                            <label for="image" style="font-size: 20px;">Image</label>

                            <input type="file" class="form-control"  style="font-size: 16px;" id=image name="image" placeholder="Image">

                        </div>

		                    <div class="form-group">

		                      	<label for="testimony" style="font-size: 20px;">Slug/Description</label>

		                      	<textarea class="form-control testimony" rows="10" style="font-size: 16px;" id="testimony" name="slug" placeholder=" Description" ></textarea>

		                    </div>

                        <div class="row">
                         
                          <div class="col-md-3">
                            
                            <div class="form-group">

                                <label for="Twitter" style="font-size: 20px;">Twitter</label>

                                <input type="text" class="form-control"  style="font-size: 16px;" id="Twitter" name="twitter" placeholder="Twitter Link" >

                            </div>

                          </div>

                          <div class="col-md-3">
                            
                            <div class="form-group">

                                <label for="facebook" style="font-size: 20px;">Facebook</label>

                                <input type="text" class="form-control"  style="font-size: 16px;" id='facebook' name="facebook" placeholder="Facebook" >

                            </div>
                            
                          </div>

                          <div class="col-md-3">
                            
                            <div class="form-group">

                                <label for="google_plus" style="font-size: 20px;">google plus</label>

                                <input type="text" class="form-control"  style="font-size: 16px;" id="google_plus" name="google_plus" placeholder="Google plus" >

                            </div>
                            
                          </div>

                          <div class="col-md-3">
                            
                            <div class="form-group">

                                <label for="instagram" style="font-size: 20px;">Instagram</label>

                                <input type="text" class="form-control"  style="font-size: 16px;" id="instagram" name="instagram" placeholder="Instagram" >

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

                <h4 class="card-title" style="font-size:17px; text-transform:uppercase;"><b>Team</b></h4>

                <p class="card-description" style="font-size:15px; color:rgba(0,0,0,0.7);"> </p>

            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>

            <div class="table-responsive">

              <table class="table table-hover" id="dataTables-example">

                <thead>

                  <tr>

                    <th style="font-size: 18px;">Name</th>

                    <th style="font-size: 18px;">Image</th>

                    <th style="font-size: 18px;">Company Position</th>

                    <th style="font-size: 18px;">Social Media</th>
          
                    <th></th>

                    <th></th>

                    <th></th>

                  </tr>

                </thead>

                <tbody>

                  @foreach($team as $person)

                  @include('partials.modal.team-modal')

                  <tr class="record">

                    <td style="font-size: 15px;">{{$person->name}}</td>


                    <td style="font-size: 15px;">@if(!is_null($person->image))<img src="{{URL::asset('storage/app/public/uploads/team/'.$person->image)}}" alt="testimony">@endif</td>
                    <td style="font-size: 15px;"><?= str_limit($person->slug, 200); ?></td>

                    <td style="font-size: 15px;">@if(!is_null($person->facebook)){{$person->facebook}}, @endif @if(!is_null($person->google_plus)) <br>{{$person->google_plus}}, @endif @if(!is_null($person->instagram)) <br> {{$person->instagram}}, @endif @if(!is_null($person->twitter)) <br>{{$person->twitter}} @endif</td>
                   
                    <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-person-image'.$person->id;?>><i class="mdi mdi-image"></i> Update Image</button></td>              

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

<script src="js/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function() {

    $(".testimony").wysihtml5();

  });

</script>

<script>

$(document).ready(function() {

  $('#dataTables-example').DataTable({

    responsive: true

  });

});

</script> 


@endsection