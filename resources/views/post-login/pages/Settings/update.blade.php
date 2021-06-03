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
                                    @method("PATCH")
                                    <hr>
                                    <h3 style="font-weight:700;">About</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label for="about" style="font-size: 15px;">About <small style="color: red;">*</small></label>
                                      <textarea name="about" class="form-control" id="slug_modal" placeholder="about"> {{$setting->about}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="years_of_experience" style="font-size: 15px;">Years of Experience</label>
                                                <input type="number" name="years_of_experience" class="form-control" id="years_of_experience" placeholder="Years of Experience" value="{{$setting->years_of_experience}}" style="font-size: 15px; " required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="awards" style="font-size: 15px;">Awards</label>
                                                <input type="number" name="awards" class="form-control" id="awards" placeholder="Awards" value="{{$setting->awards}}" style="font-size: 15px; " required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="happy_client" style="font-size: 15px;">Happy Client</label>
                                                <input type="number" name="happy_client" class="form-control" id="happy_client" placeholder="Happy Client" value="{{$setting->happy_client}}" style="font-size: 15px; " required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="project" style="font-size: 15px;">Project</label>
                                                <input type="number" name="project" class="form-control" id="project" placeholder="Project" value="{{$setting->project}}" style="font-size: 15px; " required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 style="font-weight:700;">Address</h3>
                                    <hr>
					                <div class="form-group">
					                  	<label for="location" style="font-size: 15px;">Location <small style="color: red;">*</small></label>
                                        <textarea name="location" class="form-control" id="slug" placeholder="Location"> {{$setting->location}}</textarea>
					                </div>
					                <div class="form-group">
					                  	<label for="map" style="font-size: 15px;">Google Map Location <small style="color: red;">*</small></label>
					                  	<input type="text" name="map_location" class="form-control" id="map" placeholder="Google Map Location Link" value="{{$setting->map_location}}" style="font-size: 15px; ">
					                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Phone_Number" style="font-size: 15px;">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control" id="Phone_Number" placeholder="Phone Number" value="{{$setting->phone_number}}" style="font-size: 15px; ">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Phone_Number" style="font-size: 15px;">Phone Number 2</label>
                                                <input type="text" name="phone_number_2" class="form-control" id="Phone_Number" placeholder="Phone Number" value="{{$setting->phone_number_2}}" style="font-size: 15px; ">
                                          </div>
                                        </div>
                                    </div>
					                <div class="form-group">
					                  	<label for="email" style="font-size: 15px;">Email</label>
					                  	<input type="email" name="email" value="{{$setting->email}}" class="form-control" id="email" placeholder="Email" style="font-size: 15px; ">
					                </div>
                                    <hr>
                                    <h3 style="font-weight:700;">Social Links</h3>
                                    <hr>
					                <div class="row">
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="facebook" style="font-size: 15px;">facebook</label>
							                  	<input type="url" name="facebook" value="{{$setting->facebook}}" class="form-control" id="facebook" placeholder="facebook" style="font-size: 15px; ">
							                </div>
					                	</div>
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="twitter" style="font-size: 15px;">twitter</label>
							                  	<input type="url" name="twitter" value="{{$setting->twitter}}" class="form-control" id="twitter" placeholder="twitter" style="font-size: 15px; ">
							                </div>
					                	</div>
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="instagram" style="font-size: 15px;">instagram</label>
							                  	<input type="url" name="instagram" value="{{$setting->instagram}}" class="form-control" id="instagram" placeholder="instagram" style="font-size: 15px; ">
							                </div>
					                	</div>
					                </div>
                                    <div class="row">
					                	<div class="col-md-6">
					                		<div class="form-group">
							                  	<label for="linked_in" style="font-size: 15px;">linked in</label>
							                  	<input type="url" name="linked_in" value="{{$setting->linked_in}}" class="form-control" id="linked_in" placeholder="linked in" style="font-size: 15px; ">
							                </div>
					                	</div>
                                        <div class="col-md-6">
					                		<div class="form-group">
							                  	<label for="skype" style="font-size: 15px;">skype</label>
							                  	<input type="url" name="skype" value="{{$setting->skype}}" class="form-control" id="skype" placeholder="skype" style="font-size: 15px; ">
							                </div>
					                	</div>
                                    </div>
                                    <hr>
                                    <h3 style="font-weight:700;">Main Images</h3>
                                    <hr>
					                <div class="row">
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="logo" style="font-size: 15px;">Logo <small style="color: red;">*</small></label>
							                  	<input type="file" name="logo" class="form-control" id="logo" placeholder="Logo" style="font-size: 15px; ">
							                </div>
							                <label style="font-size: 15px; font-weight: bold">Current Logo <i class="mdi mdi-arrow-down"></i></label>
							                <div class="form-group">
							                  	<img src="{{URL::asset('storage/uploads/logo.png')}}" class="mt-4" style="width: 300px; height: 200px; object-fit: contain">
							                </div>
					                	</div>
                                        <div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="logo" style="font-size: 15px;">Skill <small style="color: red;">*</small></label>
							                  	<input type="file" name="logo" class="form-control" id="logo" placeholder="Logo" style="font-size: 15px; ">
							                </div>
							                <label style="font-size: 15px; font-weight: bold">Current Skill Image <i class="mdi mdi-arrow-down"></i></label>
							                <div class="form-group">
							                  	<img src="{{ $setting->skill_img }}" class="mt-4" style="width: 300px; height: 200px; object-fit: contain">
							                </div>
					                	</div>
					                	<div class="col-md-4">
					                		<div class="form-group">
							                  	<label for="favicon" style="font-size: 15px;">Favicon <small style="color: red;">*</small></label>
							                  	<input type="file" name="favicon" class="form-control" id="favicon" placeholder="Favicon" style="font-size: 15px; ">
							                </div>
							                <label style="font-size: 15px; font-weight: bold">Current Favicon <i class="mdi mdi-arrow-down"></i></label>
							                <div class="form-group">
							                  	<img src="{{URL::asset('storage/uploads/favicon.png')}}" class="mt-4" style="width: 300px; height: 200px; object-fit: contain;">
							                </div>
					                	</div>
					                </div>
					                <button type="submit" class="btn btn-primary mr-2" style="font-weight: 700;"><i class="mdi mdi-cloud-download"></i>Save</button>
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
