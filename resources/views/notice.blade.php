@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8">
      <div id="accordion">
        <p class="text-center font-weight-bold h2 text-primary">
          Notice Board
        </p><hr>
            
        
        <div class="card mb-3">
          <table class="text-left border-primary pl-2 pr-2 text-center" style="width:100%;" border="2">
            <tr>
              <th style="width: 8%">SRL</th>
              <th style="width: 15%">Date</th>
              <th style="width: 80%">Notice</th>
            </tr>
            {{-- @foreach($all_notice_info->reverse() as $i=>$v_notice) --}}
            @foreach($all_notice_info as $i=>$v_notice)
            <tr>
              <td>{{++$i}}</td> 
              <td>
                {{ \Carbon\Carbon::parse($v_notice->notice_date)->format('d/m/Y')}}
              </td>
              <td>
                <div class="text-info text-center font-weight-bold">
                    {{$v_notice->notice_title}}
                </div>
                <div class="card-body text-justify">
                    {{$v_notice->notice_details}}
                </div>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection