@extends('layouts.app')
{{-- @php

    foreach ($student_info_view as $element){
        $a = $element->std_imp_id;

        if($a == ''){
            $s = 1;
        }
        else{
        	 $s = 0;
        }
    }
@endphp --}}
@section('content')
<div class="container">
	<p class="font-weight-bold  mb-5 ml-5 pl-5 mt-5">

		{{-- @if ($s == 1)
		<label>Dear {{Auth:: user()->name}},<br>
			please go to the below link to fill up your registration form.</label><br>
			<a class="btn btn-outline-info font-weight-bold mt-2" href="{{URL::to('/semesterRegistration_improve')}}">Apply for Improvement</a>
		@endif

		@if ($s == 0)
			<label>Dear {{Auth:: user()->name}},<br>
			You have already filled up the improvement form.<br>
			To see your improvement form go to the below link.</label><br>
			<a class="btn btn-outline-primary font-weight-bold mt-2" href="{{URL::to('/view_improve',Auth:: user()->std_id)}}">View Your Improvement Form</a>
		@endif --}}
		
		<a class="btn btn-outline-danger font-weight-bold mt-2" href="{{URL::to('/semesterRegistration_improve')}}">Apply for Improvement</a>
		<a class="btn btn-outline-primary font-weight-bold mt-2" href="{{URL::to('/view_improve',Auth:: user()->std_id)}}">View Your Improvement Form</a>
		
		
	</p>
</div>

@endsection