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

      					<p class="card-description mt-2 mb-2">

        					Create Partner

      					</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/partners" method="post" enctype="multipart/form-data">

                        @csrf

		                    <div class="form-group">

                            <label for="image" style="font-size: 20px;">Image</label>

                            <input type="file" class="form-control"  style="font-size: 16px;" id=image name="image" placeholder="Image">

                        </div>
			                
			                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Add</button>

      					</form>

        			</div>

      			</div>

			</div>

			<div class="col-lg-12 grid-margin stretch-card">

        <div class="card">

          <div class="card-body">

                <h4 class="card-title" style="font-size:17px; text-transform:uppercase;"><b>Partners</b></h4>

                <p class="card-description" style="font-size:15px; color:rgba(0,0,0,0.7);"> </p>

            <div class="dropdown-divider mb-4" style="width:25.5%;"></div>

            <div class="table-responsive">

              <table class="table table-hover" id="dataTables-example">

                <thead>

                  <tr>

                    <th style="font-size: 18px;">Image</th>
          
                    <th></th>

                    <th></th>

                  </tr>

                </thead>

                <tbody>

                  @foreach($partners as $partner)

                  @include('partials.modal.partner-modal')

                  <tr class="record">

                    <td style="font-size: 15px;"><img src="{{URL::asset('storage/app/public/uploads/partners/'.$partner->image)}}" alt="{{$partner->image}}"></td>
                   
                    <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-partner-image'.$partner->id;?>><i class="mdi mdi-image"></i> Update Image</button></td>              

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

<script src="js/jquery.min.js"></script>

<script>

$(document).ready(function() {

  $('#dataTables-example').DataTable({

    responsive: true

  });

});

</script> 


@endsection