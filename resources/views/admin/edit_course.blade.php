@extends('layouts.admin_layout')
@section('content')
<div class="container text-center">
	<div class="row ">
		<div class="col-md-10">
			<div class="card border-info">
				<div class="card-header h3 font-weight-bold">Update A Course</div>
				<div class="card-body">
					<form name="add-course-form" onsubmit="return validform()" method="post" 
						action="{{URL::to('/update_course',$update_course_info->course_code)}}">
						{{ csrf_field() }}
						<div class="row font-weight-bold h5">
							<div class="col-sm">
								<div class="form-group row">
									<label for="course_year" class="col-md-5 col-form-label text-md-right">Year</label>
									<div class="col-md-4">
										<select class="form-control" id="course_year" name="course_year" required="" value="{{($update_course_info->course_year)}}">
											<option>Choose...</option>
											<option value="1">1st</option>
											<option value="2">2nd</option>
											<option value="3">3rd</option>
											<option value="4">4th</option>
										</select>
									</div>
								</div>
								
							</div>
							<div class="col-sm">
								<div class="form-group row">
									<label for="course_semester" class="col-md-4 col-form-label text-md-left">Semester</label>
									<div class="col-md-4">
										<select class="form-control" id="course_semester" name="course_semester" required="" value="{{($update_course_info->course_semester)}}">
											<option>Choose...</option>
											<option value="1">1st</option>
											<option value="2">2nd</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="row font-weight-bold h5">
							<div class="col-sm">
								<div class="form-group row">
									<label class="col-md-5 col-form-label text-md-right">Course Code</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="course_code" placeholder="" required="" value="{{($update_course_info->course_code)}}">
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="form-group row">
									<label for="course_credits" class="col-md-4 col-form-label text-md-left">Credits</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="course_credits" placeholder="" required=""
										value="{{($update_course_info->course_credits)}}">
									</div>
								</div>
							</div>
						</div>
						<!--  -->
						<div class="row font-weight-bold h5 ml-4">
							<label class="col-form-label text-md-right">Course Title</label>
							<input type="text" class="ml-4 col-md-6" name="course_title" required="" value="{{($update_course_info->course_title)}}">
						</div>
						
						<div class="offset-md-5 rounded mx-auto d-block d-flex justify-content-center">
							<button type="submit" class="btn btn-info col-md-2">UPDATE</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection