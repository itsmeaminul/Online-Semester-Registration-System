@extends('layouts.admin_layout')
@section('content')
<div class="container text-center">
	<div class="row ">
		<div class="col-md-10">
			<div class="card border-info">
				<div class="card-header h3 font-weight-bold">ADD NOTICE</div>
				<div class="card-body">
					<p class="alert-success text-center">
						<?php
						$exception = Session::get('exception');
						if($exception){
						echo $exception;
						Session::put('exception',null);
						}
						?>
					</p>
					<form name="add-notice-form" onsubmit="return validform()" method="post" action="{{URL::to('/save_notice')}}">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="d-flex justify-content-start h5">Title</label>
							<input type="text" class="form-control col-md-10" name="notice_title" placeholder="write title/headline of the notice" required="">
						</div>
						<div class="form-group">
							<label for="notice_details" class="d-flex justify-content-start h5">Details</label>
							<textarea type="text" class="form-control col-md-10" rows="5" id="notice_details" name="notice_details" placeholder="write details about the notice" required=""></textarea>
						</div>
						
						<div class="offset-md-5 rounded mx-auto d-block d-flex justify-content-start">
							<button type="submit" class="btn btn-info">ADD</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection