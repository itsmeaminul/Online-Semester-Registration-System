@extends('layouts.admin_layout')
@section('content')
<div class="card">
	<div class="card-body">
		<div class="bg-primary"><h2 class="font-weight-bold text-white  pl-5 pt-2">List of all Students</h2><hr></div>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>Photo</th>
							<th>ID</th>
							<th>Session</th>
							<th>Name</th>
							<th>Contact No.</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($student_info as $v_student)   
						<tr>
							<td>
								<img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
							</td>
							<td>{{$v_student->std_id}}</td>
							<td>{{$v_student->std_session}}</td>
							<td>{{$v_student->name}}</td>
							<td>{{$v_student->std_contact}}</td>
							
							<td>
								<a href="{{URL::to('/student_view/'.$v_student->std_id)}}">
									<button class="btn btn-outline-primary">View</button>
								</a>
							
								<a href="{{URL::to('/student_delete/'.$v_student->std_id)}}" id="delete">
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