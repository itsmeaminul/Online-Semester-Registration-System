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
@endphp
@section('content')
<div class="container text-center">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
        @foreach ($student_info_view as $element)
        <div class="card border-dark pt-3 mb-0 bg-danger">
          <div class="h3 font-weight-bold">বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর</div>
          <div class="h4 font-weight-bold">পরীক্ষা নিয়ন্ত্রণ দপ্তর</div>
          <div class="row">
            <div class="col-sm-5">
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
            <div class="col-sm-2 ml-0">
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
            
            <div class="col-sm ml-5 pl-5 mb-3">
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
       {{-- <a class="dropdown-item nav-link " href="{{URL::to('/view_regular2',Auth:: user()->std_id)}}">
      <button type="submit" class="btn btn-info font-weight-bold mt-3 bg-danger">
      Next Page
      </button></a> --}}
      <a href="{{URL::to('/view_regular2',Auth:: user()->std_id)}}">
      {{-- <a href="{{URL::to('help2')}}"> --}}
                  <button class="btn btn-outline-danger font-weight-bold mt-2">Next Page</button>
                </a>
      @endforeach
  </div>
</div>
</div><br>
<!-- conteiner endss here -->
@endsection