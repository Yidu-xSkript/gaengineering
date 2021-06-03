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
          						<h4 class="card-title">FAQs</h4>
        					</div>
        				</div>

        				<div class="dropdown-divider w-25"></div>

      					<p class="card-description mt-2 mb-2">Create FAQs</p>

      					<div class="dropdown-divider w-25 "></div>

      					<form class="forms-sample mt-4" action="/auth/faqs" method="post">
                        @csrf
		                    <div class="form-group">
                                <label for="question" style="font-size: 15px;">Question</label>
                                <textarea class="form-control" name="question" id="question" placeholder="Question" style="font-size: 15px;" rows="6" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="answer" style="font-size: 15px;">Answer</label>
                                <textarea class="form-control" name="answer" rows="6" id="answer" placeholder="Answer" style="font-size: 15px;" required></textarea>
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
                            <b>FAQs</b></h4>
                        <div class="dropdown-divider mb-4" style="width:25.5%;"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="font-size: 18px;">Question</th>
                                        <th style="font-size: 18px;">Answer</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($faqs as $faq)
                                    @include('post-login.partials.faq-modal')
                                    <tr class="record">
                                        <td style="font-size: 15px;">{{ Str::limit($faq->question, 120) }}</td>
                                        <td style="font-size: 15px;">{{ Str::limit($faq->answer, 120) }}</td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-primary"  data-toggle="modal" data-target=<?= '#edit'.$faq->id;?>><i class="mdi mdi-pencil"></i> Edit</button></td>

                                        <td style="font-size: 17px;"><button type="button" class="btn btn-danger"  data-toggle="modal" data-target=<?= '#delete'.$faq->id;?>><i class="mdi mdi-delete"></i> Delete</button></td>
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
