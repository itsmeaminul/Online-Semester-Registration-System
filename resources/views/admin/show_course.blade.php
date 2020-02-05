@extends('layouts.admin_layout')
@section('content')
<div class="card">
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
		<div class="bg-primary"><h2 class="font-weight-bold text-white  pl-5 pt-2">List of all Course</h2><hr></div>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>Year-Semester</th>
							<th>Course Code</th>
							<th>Course Title</th>
							<th>Credits</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($all_course_info as $v_course)
						<tr>
							<td>{{$v_course->course_year}}-{{$v_course->course_semester}}</td>
							<td>{{$v_course->course_code}}</td>
							<td>{{$v_course->course_title}}</td>
							<td>{{$v_course->course_credits}}</td>
							
							<td>
								
								<a href="{{URL::to('/course_edit/'.$v_course->course_code)}}" id="edit">
									<button class="btn btn-outline-warning">Edit</button>
								</a>
								<a href="{{URL::to('/course_delete/'.$v_course->course_code)}}" id="delete">
									<button class="btn btn-outline-danger">Delete</button>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection