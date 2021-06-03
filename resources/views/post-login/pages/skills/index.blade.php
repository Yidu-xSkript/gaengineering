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
          						<h4 class="card-title">Skills</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create Skill</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/skills" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="name" style="font-size: 15px;">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Skill Name" style="font-size: 15px;" required>
                            </div>

                            <div class="form-group">
                                <label for="progress" style="font-size: 15px;">Progress</label>
                                <input type="number" class="form-control" name="progress" id="progress" placeholder="progress" style="font-size: 15px;" required max="100">
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
                                        <th style="font-size: 18px;">Name</th>
                                        <th style="font-size: 18px;">Progress</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($skills as $skill)
                                    @include('post-login.partials.skill-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{ $skill->name }}</td>
                                        <td style="font-size: 15px;">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->progress }}"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->progress }}%">
                                                {{ $skill->progress }}%
                                                </div>
                                            </div>
                                        </td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit'.$skill->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete'.$skill->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
