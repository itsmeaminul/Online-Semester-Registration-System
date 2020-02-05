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
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Student Registration System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/rickshaw/rickshaw.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admins/bower_components/chartist/dist/chartist.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.html" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <!-- body start -->
  <body class="bg-danger">
    <div class="conteiner">
      <div class="h3 font-weight-bold text-center mt-5">বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর</div><br>
      <div class="h4 font-weight-bold text-center">পরীক্ষা নিয়ন্ত্রণ দপ্তর</div>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            One of three columns
          </div>
          <div class="col-sm">
            One of three columns
          </div>
          <div class="col-sm">
            One of three columns
          </div>
        </div>
      </div>
    </div>
  </body>
</html>