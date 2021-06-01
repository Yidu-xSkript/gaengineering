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
	              						<h4 class="card-title">Services</h4>
	            					</div>

	            					<div class="col-md-2">
			              				<a class="btn btn-success btn-block" href="/auth/service/create" style="color: #fff;">
							                <i class="mdi mdi-plus"></i> Add Service
							            </a>
	            					</div>
	            				</div>

	            				<div class="dropdown-divider w-25"></div>

	            				<div class="row">
	            					@if(!is_null($services))
	            					@foreach($services as $service)
	            					@include('post-login.partials.modal.service_modal')

                                    <div class="col-md-4 mt-3">
		              					<div class="card2">

		              						@if(!is_null($service->image))
		                                    <img class="card-img-top" style="height: 250px; object-fit: cover;" src="{{ $service->image }}" alt="{{ $service->image }}">
		                                    @else

		                                    <div style="padding-top: 51%; border-top-left-radius: 10px; border-top-right-radius: 10px;  background: linear-gradient(120deg, #00e4d0, #429FFD);" alt="Card image cap"></div>

		                                    @endif

		                                    <div class="card-body">
		                                        <h4 class="card-title mb-3" style="font-weight: bold;">{{$service->title}}</h4>
		                                        <div class="dropdown-divider"></div>
		                                        <p style="font-size: 16px;"><?= str_limit($service->slug, 200);?></p>

		                                        <div class="ticket-actions mb-3">

							                        <div class="btn-group dropdown">

							                          	<button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</button>

							                          	<div class="dropdown-menu">
							                            	<a class="dropdown-item" data-toggle="modal" href="#" data-target="<?= '#edit-service'.$service->id; ?>">

							                              		<i class="mdi mdi-tooltip-edit mr-2" style="color: rgba(0,0,0,0.5);"></i>Edit</a>

							                            	<div class="dropdown-divider"></div>

							                            	<a class="dropdown-item" data-toggle="modal" href="#" data-target="<?= '#update-image-service'.$service->id; ?>">

							                              		<i class="mdi mdi-tooltip-edit mr-2" style="color: rgba(0,0,0,0.5);"></i>Update Image</a>

							                            	<div class="dropdown-divider"></div>

							                            	<a class="dropdown-item" data-toggle="modal" href="#" data-target="<?= '#delete-service'.$service->id; ?>">

							                              		<i class="mdi mdi-delete-forever mr-2" style="color: rgba(0,0,0,0.5);"></i>Delete</a>
							                          	</div>
							                        </div>
							                    </div>

		                                        <p class="card-text" style="color: rgba(0,0,0,0.3); font-size: 14px;"><i class="mdi mdi-clock"></i> {{$service->created_at->diffForHumans()}}</p>

		                                    </div>
		                                </div>
		            				</div>

		            				@endforeach
		            				@endif

	            				</div>
	            			</div>
	          			</div>
	        		</div>
	    		</div>
			</div>
		</div>
	</div>
	@include('post-login.index.footer')
</div>
</script>

@endsection
