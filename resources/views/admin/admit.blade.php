@extends('layouts.admin_layout')
@section('content')
<div class="container">
	{{-- <p class="text-center font-weight-bold">
		<li class="dropdown-item">
			<a class="nav-link" href="{{URL::to('/regular_admit')}}">Regular</a>
		</li>
		<li class="dropdown-item">
			<a class="nav-link" href="{{URL::to('/improve_admit')}}">Improvement</a>
		</li>
		
	</p> --}}

	<br><br>
	<div class="wrapper">
		<h3 class="card-title">Download Admit Card (Regular)</h3><hr>
		<ul class="nav nav-pills flex-column flex-sm-row mb-2" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="Y1-S1-tab" data-toggle="tab" href="#Y1-S1" role="tab" aria-controls="Y1-S1" aria-expanded="true">Y1-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y1-S2-tab" data-toggle="tab" href="#" role="tab" aria-controls="Y1-S2">Y1-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y2-S1-tab" data-toggle="tab" href="#Y2-S1" role="tab" aria-controls="Y2-S1">Y2-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y2-S2-tab" data-toggle="tab" href="#Y2-S2" role="tab" aria-controls="Y2-S2">Y2-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y3-S1-tab" data-toggle="tab" href="#Y3-S1" role="tab" aria-controls="Y3-S1">Y3-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y3-S2-tab" data-toggle="tab" href="#Y3-S2" role="tab" aria-controls="Y3-S2">Y3-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y4-S1-tab" data-toggle="tab" href="#Y4-S1" role="tab" aria-controls="Y4-S1">Y4-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y4-S2-tab" data-toggle="tab" href="#Y4-S2" role="tab" aria-controls="Y4-S2">Y4-S2</a>
			</li>
		</ul>
	</div><hr><br><br>

	<div class="wrapper">
		<h3 class="card-title">Download Admit Card (Improvement)</h3><hr>
		<ul class="nav nav-pills flex-column flex-sm-row mb-2" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="Y1-S1-tab" data-toggle="tab" href="#Y1-S1" role="tab" aria-controls="Y1-S1" aria-expanded="true">Y1-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y1-S2-tab" data-toggle="tab" href="#Y1-S2" role="tab" aria-controls="Y1-S2">Y1-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y2-S1-tab" data-toggle="tab" href="#Y2-S1" role="tab" aria-controls="Y2-S1">Y2-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y2-S2-tab" data-toggle="tab" href="#Y2-S2" role="tab" aria-controls="Y2-S2">Y2-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y3-S1-tab" data-toggle="tab" href="#Y3-S1" role="tab" aria-controls="Y3-S1">Y3-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y3-S2-tab" data-toggle="tab" href="#Y3-S2" role="tab" aria-controls="Y3-S2">Y3-S2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y4-S1-tab" data-toggle="tab" href="#Y4-S1" role="tab" aria-controls="Y4-S1">Y4-S1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="Y4-S2-tab" data-toggle="tab" href="#Y4-S2" role="tab" aria-controls="Y4-S2">Y4-S2</a>
			</li>
		</ul>
	</div>
</div><hr>

@endsection