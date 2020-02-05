@extends('layouts.admin_layout')
@section('content')
<div class="container text-center">
	<div class="row ">
		<div class="col-md-10">
			<div class="card border-info">
				<div class="card-header h3 font-weight-bold">ADD NOTICE</div>
				<div class="card-body">
					
					<form name="add-notice-form" onsubmit="return validform()" method="post" action="{{URL::to('/update_notice',$update_notice_info->notice_id)}}">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="d-flex justify-content-start h5">Title</label>
							<input type="text" class="form-control col-md-10" name="notice_title" required="" value="{{($update_notice_info->notice_title)}}">
						</div>
						<div class="form-group">
							<label for="notice_details" class="d-flex justify-content-start h5">Details</label>
							<textarea type="text" class="form-control col-md-10" rows="5" id="notice_details" name="notice_details" placeholder="write correct details about the notice" value="{{($update_notice_info->notice_details)}}"></textarea>
						</div>
						
						<div class="offset-md-5 rounded mx-auto d-block d-flex justify-content-start">
							<button type="submit" class="btn btn-info">UPDATE</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection