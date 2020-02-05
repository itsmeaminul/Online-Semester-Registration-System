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
		<h2 class="font-weight-bold text-info">All Notice</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>SRL</th>
							<th>Tiltle</th>
							<th>Details</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($all_notice_info as $v_notice)
						<tr>
							<td>{{$v_notice->notice_id}}</td>
							<td>{{$v_notice->notice_title}}</td>
							<td>{{$v_notice->notice_details}}</td>
							<td>
								<a href="{{URL::to('/notice_edit/'.$v_notice->notice_id)}}" id="edit">
									<button class="btn btn-outline-warning">Edit</button>
								</a>
								<a href="{{URL::to('/notice_delete/'.$v_notice->notice_id)}}" id="delete">
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