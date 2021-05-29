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

			              				<a class="btn btn-primary btn-block" href="admin-service" style="color: #fff;">		
							                <i class="mdi mdi-eye"></i> View Service

							            </a>

	            					</div>

	            				</div>

	            				<div class="dropdown-divider w-25"></div>

              					<p class="card-description mt-2 mb-2">

                					Customize/Add your Services

              					</p>

              					<div class="dropdown-divider w-25 "></div>

              					<form class="forms-sample mt-4" action="/add-service" method="post" enctype="multipart/form-data">

              						@csrf

					                <div class="form-group">

					                  	<label for="title" style="font-size: 15px;">Title <small style="color: red;">*</small></label>

					                  	<input type="text" class="form-control" name="title" id="title" placeholder="Title" style="font-size: 15px;">

					                </div>

					                <div class="form-group">

					                  	<label for="icon" style="font-size: 15px;">Icon <small style="color: red;">*</small></label>

					                  	<select class="form-control" style="font-size: 17px;" name="icon">

					                  		<option value="" selected="" disabled="">Please select an icon</option>
					                  		<option value="flaticon-ideas">Ideas</option>
					                  		<option value="flaticon-flasks">Flasks</option>
					                  		<option value="flaticon-analysis">analysis</option>
					                  		<option value="flaticon-ux-design">ux-design</option>
					                  		<option value="flaticon-web-design">web-design</option>
					                  		<option value="flaticon-idea">idea</option>
					                  		<option value="flaticon-innovation">innovation</option>
					                  		<option value="fa-glass">glass</option>
					                  		<option value="fa-music">music</option>
					                  		<option value="fa-search">search</option>
					                  		<option value="fa-envelope-o">email-envelope</option>
					                  		<option value="fa-heart">heart</option>
					                  		<option value="fa-star">star</option>
					                  		<option value="fa-user">user</option>
					                  		<option value="fa-th-list">list</option>
					                  		<option value="fa-check">check</option>
					                  		<option value="fa-close">close</option>
					                  		<option value="fa-power-off">power-off</option>
					                  		<option value="fa-trash-o">trash</option>
					                  		<option value="fa-home">home</option>
					                  		<option value="fa-clock-o">clock</option>
					                  		<option value="fa-file-o">file</option>
					                  		<option value="fa-road">road</option>
					                  		<option value="fa-download">download</option>
					                  		<option value="fa-cog">cog</option>
					                  		<option value="fa-inbox">inbox</option>
					                  		<option value="fa-play-circle-o">play-circle</option>

					                	</select>

					                </div>

					                <div class="form-group">

					                  	<label for="image" style="font-size: 15px;">Image</label>

					                  	<input type="file" name="image" class="form-control" id="image" placeholder="Image" style="font-size: 15px; font-weight: bold;">

					                </div>

					                <div class="form-group">

					                  	<label for="slug" style="font-size: 15px;">slug <small style="color: red;">*</small></label>

					                  	<textarea class="form-control"  rows="8" name="slug" id="slug" placeholder="Description/slug" style="font-size: 15px;" required></textarea>

					                </div>
					                
					                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Add</button>

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

<script src="js/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function() {

    $("#slug").wysihtml5();

  });

</script>

@endsection