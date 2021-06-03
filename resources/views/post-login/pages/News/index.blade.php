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
	              						<h4 class="card-title">News</h4>
	            					</div>
	            					<div class="col-md-2">
			              				<a class="btn btn-primary btn-block" href="/auth/news/create" style="color: #fff;">
							                <i class="mdi mdi-plus"></i> Add News
							            </a>
	            					</div>
	            				</div>
	            				<div class="dropdown-divider w-25"></div>
	            				<div class="row">
	            					@if(!is_null($newz))
	            					@foreach($newz as $news)
	            					@include('post-login.partials.news-modal')
		            				<div class="col-md-4 mt-3">
		              					<div class="card2">

		              						@if(!is_null($news->image_url))
		                                    <img class="card-img-top" style="height: 250px; object-fit: cover;" src="{{$news->image_url}}" alt="Card image cap">
		                                    @else

		                                    <div style="padding-top: 68%; border-top-left-radius: 10px; border-top-right-radius: 10px;  background: linear-gradient(120deg, #00e4d0, #429FFD);" alt="Card image cap"></div>

		                                    @endif

		                                    <div class="card-body">
		                                        <h4 class="card-title mb-3" style="font-weight: bold;">{{Str::limit($news->title, 20)}}</h4>
		                                        <p style="font-size: 16px;"><?= Str::limit($news->slug, 80);?></p>
		                                        <div class="ticket-actions mb-3">
							                        <div class="btn-group dropdown">
							                          	<button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							                            	Manage
							                          	</button>
							                          	<div class="dropdown-menu">
							                            	<a class="dropdown-item" data-toggle="modal" href="#" data-target="<?= '#edit-news'.$news->id; ?>">
							                              		<i class="mdi mdi-pencil mr-2" style="color: rgba(0,0,0,0.5);"></i>Edit</a>
							                            	<div class="dropdown-divider"></div>
							                            	<a class="dropdown-item" data-toggle="modal" href="#" data-target="<?= '#delete-news'.$news->id; ?>">
							                              		<i class="mdi mdi-delete-forever mr-2" style="color: rgba(0,0,0,0.5);"></i>Delete</a>
							                          	</div>
							                        </div>
							                    </div>
		                                        <p class="card-text" style="color: rgba(0,0,0,0.3); font-size: 14px;"><i class="mdi mdi-clock"></i>{{$news->created_at->diffForHumans()}}</p>
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
@endsection
