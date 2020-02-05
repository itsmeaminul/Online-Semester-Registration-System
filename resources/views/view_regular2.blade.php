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
<div class="container text-center">
	<div class="row d-flex justify-content-center">
		<div class="col-md-10 card border-dark pl-5 pr-5 pt-3 pb-2 bg-danger">
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
			@endforeach
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

				{{-- officia information --}}
			<u class="font-weight-bold text-md-center text-dark h5 mt-4 mb-2">&nbsp প্রত্যয়নপত্র &nbsp</u>
			<table class="text-left border-dark  pr-2 pl-2" style="width:100%;" border="2">
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
	<a href="" class="btn btn-outline-danger font-weight-bold mt-2">Convert into PDF</a>
</div><br>
@endsection