@extends('layouts.app')
{{-- @php

    foreach ($student_info_view as $element){
        $a = $element->std_reg_id;

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
	<p class="font-weight-bold mb-5 ml-5 pl-5 mt-5">

		<a class="btn btn-outline-danger font-weight-bold mt-2" href="{{URL::to('/semesterRegistration')}}">Apply for Registration</a>

		

		<a class="btn btn-outline-primary font-weight-bold mt-2" href="{{URL::to('/view_regular',Auth:: user()->std_id)}}">View Your Registration Form</a>
			

		{{-- @if ($s == 1)
			<a class="btn btn-outline-info font-weight-bold mt-2" href="{{URL::to('/semesterRegistration')}}">Apply for Registration</a>
		@endif

		@if ($s == 0)
			<label>Dear {{Auth:: user()->name}},<br>
			You have already filled up the registration form.<br>
			To see your registration form go to the below link.</label><br>
			<a class="btn btn-outline-info font-weight-bold mt-2" href="{{URL::to('/view_regular',Auth:: user()->std_id)}}">View Your Registration Form</a>
		@endif --}}
		

		
		
	</p>
</div>

@endsection