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
	            					<div class="col-md-8">
	              						<h4 class="card-title">Portfolio</h4>
	            					</div>

                                    <div class="col-md-2">
                                        <a class="btn btn-success btn-block" href="/auth/portfolio/category" style="color: #fff;">
                                          <i class="mdi mdi-plus"></i> Add Category
                                        </a>
                                    </div>

	            					<div class="col-md-2">
			              				<a class="btn btn-primary btn-block" href="/auth/portfolio" style="color: #fff;">
							                <i class="mdi mdi-eye"></i> View Portfolio
							            </a>
	            					</div>
	            				</div>

	            				<div class="dropdown-divider w-25"></div>

              					<p class="card-description mt-2 mb-2">Add your portfolio</p>

              					<div class="dropdown-divider w-25 "></div>

              					<form class="forms-sample mt-4" action="/auth/portfolio" method="post" enctype="multipart/form-data">
              						@csrf

					                <div class="form-group">
					                  	<label for="title" style="font-size: 15px;">Title <small style="color: red;">*</small></label>
					                  	<input type="text" class="form-control" name="title" id="title" placeholder="Title" style="font-size: 15px;" required>
					                </div>

                                    <div class="form-group">
                                        <label for="client" style="font-size: 15px;">Client</label>
                                        <input class="form-control" id="client" name="client" type="text" style="font-size: 15px;" required placeholder="Client">
                                    </div>

					                <div class="form-group">
					                  	<label for="image" style="font-size: 15px;">Image</label>
					                  	<input type="file" name="image_url[]" class="form-control" id="image" placeholder="Image" required style="font-size: 15px; font-weight: bold;" multiple>
					                </div>

                                    <div class="form-group">
                                        <label for="portfolio_category_id" style="font-size: 15px;">Portfolio Category <small style="color: red;">*</small></label>
                                        <select class="form-control" style="font-size: 17px;" name="portfolio_category_id" required>
                                            <option selected="" disabled="">Please select a category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="date" style="font-size: 15px;">Project Date</label>
                                        <input class="form-control" id="date" name="project_date" type="date" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="project_url" style="font-size: 15px;">Portfolio URL</label>
                                        <input class="form-control" id="project_url" name="portfolio_url" type="url" style="font-size: 15px;" required placeholder="Project URL">
                                    </div>

					                <div class="form-group">
					                  	<label for="slug" style="font-size: 15px;">slug <small style="color: red;">*</small></label>
					                  	<textarea class="form-control" rows="8" name="slug" id="slug" placeholder="Description/slug" style="font-size: 15px;" required></textarea>
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
@endsection
