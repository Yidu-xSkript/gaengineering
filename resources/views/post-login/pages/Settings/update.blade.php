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
	              				<h4 class="card-title">Company Settings</h4>
              					<p class="card-description">
                					Fill in the required Settings *
              					</p>
              					<form class="forms-sample" action="/company-settings" method="post" enctype="multipart/form-data">
              						@csrf
					                <div class="form-group">
					                  	<label for="name" style="font-size: 15px;">Company Name <small style="color: red;">*</small></label>
					                  	<input type="text" class="form-control" name="company_name" id="name" placeholder="company name" value="{{$setting->company_name}}" style="font-size: 15px; ">
					                </div>
					                <div class="form-group">
					                  	<label for="location" style="font-size: 15px;">Location <small style="color: red;">*</small></label>
					                  	<input type="text" name="location" class="form-control" id="location" placeholder="Location" value="{{$setting->location}}" style="font-size: 15px; ">
					                </div>
					                <div class="form-group">
					                  	<label for="map" style="font-size: 15px;">Google Map Location <small style="color: red;">*</small></label>
					                  	<input type="text" name="map" class="form-control" id="map" placeholder="Google Map Location Link" value="{{$setting->google_map_location}}" style="font-size: 15px; ">
					                </div>
					                <div class="form-group">
					                  	<label for="Phone_Number" style="font-size: 15px;">Phone Number</label>
					                  	<input type="text" name="phone_number" class="form-control" id="Phone_Number" placeholder="Phone Number" value="{{$setting->phone_number}}" style="font-size: 15px; ">
					                </div>
					                 <div class="form-group">
					                  	<label for="experience" style="font-size: 15px;">Years of Experience</label>
					                  	<input type="text" name="experience" class="form-control" id="experience" placeholder="Years of Experience" value="{{$setting->experience}}" style="font-size: 15px; ">
					                </div>
					                <div class="form-group">
					                  	<label for="email" style="font-size: 15px;">Email</label>
					                  	<input type="email" name="email" value="{{$setting->email}}" class="form-control" id="email" placeholder="Email" style="font-size: 15px; ">
					                </div>
					                <div class="row">
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="facebook" style="font-size: 15px;">facebook</label>
							                  	<input type="facebook" name="facebook" value="{{$setting->facebook}}" class="form-control" id="facebook" placeholder="facebook" style="font-size: 15px; ">
							                </div>	
					                	</div>
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="twitter" style="font-size: 15px;">twitter</label>
							                  	<input type="twitter" name="twitter" value="{{$setting->twitter}}" class="form-control" id="twitter" placeholder="twitter" style="font-size: 15px; ">
							                </div>
					                	</div>
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="instagram" style="font-size: 15px;">instagram</label>
							                  	<input type="instagram" name="instagram" value="{{$setting->instagram}}" class="form-control" id="instagram" placeholder="instagram" style="font-size: 15px; ">
							                </div>
					                	</div>
						                
					                </div>
					                <div class="row">
					                	<div class="col-md-6">
					                		<div class="form-group">
							                  	<label for="logo" style="font-size: 15px;">Logo <small style="color: red;">*</small></label>
							                  	<input type="file" name="logo" class="form-control" id="logo" placeholder="Logo" style="font-size: 15px; ">
							                </div>
							                <label style="font-size: 15px; font-weight: bold">Current Logo <i class="mdi mdi-arrow-down"></i></label>
							                <div class="form-group">

							                  	<img src="{{URL::asset('storage/app/public/uploads/logo.png')}}" class="mt-4" style="width: 300px; height: 200px; object-fit: contain">
							                </div>
					                	</div>
					                	<div class="col-md-6">
					                		<div class="form-group">
							                  	<label for="favicon" style="font-size: 15px;">Favicon <small style="color: red;">*</small></label>
							                  	<input type="file" name="favicon" class="form-control" id="favicon" placeholder="Favicon" style="font-size: 15px; ">
							                </div>
							                <label style="font-size: 15px; font-weight: bold">Current Favicon <i class="mdi mdi-arrow-down"></i></label>
							                <div class="form-group">

							                  	<img src="{{URL::asset('storage/app/public/uploads/favicon.png')}}" class="mt-4" style="width: 300px; height: 200px; object-fit: contain;">
							                </div>
					                	</div>
					                </div>
					                <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-cloud-download"></i>Update</button>
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