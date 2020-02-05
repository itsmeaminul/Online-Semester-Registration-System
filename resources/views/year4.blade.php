@extends('layouts.app')
@section('content')
<div class="container row">
	<div class="col-sm d-flex justify-content-center">
		<div class="">
			<h4 class="font-weight-bold text-primary text-center">4th Year 1st Semester Course</h4>
			<table border="2" class="table table-striped">
				<thead>
					<tr>
						<th>Course Code</th>
						<th>Course Tiltle</th>
						<th>Credits</th>
					</tr>
				</thead>
				<tbody>
					@foreach($year4s1_course_info as $v_course)
					<tr>
						<td>{{$v_course->course_code}}</td>
						<td>{{$v_course->course_title}}</td>
						<td>{{$v_course->course_credits}}</td>
					</tr>
					@endforeach
					<tr>
						<th colspan="2" class="text-center">Total Credits</th>
						<th>23</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-sm d-flex justify-content-center">
		<div class="">
			<h4 class="font-weight-bold text-primary text-center">4th Year 2nd Semester Course</h4>
			<table border="2" class="table table-striped">
				<thead>
					<tr>
						<th>Course Code</th>
						<th>Course Tiltle</th>
						<th>Credits</th>
					</tr>
				</thead>
				<tbody>
					@foreach($year4s2_course_info as $v_course)
					<tr>
						<td>{{$v_course->course_code}}</td>
						<td>{{$v_course->course_title}}</td>
						<td>{{$v_course->course_credits}}</td>
					</tr>
					@endforeach
					<tr>
						<th colspan="2" class="text-center">Total Credits</th>
						<th>22</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection