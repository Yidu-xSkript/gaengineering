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
	              				<h4 class="card-title">Manage Account</h4>
              					<p class="card-description">
                					Update your account
              					</p>
              					<form class="forms-sample" action="/account" method="post">
              						@csrf
              						@method('PATCH')
					                <div class="form-group">
					                  	<label for="exampleInputEmail1" style="font-size: 15px;">Email address</label>
					                  	<input type="email" class="form-control" value="{{auth()->user()->email}}" name="email" id="exampleInputEmail1" placeholder="Enter email" style="font-size: 15px;">
					                </div>
					                <div class="form-group">
					                  	<label for="exampleInputPassword1" style="font-size: 15px;">Password</label>
					                  	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: 15px;">
					                </div>
					                <div class="form-group">
					                  	<label for="exampleInputPassword1" style="font-size: 15px;">Confirm Password</label>
					                  	<input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: 15px;">
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