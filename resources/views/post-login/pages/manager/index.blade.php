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
          						<h4 class="card-title">Manager</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create Manager <small>(The default password for all created accounts is "password")</small></p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/manager" method="post">
                        @csrf

                            <div class="form-group">
                                <label for="name" style="font-size: 15px;">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="name" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="email" style="font-size: 15px;">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" style="font-size: 15px;" required>
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
                            <b>Content Managers</b><small> (The default password for all created accounts is "password")</small></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">name</th>
                                        <th style="font-size: 18px;">email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($users as $manager)
                                    @include('post-login.partials.modal.manager-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{ $manager->name }}</td>
                                        <td style="font-size: 15px;">{{ $manager->email }}</td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-success"  data-toggle="modal" data-target=<?= '#edit-manager'.$manager->id;?>><i class="mdi mdi-image"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete-manager'.$manager->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
