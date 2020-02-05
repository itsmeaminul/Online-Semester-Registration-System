@extends('layouts.app')
@php
    function convert_year($value){
        $values=[
            1 => '১ম',
            2 => '২য়',
            3 => '৩য়',
            4 => '৪র্থ',
        ];
        return $values[$value];
    }

    function convert_semester($value){
        $values=[
            1 => '১ম',
            2 => '২য়',
        ];
        return $values[$value];
    }

    foreach ($student_info_view as $element){
        $a = $element->std_year;
        $b = $element->std_semester;

        if($a == "1" && $b=="1"){
            $s = $year1s1_course;
        }
        elseif ($a == "1" && $b=="2") {
            $s = $year1s2_course;   
        }
        elseif ($a == "2" && $b=="1") {
            $s = $year2s1_course;   
        }
        elseif ($a == "2" && $b=="2") {
            $s = $year2s2_course;   
        }
        elseif ($a == "3" && $b=="1") {
            $s = $year3s1_course;   
        }
        elseif ($a == "3" && $b=="2") {
            $s = $year3s2_course;   
        }
        elseif ($a == "4" && $b=="1") {
            $s = $year4s1_course;   
        }
        elseif ($a == "4" && $b=="2") {
            $s = $year4s2_course;   
        }
    }
@endphp
@section('content')
<div class="content-wrapper">
            {{-- <h1 class="page-title">Your Information</h1> --}}
            <div class="row user-profile d-flex justify-content-center">
                <div class="col-md-10 side-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                                <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="{{URL::to('/home')}}">HOME</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1" role="tab" aria-controls="info" aria-expanded="true">Page-1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab" aria-controls="image">Page-2</a>
                                    </li>
                                </ul>                                
                            </div>
                            {{--  --}}
                            <hr>
                            <div class="wrapper" id="printableArea">
                                
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="page1" role="tabpanel" aria-labelledby="page1-tab">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                        @endif
                                        {{--  --}}
                                        <div class="row d-flex justify-content-center">
                                            <div class="">
                                                @foreach ($student_info_view as $element)
                                                <div class="card border-dark pt-5 mb-0 bg-danger">
                                                    <div class="h3 font-weight-bold text-center">বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর</div>
                                                    <div class="h4 font-weight-bold text-center">পরীক্ষা নিয়ন্ত্রণ দপ্তর</div>
                                                    <div class="row text-center">
                                                        <div class="col-sm-5 ml-4">
                                                            <small>
                                                            <div class="card border-dark text-md-left ml-2 pt-2 bg-danger">
                                                                <div class="form-group row pl-2">
                                                                    <label for="department" class="col-md-3 col-form-label text-md-left">বিভাগ</label>
                                                                    <label for="department" class="col-md-8 col-form-label text-md-left">: {{ Auth::user()->std_department }}</label>
                                                                </div>
                                                                <div class="form-group row pl-2">
                                                                    <label for="faculty" class="col-md-3 col-form-label text-md-left">অনুষদ</label>
                                                                    <label for="department" class="col-md-8 col-form-label text-md-left">: {{ Auth::user()->std_faculty }}</label>
                                                                </div>
                                                                <div class="form-group row pl-2">
                                                                    <label for="halls_name" class="col-md-3 col-form-label text-md-left">হল</label>
                                                                    <label for="department" class="col-md-8 col-form-label text-md-left">: {{ Auth::user()->std_hall }}</label>
                                                                </div>
                                                                <div class="form-group row pl-2">
                                                                    <label class="col-md-3 col-form-label text-md-left">পরীক্ষার্থী</label>
                                                                    <label class="col-md-8 col-form-label text-md-left">: নিয়মিত</label>
                                                                </div>
                                                            </div>
                                                            </small>
                                                        </div>
                                                        <div class="col-sm-1 mr-2">
                                                            <img src="/images/brurlogo.png" class="pt-2"  height="80" width="60">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <small>
                                                            <div class="card border-dark text-md-left pt-3 mr-3 pl-2 bg-danger">
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 col-form-label text-md-left">আইডি নম্বর</label>
                                                                    <label class="col-md-7 col-form-label text-md-left">: {{ Auth::user()->std_id }}</label>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 col-form-label text-md-left">রেজিঃ নম্বর</label>
                                                                    <label class="col-md-7 col-form-label text-md-left">: {{ Auth::user()->std_regn }}</label>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-4 col-form-label text-md-left">সেশন</label>
                                                                    <label class="col-md-7 col-form-label text-md-left">: {{ Auth::user()->std_session }}</label>
                                                                </div><br><br>
                                                            </div>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="row text-md-left mt-4 ml-3 mr-3">
                                                        <label class="ml-5">
                                                        <abbr title=""> &nbsp{{$element->exam_year}}&nbsp </abbr>
                                                        সালের
                                                    <abbr title=""> &nbsp{{convert_year($element->std_year)}}&nbsp </abbr>
                                                    বর্ষ
                                                <abbr title=""> &nbsp{{convert_year($element->std_semester)}}&nbsp </abbr>
                                            সেমিস্টার ফাইনাল পরীক্ষায় নিয়মিত পরীক্ষার্থী হিসেবে অংশগ্রহণের অনুমতির জন্য।</label>
                                        </div>
                                        <div class="row d-flex justify-content-center mt-2">
                                            <label class="btn btn-outline-dark font-weight-bold h2 col-md-2 text-dark">আবেদনপত্র</label>
                                        </div>
                                        
                                        <div class="row d-flex justify-content-between ml-4">
                                            <div class="col-sm mt-5 pt-5 text-md-left">
                                                <label class="text-md-left">পরীক্ষা নিয়ন্ত্রক<br>বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর।</label>
                                            </div>
                                            
                                            <div class="col-sm text-md-right mr-5 pr-5 mb-3">
                                                <img src="{{ Auth::user()->std_photo }}" height="170" width="140">
                                            </div>
                                        </div>
                                        <div class="row mr-3 text-justify">
                                            <label class="text-md-left ml-4 pl-4">মহোদয়,</label><br>
                                            <label class="text-md-left text-justify ml-4 pl-4 mr-4">
                                            <abbr class="ml-4"> &nbsp{{$element->exam_year}}&nbsp </abbr>
                                            সালের বি.এস.সি এঞ্জিনিয়ারিং
                                        <abbr title=""> &nbsp{{convert_year($element->std_year)}}&nbsp </abbr>
                                        বর্ষ
                                    <abbr title=""> &nbsp{{convert_semester($element->std_semester)}}&nbsp </abbr>
                                    সেমিস্টার ফাইনাল পরীক্ষায় অংশগ্রহণের অনুমতি প্রদানের জন্য আপনার নিকট আবেদন করছি।
                                    আমি এ প্রসঙ্গে অঙ্গীকার করছি যে, আমার এই পরীক্ষায় অংশগ্রহণের বৈধতা সম্মন্ধে যদি কোন প্রশ্ন ওঠে, তবে বিশ্ববিদ্যালয় একাডেমিক কাউন্সিল বা তৎকর্তৃপক্ষ ক্ষমতাপ্রাপ্ত যে কোন সিদ্ধান্ত চূড়ান্ত বলে মেনে নিতে বাধ্য থাকবো।
                                </label>
                            </div>
                            <div class="row d-flex justify-content-end"><label class="mr-5 pr-5 mt-2">আপনার একান্ত অনুগত
                                <div class="col-sm">
                                    <img src="{{ Auth::user()->std_sign }}" width="150" height="70" alt="">
                                </div>
                            <hr class="bg-dark">(পরীক্ষার্থীর স্বাক্ষর ও তারিখ)</label>
                        </div>
                        <u class="font-weight-bold text-md-center text-dark h5 mt-2 mb-2">পরীক্ষার্থীর তথ্যাবলী</u>
                        <table class="text-left ml-5" style="width:90%;">
                            <tr>
                                <th colspan="2">১। নিজের নাম (স্পষ্টাক্ষরে এবং মাধ্যমিক/সমমান সনদ অনুযায়ী)</th>
                            </tr>
                            <tr>
                                <th style="width: 45%"> &nbsp &nbsp  &nbsp(ক) বাংলায়</th>
                                <td style="width: 50%">: {{$element->std_name_ban}}</td>
                            </tr>
                            <tr>
                                <th> &nbsp &nbsp  &nbsp(খ) ইংরেজিতে</th>
                                <td class="text-uppercase">: {{$element->name}}</td>
                            </tr>
                            <tr>
                                <th>২। মাতার নাম</th>
                                <td>: {{ $element->std_mothersname }}</td>
                            </tr>
                            <tr>
                                <th>৩। পিতার নাম</th>
                                <td>: {{ $element->std_fathersname }}</td>
                            </tr>
                            <tr>
                                <th>৪। পিতার অবর্তমানে অভিভাবকের নাম</th>
                                <td>: {{ $element->std_guardian }}</td>
                            </tr>
                            <tr>
                                <th>৫। বর্তমান ঠিকানা</th>
                                <td>: {{ $element->std_present_add }}</td>
                            </tr>
                            <tr>
                                <th>৬। স্থায়ী ঠিকানা</th>
                                <td>: {{ $element->std_permanent_add }}</td>
                            </tr>
                            <tr>
                                <th>৭। জাতীয়তা</th>
                                <td>: {{ $element->std_nationality }}<label class="ml-5 pl-3"><span class="font-weight-bold">ধর্ম :</span> &nbsp{{ $element->std_religion }}</label></td>
                            </tr>
                            <tr>
                                <th>৮। জন্ম তারিখ (মাধ্যমিক/সমমান সনদ অনুযায়ী)</th>
                                <td>: {{ $element->std_dob }}</td>
                            </tr>
                            <tr>
                                <th>৯। মুঠোফোন নম্বর</th>
                                <td>: {{ $element->std_contact }}</td>
                            </tr>
                            <tr>
                                <th>১০। শিক্ষাগত যোগ্যতার বিবরণ</th>
                            </tr>
                        </table>
                        <small>
                        <table class="text-left border-dark ml-5 pl-2 pr-2 mb-2 text-center" style="width:90%;" border="2">
                            <tr>
                                <th class="text-center" style="width: 18%">পরীক্ষার নাম</th>
                                <th class="text-center" style="width: 15%">বোর্ড</th>
                                <th class="text-center" style="width: 40%">স্কুল/কলেজ</th>
                                <th class="text-center" style="width: 10%">রোল নম্বর</th>
                                <th class="text-center" style="width: 10%">বছর</th>
                                <th class="text-center" style="width: 10%">গ্রেড</th>
                                <th class="text-center" style="width: 10%">যে সমস্ত বিষয়ে পরীক্ষা দিয়েছে (সংক্ষেপে)</th>
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
                        </table></small>
                        <small class="text-left ml-5 mt-2 mb-2">বেরোবি-৬০০০/২০১৮</small>
                    </div>
                </div>
            </div>
            @endforeach
            {{--  --}}
        </div>
        {{-- end info --}}
        {{-- Update Image --}}
        <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
            <div class="card border-dark pl-4 pr-5 pt-3 pb-2 pt-5 bg-danger">
                @foreach ($student_info_view as $element)
                <span class="h5 font-weight-bold text-md-left">১১। পূর্ববর্তী সেমিস্টার ফাইনাল পরীক্ষার পাশের বিবরণ (প্রযোজ্য ক্ষেত্রে):</span>
                <div class="form-group row ml-5">
                    <label class="col-form-label text-md-right font-weight-bold mr-2">ক) পরীক্ষার নাম:</label>
                    <label class="col-form-label text-md-right mr-3">
                    <abbr title="">&nbsp {{$element->pre_exam_year}} বর্ষ {{$element->pre_exam_semester}} সেমিস্টার ফাইনাল পরীক্ষা &nbsp</abbr>
                </label>
                <label class="col-form-label text-md-right font-weight-bold ml-5 mr-2">খ) পরীক্ষার বছর:</label>
                <label class="col-form-label text-md-right mr-3">
                <abbr title="">&nbsp{{$element->pre_passing_year}} &nbsp</abbr>
            </label>
        </div>
        <div class="form-group row ml-5">
            <label class="col-form-label text-md-right font-weight-bold mr-2">গ) ফলাফল(GPA/CGPA):</label>
            <label class="col-form-label text-md-right mr-3">
                {{$element->pre_semester_gpa}} / {{$element->pre_semester_cgpa}}
            </label>
        </div>
        <span class="h5 font-weight-bold text-md-left">১২। যে কোর্সে পরীক্ষার্থী পরীক্ষা দিতে ইচ্ছুক তার বিবরণ :</span>
            <table class="text-left border-dark pr-2 text-center" style="width:80%;" border="2">
                <tr>
                    <th class="text-center" style="width: 10%">ক্রমিক নং</th>
                    <th class="text-center" style="width: 20%">কোর্স কোড</th>
                    <th class="text-center" style="width: 50%">কোর্সের শিরোনাম</th>
                </tr>
                @foreach($s as $i=>$v_course)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$v_course->course_code}}</td>
                        <td>{{$v_course->course_title}}</td>
                    </tr>
                @endforeach
            </table>
        @endforeach
        {{-- officia information --}}
        <u class="font-weight-bold text-md-center text-dark h5 mt-4 mb-2">&nbsp প্রত্যয়নপত্র &nbsp</u>
        <table class="text-left border-dark  pr-2 pl-2 mb-5" style="width:100%;" border="2">
            <tr>
                <td class="text-justify pl-1 pr-1" style="width: 50%">
                    আমি প্রত্যয়ন করছি যে, পরীক্ষার্থীর শিক্ষাগত যোগ্যতা ও অগ্রগতি সন্তোষজনক।
                    তাকে {{$element->exam_year}} সালের {{convert_year($element->std_year)}} বর্ষ {{convert_semester($element->std_semester)}} সেমিস্টার ফাইনাল পরীক্ষায় অংশগ্রহণের অনুমতি দেয়ার জন্য সুপারিশ করছি। <br> আবেদনকারী শতকরা ................. ভাগ ক্লাসে যোগদান করেছে।
                </td>
                <td class="text-justify pl-1 pr-1" style="width: 50%">
                    আমি প্রত্যয়ন করছি যে, আবেদনকারী  পরীক্ষার্থী এই হলের আবাসিক/অনাবাসিক ছাত্র/ছাত্রী। আমার জানা মতে সে হলের আইন শৃঙ্খলা পরিপন্থি কোন প্রকার কাজে অংশগ্রহণ করেনি। তাকে পরীক্ষায় অংশগ্রহণের অনুমতি দেয়ার জন্য সুপারিশ করছি।
                </td>
            </tr>
        </table>
        <div class="row text-md-center mt-3 " style="width: 100%">
            <div class="col-sm mt-5 pt-5" style="width: 50%">
                <hr class="bg-dark ml-5 mr-5">
                বিভাগীয় প্রধানের স্বাক্ষর (সীলমোহর সহ)<br>
                {{$element->std_department}} বিভাগ <br>
                বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর <br>
                তারিখঃ ................................................
            </div>
            <div class="col-sm mt-5 pt-5" style="width: 50%">
                <hr class="bg-dark ml-5 mr-5">
                প্রাধ্যক্ষের স্বাক্ষর (প্রযোজ্য ক্ষেত্রে)<br>
                {{$element->std_hall}} <br>
                বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর <br>
                তারিখঃ ................................................
            </div>
        </div>
        <div class="row text-md-left mt-5 pt-5 ml-5 mr-5">
            
            <h5>বিশেষ দ্রষ্টব্যঃ</h5>
            <ol type="1">
                <li>পরীক্ষার্থীকে নিজে সতর্কতার সাথে ফর্ম পূরণ করতে হবে।</li>
                <li>পরীক্ষার্থী কর্তৃক আবেদনপত্রে নির্ভুল, যথার্থ এবং প্রয়োজনীয় তথ্য না দিলে এবং বিভাগীয় প্রধান ও প্রাধ্যক্ষ (প্রযোজ্য ক্ষেত্রে) কর্তৃক সুপারিশকৃত না হলে তা সরাসরি বাতিল বলে গণ্য হবে।</li>
                <li>প্রবেশপত্র ছাড়া পরীক্ষায় অংশগ্রহণ করা যাবে না।</li>
            </ol>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection