@extends('layouts.admin_layout')


@section('content')
<div class="row user-profile">
	<div class="col-lg-12 side-left">

		<div class="card pt-2 pb-3 mb-2 bg-light">
        <table class="ml-5 text-left">
          <tr>
            <th rowspan="9" class="ml-5 pt-1"><img src="{{URL::to($view_student_info->std_photo)}}" width="200" height="200" style="border-radius: 50%;">  &nbsp &nbsp</th>
          </tr>
          <tr>
            <th>Name</th>
            <td>: {{($view_student_info->name)}}</td>
          </tr>
          <tr>
            <th>ID Number</th>
            <td>: {{($view_student_info->std_id)}}</td>
          </tr>
          <tr>
            <th>Reg. Number</th>
            <td>: {{($view_student_info->std_regn)}}</td>
          </tr>
          <tr>
            <th>Session</th>
            <td>: {{($view_student_info->std_session)}}</td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>: <a href="#">{{($view_student_info->email)}}</a></td>
          </tr>
          <tr>
            <th>অনুষদ</th>
            <td>: {{ Auth::user()->std_faculty }}</td>
          </tr>
          <tr>
            <th>বিভাগ</th>
            <td>: {{ Auth::user()->std_department }}</td>
          </tr>
          <tr>
            <th>হল</th>
            <td>: {{ Auth::user()->std_hall }}</td>
          </tr>
        </table>
      </div>

		<div class="card  bg-light d-flex justify-content-center pb-2 mb-2 pl-5">
        <span class="h4 pt-3">Personal Information<hr></span>
        <table class="text-left ml-5" style="width:50%;">
          <tr>
            <th>Father's Name</th>
            <td>: {{($view_student_info->std_fathersname)}}</td>
          </tr>
          <tr>
            <th>Mother's Name</th>
            <td>: {{($view_student_info->std_mothersname)}}</td>
          </tr>
          <tr>
            <th>Date of Birth</th>
            <td>: {{ \Carbon\Carbon::parse($view_student_info->std_dob)->format('d/m/Y')}}
          </tr>
          <tr>
            <tr>
              <th>Blood Group</th>
              <td>: {{($view_student_info->std_blood)}}</td>
            </tr>
            <tr>
              <th>Nationality</th>
              <td>: {{($view_student_info->std_nationality)}}</td>
            </tr>
            <tr>
              <th>Religion</th>
              <td>: {{($view_student_info->std_religion)}}</td>
            </tr>
            <tr>
            <th>Contact Number</th>
            <td>: {{($view_student_info->std_contact)}}</td>
          </tr>
          </table>
        </div>


        <div class="card  bg-light d-flex justify-content-center pb-2 mb-2 pl-5">
          <span class="h4 pt-3">Educational Information</h2><hr></span>
          <table class="text-left border-primary pl-2 pr-2 text-center" style="width:80%;" border="2">
            <tr>
              <th class="text-center" style="width: 10%">Name of Degree</th>
              <th class="text-center" style="width: 15%">Board</th>
              <th class="text-center" style="width: 40%">School/College</th>
              <th class="text-center" style="width: 10%">Roll</th>
              <th class="text-center" style="width: 10%">Passing Year</th>
              <th class="text-center" style="width: 10%">GPA</th>
            </tr>
            <tr>
              <th class="text-center">SSC</th>
              <td>{{($view_student_info->ssc_board)}}</td>
              <td>{{($view_student_info->school)}}</td>
              <td>{{($view_student_info->ssc_roll)}}</td>
              <td>{{($view_student_info->ssc_year)}}</td>
              <td>{{($view_student_info->ssc_gpa)}}</td>
            </tr>
            <tr>
              <th class="text-center">HSC</th>
              <td>{{($view_student_info->hsc_board)}}</td>
              <td>{{($view_student_info->college)}}</td>
              <td>{{($view_student_info->hsc_roll)}}</td>
              <td>{{($view_student_info->hsc_year)}}</td>
              <td>{{($view_student_info->hsc_gpa)}}</td>
            </tr>
          </table>
        </div>
		
	</div>
</div>
@endsection