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
          						<h4 class="card-title">Newsletter</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create Newsletter</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/newsletter" method="post">
                        @csrf

                            <div class="form-group">
                                <label for="title" style="font-size: 15px;">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="title" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="slug" style="font-size: 15px;">Newsletter Content</label>
                                <textarea class="form-control testimony" rows="10" style="font-size: 16px;" id="slug" name="slug" placeholder="Newsletter content" ></textarea>
                            </div>

			                <button type="submit" class="btn btn-primary mr-2 mt-4"><i class="mdi mdi-plus"></i>Add</button>
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
                                        <th style="font-size: 18px;">Title</th>
                                        <th style="font-size: 18px;">Content</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($newsletters as $newsletter)
                                    @include('post-login.partials.modal.newsletter-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{ $newsletter->title }}</td>
                                        <td style="font-size: 15px;"><?= Str::limit($newsletter->slug, 200); ?></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#send-newsletter'.$newsletter->id;?>><i class="mdi mdi-send"></i> Send Email</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-newsletter'.$newsletter->id;?>><i class="mdi mdi-image"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-newsletter'.$newsletter->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
