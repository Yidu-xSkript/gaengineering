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
        					<div class="col-md-10">
          						<h4 class="card-title">Portfolio Category</h4>
        					</div>
                            <div class="col-md-2">
                                <a class="btn btn-primary btn-block" href="/auth/portfolio" style="color: #fff;">
                                  <i class="mdi mdi-eye"></i> View portfolio
                                </a>
                            </div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">
        					Create Category
      					</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/portfolio" method="post">
                        @csrf
		                    <div class="form-group">
                                <label for="category_name" style="font-size: 15px;">Category Name</label>
                                <input type="text" class="form-control" required style="font-size: 16px;" id=category_name name="category_name" placeholder="Category Name">
                            </div>

			                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Create Portfolio Category</button>
      					</form>
        			</div>
      			</div>
			</div>
			<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-size:17px; text-transform:uppercase;">
                            <b>Partners</b></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">Category name</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($categories as $category)
                                    @include('post-login.partials.modal.category-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{ $category->name }}</td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-category'.$category->id;?>><i class="mdi mdi-image"></i> Update Category</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-category'.$category->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
@endsection
