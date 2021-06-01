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
	              				<h4 class="card-title">Manage your account</h4>
                                <hr/>
              					<form class="forms-sample" action="/auth/account" method="post">
              						@csrf
              						@method('PATCH')
					                <div class="form-group">
					                  	<label for="name" style="font-size: 15px;">Name</label>
					                  	<input type="name" class="form-control" value="{{ auth()->user()->name }}" name="name" id="name" required placeholder="Your Name" style="font-size: 15px;">
					                </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="font-size: 15px;">Email address</label>
                                        <input type="email" required class="form-control" value="{{auth()->user()->email}}" name="email" id="exampleInputEmail1" placeholder="Enter email" style="font-size: 15px;">
                                  </div>
					                <div class="form-group">
					                  	<label for="exampleInputPassword1" style="font-size: 15px;">Password</label>
					                  	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: 15px;">
					                </div>
					                <div class="form-group">
					                  	<label for="exampleInputPassword_conf" style="font-size: 15px;">Confirm Password</label>
					                  	<input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword_conf" placeholder="Password" style="font-size: 15px;">
					                </div>
					                <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-cloud-download"></i>Update</button>
					                <!-- <button class="btn btn-light">Cancel</button> -->
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
