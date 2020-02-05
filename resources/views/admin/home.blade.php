@extends('layouts.admin_layout')
@section('content')

<div class="row user-profile">
	<div class="col-lg-12 side-left">
		<div class="mt-2 mb-2">
			<p class="h3 text-dark font-weight-bold text-center">Profile of Admin</p><hr>
			
			<div class="card-md-5">
				<table class="table table-striped" align="center" style="width:40%;">
				<tr>
					<th class="text-md-right">Name :</th>
					<td>{{ Auth::user()->name }}</td>
				</tr>
				<tr>
					<th class="text-md-right">E-mail :</th>
					<td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
					<th class="text-md-right">Contact Number :</th>
					<td>01746018788</td>
				</tr>
			</table>
			</div>
		</div>
		
	</div>
</div>
@endsection