@extends('layouts.app')
@section('content')
<div class="content-wrapper">
  {{-- <h1 class="page-title">Your Information</h1> --}}
  <div class="row user-profile d-flex justify-content-center">
    <div class="col-lg-10 side-right">
      <div class="card">
        <div class="card-body">
          <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
            <h3 class="card-title">Update Your Information</h3>
            <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image">Image</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="signature-tab" data-toggle="tab" href="#sign" role="tab" aria-controls="image">Signature</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
              </li>
            </ul>
          </div>
          <div class="wrapper">
            <hr>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div><br />
                @endif
                <form name="profile-form" onsubmit="return validform()" method="post"
                  action="{{ route('profile.update', Auth:: user()->std_id) }}" enctype="multipart/form-data">
                  @method('PATCH')
                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                    <div class="col-md-5">
                      <input type="text" id="full_name" class="form-control" name="name" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_number" class="col-md-4 col-form-label text-md-right">ID Number</label>
                    <div class="col-md-5">
                      <input type="text" id="id_number" class="form-control" name="std_id" value="{{ Auth::user()->std_id }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="reg_number" class="col-md-4 col-form-label text-md-right">Reg. Number</label>
                    <div class="col-md-5">
                      <input type="text" id="reg_number" class="form-control" name="std_regn" value="{{ Auth::user()->std_regn }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="session" class="col-md-4 col-form-label text-md-right">Session</label>
                    <div class="col-md-5">
                      <input type="text" id="session" class="form-control" name="std_session" value="{{ Auth::user()->std_session }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="department" class="col-md-4 col-form-label text-md-right">বিভাগঃ</label>
                    <div class="col-md-5">
                      <select class="form-control" id="department" name="std_department" required="">
                        <option value="কম্পিউটার সায়েন্স অ্যান্ড ইঞ্জিনিয়ারিং" selected>CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="গণিত">গণিত</option>
                        <option value="পদার্থ">পদার্থ</option>
                        <option value="রসায়ন">রসায়ন</option>
                        <option value="পরিসংখ্যান ">পরিসংখ্যান </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">অনুষদঃ</label>
                    <div class="col-md-5">
                      <select class="form-control" id="faculty" name="std_faculty" required="">
                        {{-- <option selected>Choose...</option> --}}
                        <option value="প্রকৌশল ও প্রযুক্তি" selected="">প্রকৌশল ও প্রযুক্তি</option>
                        <option value="বিজ্ঞান">বিজ্ঞান</option>
                        <option value="কলা">কলা</option>
                        <option value="বিজনেস স্টাডিজ">বিজনেস স্টাডিজ</option>
                        <option value="সামাজিক বিজ্ঞান">সামাজিক বিজ্ঞান</option>
                        <option value="জীব ও ভূ-বিজ্ঞান">জীব ও ভূ-বিজ্ঞান</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="halls_name" class="col-md-4 col-form-label text-md-right">হলঃ</label>
                    <div class="col-md-5">
                      <select class="form-control" id="halls_name" name="std_hall" required="">
                        <option value="অনাবাসিক" selected>অনাবাসিক</option>
                        <option value="বঙ্গবন্ধু শেখ মুজিবুর রহমান হল">বঙ্গবন্ধু শেখ মুজিবুর রহমান হল</option>
                        <option value="শাহীদ মুখতার ইলাহী হল">শহীদ মুখতার ইলাহী হল</option>
                        <option value="বঙ্গমাতা ফজিলাতুন্নেছা মুজিব হল">শেখ ফজিলাতুন্নেছা মুজিব হল</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fathers_name" class="col-md-4 col-form-label text-md-right">Father's Name</label>
                    <div class="col-md-5">
                      <input type="text" id="fathers_name" class="form-control" name="std_fathersname" placeholder="Father's Name" value="{{ Auth::user()->std_fathersname }}" required="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="mothers_name" class="col-md-4 col-form-label text-md-right">Mother's Name</label>
                    <div class="col-md-5">
                      <input type="text" id="mothers_name" class="form-control" name="std_mothersname" placeholder="Mother's Name" value="{{ Auth::user()->std_mothersname }}" required="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="contact_number" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                    <div class="col-md-5">
                      <input type="text" id="contact_number" class="form-control" name="std_contact" placeholder="write your contact number" value="{{ Auth::user()->std_contact }}" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                    <div class="col-md-5">
                      <input type="email" id="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
                    <div class="col-md-5">
                      <input type="date" id="dob" class="form-control" name="std_dob" value="{{ Auth::user()->std_dob }}"
                      min="1990-01-01" max="2020-1-1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="blood_group" class="col-md-4 col-form-label text-md-right">Blood Group</label>
                    <div class="col-md-5">
                      <input type="text" id="blood_group" class="form-control" name="std_blood" placeholder="write your blood group" value="{{ Auth::user()->std_blood }}" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nationality" class="col-md-4 col-form-label text-md-right">Nationality</label>
                    <div class="form-radio">
                      <label class="form-check-label btn btn-white">
                        <input type="radio" class="radio-inline" name="std_nationality" id="nationality1" value="Bangladeshi" checked>
                        Bangladeshi
                      </label>
                    </div>
                    <div class="form-radio">
                      <label class="form-check-label btn btn-white">
                        <input type="radio" class="radio-inline" name="std_nationality" id="nationality2" value="Foreigner">
                        Foreigner
                      </label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="religion" class="col-md-4 col-form-label text-md-right">Religion</label>
                    <div class="col-md-3">
                      <select class="form-control" id="religion" name="std_religion"  value="{{ Auth::user()->std_religion }}" required="">
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Cristian">Cristian</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="card pt-3 mb-3 bg-light pl-2 pr-2">
                    <span class="h4 font-weight-bold text-primary">Educational Information</span>
                    <table border="2" class="border-info text-center">
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
                        <td><input type="text" id="ssc_board_name" class="form-control" name="ssc_board" value="{{ Auth::user()->ssc_board }}" placeholder="" required=""></td>
                        <td><input type="text" id="school_name" class="form-control" name="school" value="{{ Auth::user()->school }}" placeholder="" required=""></td>
                        <td><input type="text" id="ssc_roll" class="form-control" name="ssc_roll" value="{{ Auth::user()->ssc_roll }}" placeholder="" required=""></td>
                        <td><input type="text" id="ssc_year" class="form-control" name="ssc_year" value="{{ Auth::user()->ssc_year }}" placeholder="" required=""></td>
                        <td><input type="text" id="ssc_gpa" class="form-control" name="ssc_gpa" value="{{ Auth::user()->ssc_gpa }}" placeholder="" required=""></td>
                        <td><input type="text" id="ssc_sub" class="form-control" name="ssc_sub" value="{{ Auth::user()->ssc_sub }}" placeholder="" required=""></td>
                      </tr>
                      <tr>
                        <th class="text-center">উচ্চ মাধ্যমিক/সমমান</th>
                        <td><input type="text" id="hsc_board_name" class="form-control" name="hsc_board" value="{{ Auth::user()->hsc_board }}" placeholder="" required=""></td>
                        <td><input type="text" id="college_name" class="form-control" name="college" value="{{ Auth::user()->college }}" placeholder="" required=""></td>
                        <td><input type="text" id="hsc_roll" class="form-control" name="hsc_roll" value="{{ Auth::user()->hsc_roll }}" placeholder="" required=""></td>
                        <td><input type="text" id="hsc_year" class="form-control" name="hsc_year" value="{{ Auth::user()->hsc_year }}" placeholder="" required=""></td>
                        <td><input type="text" id="hsc_gpa" class="form-control" name="hsc_gpa" value="{{ Auth::user()->hsc_gpa }}" placeholder="" required=""></td>
                        <td><input type="text" id="hsc_sub" class="form-control" name="hsc_sub" value="{{ Auth::user()->hsc_sub }}" placeholder="" required=""></td>
                      </tr>
                    </table><br>
                  </div>
                  <div class="form-group mt-5 text-md-left ml-5 pl-5">
                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    {{-- <button class="btn btn-outline-danger">Cancel</button> --}}
                  </div>
                </form>
                </div><!-- tab content ends -->
                {{-- Update Image --}}
                <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="image-tab">
                  <div class="wrapper mb-5 mt-4">
                    <div class="badge badge-warning text-white">Note : </div>
                    <p class="d-inline ml-3 text-muted">Image must be 300x300 pixel and size is limited to not greater than 100KB.</p><br>
                  </div>
                  <form name="std-image-form" onsubmit="return validform()" action="{{ route('image.update', Auth:: user()->std_id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <label class="font-weight-bold">Upload Image:</label>
                    <div class="col-md-5">
                      <input type="file" id="std_photo" class="form-control" name="std_photo">
                      @if(Auth::user()->std_photo)
                      {{-- <code>{{ Auth::user()->std_photo }}</code> --}}
                      @endif
                    </div>
                    <div class="form-group mt-5">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                    </div>
                  </form>
                </div>
                {{-- Update Signature --}}
                <div class="tab-pane fade" id="sign" role="tabpanel" aria-labelledby="image-tab">
                  <div class="wrapper mb-5 mt-4">
                    <div class="badge badge-warning text-white">Note : </div>
                    <p class="d-inline ml-3 text-muted">Image must be 300x80 pixel and size is limited to not greater than 100KB.</p><br>
                  </div>
                  <form name="std-image-form" onsubmit="return validform()" action="{{ route('sign.update', Auth:: user()->std_id) }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <label class="font-weight-bold">Upload Your Signature:</label>
                    <div class="col-md-5">
                      <input type="file" id="std_sign" class="form-control" name="std_sign">
                      @if(Auth::user()->std_sign)
                      {{-- <code>{{ Auth::user()->std_photo }}</code> --}}
                      @endif
                    </div>
                    <div class="form-group mt-5">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                    </div>
                  </form>
                </div>
                {{-- change password --}}
                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                  <form name="std-pass-form" onsubmit="return validform()" action="{{ route('password.update', Auth:: user()->std_id) }}" method="post">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="change-password">Change password</label>
                      <input type="password" class="form-control col-md-5" id="change-password" name="current_password" placeholder="Enter you current password">
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control col-md-5 @error('password') is-invalid @enderror" name="new_password" required autocomplete="new-password" placeholder="Enter your new password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input id="password-confirm" type="password" class="form-control col-md-5" name="password_confirmation" required autocomplete="new-password" name="new_confirm_password" placeholder="Confirm your new password">
                    </div>
                    
                    <div class="form-group mt-5">
                      <a href="{{ route('profile.update', Auth:: user()->std_id) }}"><button type="submit" class="btn btn-success mr-2">Update</button></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection