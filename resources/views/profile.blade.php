@extends('layouts.app')
@section('content')
<div class="container text-center">
  <p class="alert-success text-center">
    <?php
    $exception = Session::get('exception');
    if($exception){
    echo $exception;
    Session::put('exception',null);
    }
    ?>
  </p>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 card border-info">
      <div class="mt-2">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div><br />
        @endif
        
        <div class="form-group text-right">
          <a href="{{ route('profile.edit') }}"><button type="submit" class="btn btn-success">Update Your Information</button></a>
        </div>
      </div>
      <div class="card pt-2 pb-3 mb-2 bg-light">
        <table class="ml-5 text-left">
          <tr>
            <th rowspan="9" class="ml-5 pt-1"><img src="{{ Auth::user()->std_photo }}" width="150" height="150" alt="" style="border-radius: 50%;">  &nbsp &nbsp</th>
            @if(Auth::user()->std_photo == '')
            <th rowspan="9" class="ml-5 pt-1"><img src="images/profile_pic.jpg" width="150" height="150" alt="your photo" style="border-radius: 50%;">  &nbsp &nbsp</th>
            @endif
          </tr>
          <tr>
            <th>Name</th>
            <td>: {{ Auth::user()->name }}</td>
          </tr>
          <tr>
            <th>ID Number</th>
            <td>: {{ Auth::user()->std_id }}</td>
          </tr>
          <tr>
            <th>Reg. Number</th>
            <td>: {{ Auth::user()->std_regn }}</td>
          </tr>
          <tr>
            <th>Session</th>
            <td>: {{ Auth::user()->std_session }}</td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>: <a href="#">{{ Auth::user()->email }}</a></td>
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
      
      <div class="card  bg-light d-flex justify-content-center pb-2 mb-2">
        <span class="card-title h4 pt-2">Personal Information</h2><hr></span>
        <table class="text-left ml-5" style="width:50%;">
          <tr>
            <th>Father's Name</th>
            <td>: {{ Auth::user()->std_fathersname }}</td>
          </tr>
          <tr>
            <th>Mother's Name</th>
            <td>: {{ Auth::user()->std_mothersname }}</td>
          </tr>
          <tr>
            <th>Date of Birth</th>
            <td>: {{ \Carbon\Carbon::parse(Auth::user()->std_dob)->format('d/m/Y')}}</td>
          </tr>
          <tr>
            <tr>
              <th>Blood Group</th>
              <td>: {{ Auth::user()->std_blood }}</td>
            </tr>
            <tr>
              <th>Nationality</th>
              <td>: {{ Auth::user()->std_nationality }}</td>
            </tr>
            <tr>
              <th>Religion</th>
              <td>: {{ Auth::user()->std_religion }}</td>
            </tr>
            <tr>
              <th>Contact Number</th>
              <td>: {{ Auth::user()->std_contact }}</td>
            </tr>
          </table>
        </div>
        <div class="card pt-2 pb-3 mb-2 bg-light">
          <table class="ml-5 text-left" style="width:75%;">
            <tr>
              <th>Signature</th>
              <td>: <img src="{{ Auth::user()->std_sign }}" width="150" height="70" alt="your signature"></td>
              {{-- @if(Auth::user()->std_sign == '')
            <td rowspan="9" class="ml-5 pt-1"><img src="images/profile_pic.jpg" width="150" height="70" alt="your signature" style="border-radius: 50%;">  &nbsp &nbsp</td>
            @endif --}}
            </tr>
          </table>
        </div>
        <div class="card  bg-light d-flex justify-content-center pb-2 mb-2">
          <span class="h4 pt-2">Educational Information</h2><hr></span>
          <table class="text-left border-primary pl-2 pr-2 text-center" style="width:100%;" border="2">
            <tr>
              <th class="text-center" style="width: 16%">পরীক্ষার নাম</th>
              <th class="text-center" style="width: 12%">বোর্ড</th>
              <th class="text-center" style="width: 30%">স্কুল/কলেজ</th>
              <th class="text-center" style="width: 10%">রোল নম্বর</th>
              <th class="text-center" style="width: 10%">বছর</th>
              <th class="text-center" style="width: 10%">গ্রেড</th>
              <th class="text-center" style="width: 25%">যে সমস্ত বিষয়ে পরীক্ষা দিয়েছেন (সংক্ষেপে)</th>
            </tr>
            <tr>
              <th class="text-center">মাধ্যমিক/সমমান</th>
              <td>{{ Auth::user()->ssc_board }}</td>
              <td>{{ Auth::user()->school }}</td>
              <td>{{ Auth::user()->ssc_roll }}</td>
              <td>{{ Auth::user()->ssc_year }}</td>
              <td>{{ Auth::user()->ssc_gpa }}</td>
              <td><small>{{ Auth::user()->ssc_sub }}</small></td>
            </tr>
            <tr>
              <th class="text-center">উচ্চ মাধ্যমিক/সমমান</th>
              <td>{{ Auth::user()->hsc_board }}</td>
              <td>{{ Auth::user()->college }}</td>
              <td>{{ Auth::user()->hsc_roll }}</td>
              <td>{{ Auth::user()->hsc_year }}</td>
              <td>{{ Auth::user()->hsc_gpa }}</td>
              <td><small>{{ Auth::user()->hsc_sub }}</small></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- conteiner endss here -->
  @endsection