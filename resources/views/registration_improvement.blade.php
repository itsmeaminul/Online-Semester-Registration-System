@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row d-flex justify-content-center">
        <span class="text-danger h6"><button class="badge badge-danger text-white">বিঃদ্রঃ</button> রেজিস্ট্রেশন ফর্ম পূরণ করার পূর্বে আপনার <a href="{{ route('profile') }}" class="btn btn-outline-danger btn-sm enter-btn mb-2">প্রোফাইল</a> আপডেট করুন।</span>
        <div class="col-md-10">
            <div class="card border-info mb-2">
                <div class="card-header h3">Registration Form (Improvement)</div>
                <div class="card-body">
                    <div class="card pt-3 pb-3 mb-2 bg-light ">
                        <form name="add-course-form" onsubmit="return validform()" method="post"
                            action="{{URL::to('/save_improve')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- First Part Starts -->
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="department" class="col-md-4 col-form-label text-md-right">বিভাগঃ</label>
                                        <label for="department" class="col-md-6 col-form-label text-md-left">{{ Auth::user()->std_department }}</label>
                                        
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="id_number" class="col-md-4 col-form-label text-md-right">আইডি নম্বরঃ</label>
                                        <div class="col-md-6">
                                            <input type="text" id="id_number" class="form-control bg-light border-light" name="std_imp_id" value="{{ Auth::user()->std_id }}" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="faculty" class="col-md-4 col-form-label text-md-right">অনুষদঃ</label>
                                        <label for="department" class="col-md-6 col-form-label text-md-left">{{ Auth::user()->std_faculty }}</label>
                                    </div>
                                    
                                </div>
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="reg_number" class="col-md-4 col-form-label text-md-right">রেজিঃ নম্বরঃ</label>
                                        <label for="department" class="col-md-4 col-form-label text-md-left">{{ Auth::user()->std_regn }}</label>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="halls_name" class="col-md-4 col-form-label text-md-right">হলঃ</label>
                                        <label for="department" class="col-md-7 col-form-label text-md-left">{{ Auth::user()->std_hall }}</label>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="session" class="col-md-4 col-form-label text-md-right">সেশনঃ</label>
                                        <label for="department" class="col-md-4 col-form-label text-md-left">{{ Auth::user()->std_session }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- First Part Ends -->
                        <!-- Second Part Starts -->
                        <div class="card pt-3 mb-2 pr-5 bg-light">
                            {{-- <p class="d-inline ml-3 text-danger">
                                <button class="badge badge-danger text-white">বিঃদ্রঃ</button>
                                নিন্মের তথ্য গুলো বাংলায় পূরণ করুন।</p><br> --}}
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group row">
                                        <label for="id_number" class="col-md-4 col-form-label text-md-right">পরীক্ষার বছরঃ </label>
                                        <input type="text" id="id_number" class="form-control col-md-1 ml-3" name="exam_year" placeholder="" required="">
                                        <label for="id_number" class="col-md-1 col-form-label text-md-righ  ml-3">বছরঃ</label>
                                        <select class="form-control col-md-1" id="exam_type" name="std_year" required="">
                                            <!-- <option selected>Choose...</option> -->
                                            <option value="1">১ম</option>
                                            <option value="2">২য়</option>
                                            <option value="3">৩য়</option>
                                            <option value="4">৪র্থ</option>
                                        </select>
                                        <label for="id_number" class="col-md-2 col-form-label text-md-right">সেমিস্টারঃ</label>
                                        <select class="form-control col-md-1" id="exam_type" name="std_semester" required="">
                                            <!--  <option selected>Choose...</option> -->
                                            <option value="1">১ম</option>
                                            <option value="2">২য়</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="contact_number" class="col-md-4 col-form-label text-md-right">মুঠোফোন নম্বরঃ</label>
                                <label for="contact_number" class="col-md-4 col-form-label text-md-left">{{ Auth::user()->std_contact }}</label>
                            </div>
                            <div class="form-group row">
                                <label for="std_name_ban" class="col-md-4 col-form-label text-md-right">নিজের নামঃ</label>
                                <div class="col-md-5">
                                    <input type="text" id="std_name_ban" class="form-control" name="std_name_ban" placeholder="বাংলায় নিজের নাম লিখুন " required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="guardian" class="col-md-4 col-form-label text-md-right">পিতার অবর্তমানে অভিভাবকঃ</label>
                                <div class="col-md-5">
                                    <input type="text" id="guardian" class="form-control" name="std_guardian" placeholder="পিতার অবর্তমানে অভিভাবকের নাম" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="present_add" class="col-md-4 col-form-label text-md-right">বর্তমান ঠিকানাঃ</label>
                                <div class="col-md-5">
                                    <input type="text" id="present_add" class="form-control" name="std_present_add" placeholder="বর্তমান ঠিকানা" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="permanent_add" class="col-md-4 col-form-label text-md-right">স্থায়ী ঠিকানাঃ</label>
                                <div class="col-md-5">
                                    <input type="text" id="permanent_add" class="form-control" name="std_permanent_add" placeholder="স্থায়ী ঠিকানা" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Second Part Ends -->
                        <!-- third part(need to edit) -->
                        <div class="card pt-3 pb-3 bg-light">
                            <h5 class="font-weight-bold text-md-center text-primary">পূর্ববর্তী সেমিস্টার ফাইনাল পরীক্ষার পাশের বিবরণ (প্রযোজ্য ক্ষেত্রে)</h5><br>
                            <div class="d-flex justify-content-center">
                                <div class="form-group row">
                                    <label class="col-form-label text-md-right font-weight-bold mr-2">ক) পরীক্ষার নামঃ</label>
                                    <div class="">
                                        <select class="form-control" id="pre_year" name="pre_exam_year">
                                            <option value="১ম">১ম</option>
                                            <option value="২য়">২য়</option>
                                            <option value="৩য়">৩য়</option>
                                            <option value="৪র্থ">৪র্থ</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-md-right mr-2 ml-2">বর্ষ</label>
                                    <div class="">
                                        <select class="form-control" id="pre_year" name="pre_exam_semester">
                                            {{-- <option selected>Choose...</option> --}}
                                            <option value="১ম">১ম</option>
                                            <option value="২য়">২য়</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-md-right ml-3">সেমিস্টার ফাইনাল পরীক্ষা</label>
                                </div>
                            </div>
                            <div class="row  d-flex justify-content-center">
                                <label class="col-form-label mr-2 font-weight-bold">খ) পরীক্ষার বছরঃ </label>
                                <input type="text" class="form-control col-sm-1 mr-5" name="pre_passing_year" required="">
                                <label class="col-form-label mr-2 font-weight-bold">GPA</label>
                                <input type="text" class="form-control col-sm-1 mr-5" name="pre_semester_gpa" required="">
                                <label class="col-form-label mr-2 font-weight-bold">CGPA</label>
                                <input type="text" class="form-control col-sm-1 mr-5" name="pre_semester_cgpa" required="">
                            </div>
                        </div>
                        <div class="card mt-2 pt-3 pb-3 bg-light">
                             <span class="font-weight-bold text-md-center text-primary">Course You want to improvement</span><br>
                             <table border="1" class="border-info text-center" style="width:70%;" align="center">
                                 <tr>
                                    <th style="width: 10%">SRL</th>
                                     <th style="width: 25%">Course Code</th>
                                     <th style="width: 65%">Course Title</th>
                                 </tr>
                                 <tr>
                                    <td>1</td>
                                     <td><input type="text" class="form-control  mr-5" name="imp_course_code1" required=""></td>
                                     <td colspan="3"><input type="text" class="form-control mr-5" name="imp_course_title1" required=""></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                     <td><input type="text" class="form-control mr-5" name="imp_course_code2"></td>
                                     <td colspan="3"><input type="text" class="form-control mr-5" name="imp_course_title2"></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                     <td><input type="text" class="form-control mr-5" name="imp_course_code3"></td>
                                     <td colspan="3"><input type="text" class="form-control mr-5" name="imp_course_title3"></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                     <td><input type="text" class="form-control mr-5" name="imp_course_code4"></td>
                                     <td colspan="3"><input type="text" class="form-control mr-5" name="imp_course_title4"></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                     <td><input type="text" class="form-control mr-5" name="imp_course_code5"></td>
                                     <td colspan="3"><input type="text" class="form-control mr-5" name="imp_course_title5"></td>
                                 </tr>
                                 
                             </table>
                        </div>
                        <button type="submit" class="btn btn-info font-weight-bold mt-3">
                        Submit your Information
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>
<!-- conteiner endss here -->
@endsection