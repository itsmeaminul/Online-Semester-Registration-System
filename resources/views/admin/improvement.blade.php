@extends('layouts.admin_layout')
@section('content')
<div class="container">
     <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
          <h3 class="card-title">Registration Form(Improvement)</h3>
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

     
     <div class="tab-content" id="myTabContent">
          {{-- YEAR-1 SEMESTER-1 Starts Here--}}
          <div class="tab-pane fade show active" id="Y1-S1" role="tabpanel" aria-labelledby="Y1-S1-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 1st Year 1st Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y1s1_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-1 SEMESTER-1 Ends Here--}}

          {{-- YEAR-1 SEMESTER-2 Starts Here--}}
          <div class="tab-pane fade" id="Y1-S2" role="tabpanel" aria-labelledby="Y1-S2-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 1st Year 2nd Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y1s2_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-1 SEMESTER-2 Ends Here--}}

          {{-- YEAR-2 SEMESTER-1 Starts Here--}}
          <div class="tab-pane fade" id="Y2-S1" role="tabpanel" aria-labelledby="Y2-S1-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 2nd Year 1st Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y2s1_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-2 SEMESTER-1 Ends Here--}}

          {{-- YEAR-2 SEMESTER-2 Starts Here--}}
          <div class="tab-pane fade" id="Y2-S2" role="tabpanel" aria-labelledby="Y2-S2-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 2nd Year 2nd Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y2s2_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-2 SEMESTER-2 Ends Here--}}

          {{-- YEAR-3 SEMESTER-1 Starts Here--}}
          <div class="tab-pane fade" id="Y3-S1" role="tabpanel" aria-labelledby="Y3-S1-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 3rd Year 1st Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y3s1_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-3 SEMESTER-1 Ends Here--}}

          {{-- YEAR-3 SEMESTER-2 Starts Here--}}
          <div class="tab-pane fade" id="Y3-S2" role="tabpanel" aria-labelledby="Y3-S2-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 3rd Year 2nd Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y3s2_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-3 SEMESTER-2 Ends Here--}}

          {{-- YEAR-4 SEMESTER-1 Starts Here--}}
          <div class="tab-pane fade" id="Y4-S1" role="tabpanel" aria-labelledby="Y4-S1-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 4th Year 1st Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y4s1_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-4 SEMESTER-1 Ends Here--}}

          {{-- YEAR-4 SEMESTER-2 Starts Here--}}
          <div class="tab-pane fade" id="Y4-S2" role="tabpanel" aria-labelledby="Y4-S2-tab">
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div><br />
               @endif
               <div class="card">
                    <div class="card-body">
                         <div class="bg-primary"><h2 class="font-weight-bold text-white text-center pl-5 pt-2">List of 4th Year 2nd Semester Students</h2><hr></div>
                         <div class="row">
                              <div class="col-12">
                                   <table id="order-listing" class="table table-striped" style="width:100%;">
                                        <thead>
                                             <tr>
                                                  <th>Photo</th>
                                                  <th>ID</th>
                                                  <th>Session</th>
                                                  <th>Name</th>
                                                  <th>Contact No</th>
                                                  <th>Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($y4s2_student as $v_student)
                                             <tr>
                                                  <td>
                                                       <img src="{{URL::to($v_student->std_photo)}}" width="100" height="100" style="border-radius: 50%;">
                                                  </td>
                                                  <td>{{$v_student->std_id}}</td>
                                                  <td>{{$v_student->std_session}}</td>
                                                  <td>{{$v_student->name}}</td>
                                                  <td>{{$v_student->std_contact}}</td>
                                                  
                                                  <td>
                                                       <a href="{{URL::to('/improve_view/'.$v_student->std_imp_id)}}">
                                                            <button class="btn btn-outline-primary">View</button>
                                                       </a>
                                                       <a href="{{URL::to('/improve_delete/'.$v_student->std_imp_id)}}" id="delete">
                                                            <button class="btn btn-outline-danger">Delete</button>
                                                       </a>
                                                  </td>
                                             </tr>
                                             @endforeach
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          {{-- YEAR-4 SEMESTER-2 Ends Here--}}
     </div>
</div>
@endsection