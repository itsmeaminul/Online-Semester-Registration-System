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
  <body class="">
    
    <div>
      <!-- header starts here  -->
      <div>
        <div class="container mt-1">
          <div class="row">
            <div class="col-sm d-flex justify-content-right ml-5 mt-2">
              <a href="{{URL::to('/home')}}"><img src="/images/csebrur-osrs.png" class="ml-5"></a>
            </div>
            <div class="col-sm d-flex justify-content-end mr-2">
              <div class="navbar-menu-wrapper d-flex align-items-center">
                <div class="text-right">
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <div class="text-right mt-2">
                      @guest
                      
                      <a class="btn btn-outline-info btn-md enter-btn mt-5" href="{{ route('login') }}">Login</a>
                      
                      @if (Route::has('register'))
                      
                      <a class="btn btn-outline-info btn-md enter-btn mt-5" href="{{ route('register') }}">Signup</a>
                      
                      @endif
                      @else
                      <li class="nav-item dropdown mb-5 pb-4">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item small" href="{{ route('profile') }}">
                            Profile
                          </a>
                          <a class="dropdown-item small" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </div>
                      </li>
                      @endguest
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- header ends here  -->
            <!-- nav bar starts here  -->
            <div class="container sticky-top mb-2 ml-2 mt-2">
              
              <nav class="navbar navbar-expand-lg font-weight-bold bg-white ml-3">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link navbar-brand text-info" href="{{URL::to('/')}}">
                      <span class="menu-title">Home</span>
                    </a>
                  </li>
                  @auth()
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand text-info" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-file" aria-hidden="true"></i>
                      <span class="menu-title">Registration Form</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item nav-link" href="{{URL::to('/registration',Auth:: user()->std_id)}}">Regular</a>
                      <a class="dropdown-item nav-link" href="{{URL::to('/improve',Auth:: user()->std_id)}}">Improvement</a> 
                    </div>
                  </li>
                  @endauth
                  @guest
                  <li class="nav-item">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <a class="nav-link navbar-brand text-info" href="{{ route('login') }}" id="alert">Registration Form</a>
                  </li>
                  @endguest
                  <li class="nav-item">
                    <a class="nav-link navbar-brand text-info" href="{{URL::to('/payment')}}">
                      <i class="mdi mdi-file-document-box menu-icon"></i>
                      <span class="menu-title">Payment</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand text-info" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <span class="menu-title">Course</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item nav-link" href="{{URL::to('/firstYear')}}">1st Year</a>
                      <a class="dropdown-item nav-link" href="{{URL::to('/secondYear')}}">2nd Year</a>
                      <a class="dropdown-item nav-link" href="{{URL::to('/thirdYear')}}">3rd Year</a>
                      <a class="dropdown-item nav-link" href="{{URL::to('/forthYear')}}">4th Year</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      <span class="menu-title">Department</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item nav-link" href="http://cse.brur.ac.bd/">CSE</a>
                      <a class="dropdown-item nav-link" href="https://brur.ac.bd/engineering-and-technology/department-of-electrical-and-electronic-engineering/">EEE</a>
                      <a class="dropdown-item nav-link" href="https://brur.ac.bd/faculty-of-science/department-of-mathematics/">Mathematics</a>
                      <a class="dropdown-item nav-link" href="https://brur.ac.bd/faculty-of-science/department-of-statistics/">Statistics</a>
                      <a class="dropdown-item nav-link" href="https://brur.ac.bd/faculty-of-science/department-of-physics/">Physics</a>
                      <a class="dropdown-item nav-link" href="https://brur.ac.bd/faculty-of-science/department-of-chemistry/">Chemistry</a>
                    </div>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link navbar-brand text-info" href="{{URL::to('/notice')}}">
                      <i class="mdi mdi-file-document-box menu-icon"></i>
                      <span class="menu-title">Notice</span>
                    </a>
                  </li> --}}
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="menu-title">Others</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item nav-link" href="{{URL::to('/notice')}}">Notice</a>
                      <a class="dropdown-item nav-link" href="{{URL::to('/help')}}">Help</a>
                      <a class="dropdown-item nav-link" href="#">About</a>
                    </div>
                  </li>
                </ul>
              </nav>
              
            </div>
            <p class="alert-success text-center">
              <?php
              $exception = Session::get('exception');
              if($exception){
              echo $exception;
              Session::put('exception',null);
              }
              ?>
            </p>
            <!-- nav bar ends here  -->
            <!-- conteiner starts here -->
            @yield('content')
            <!-- conteiner endss here -->
            <!-- footer star here -->
            <div class="newfooter mb-1 bg-info mt-2">
              <footer>
                <span class="">
                  <p class="text-center font-weight-bold"> Copyright © 2019. All rights reserved Begum Rokeya University, Rangpur</p>
                </span>
              </footer>
            </div>
            <!-- footer ends here -->
          </div>
          <!-- plugins:js -->
          <script src="{{asset('admins/node_modules/jquery/dist/jquery.min.js')}}"></script>
          <script src="{{asset('admins/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
          <script src="{{asset('admins/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
          <script src="{{asset('admins/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
          <!-- endinject -->
          <!-- Plugin js for this page-->
          <script src="{{asset('admins/node_modules/flot/jquery.flot.js')}}"></script>
          <script src="{{asset('admins/node_modules/flot/jquery.flot.resize.js')}}"></script>
          <script src="{{asset('admins/node_modules/flot/jquery.flot.categories.js')}}"></script>
          <script src="{{asset('admins/node_modules/flot/jquery.flot.pie.js')}}"></script>
          <script src="{{asset('admins/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
          <script src="{{asset('admins/node_modules/rickshaw/rickshaw.min.js')}}"></script>
          <script src="{{asset('admins/bower_components/chartist/dist/chartist.min.js')}}"></script>
          <script src="{{asset('admins/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
          <script src="{{asset('admins/node_modules/chart.js/dist/Chart.min.js')}}"></script>
          <script src="{{asset('admins/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
          <!-- End plugin js for this page-->
          <!-- inject:js -->
          <script src="{{asset('admins/js/jquery.printPage.js')}}"></script>
          <script src="{{asset('admins/js/off-canvas.js')}}"></script>
          <script src="{{asset('admins/js/hoverable-collapse.js')}}"></script>
          <script src="{{asset('admins/js/misc.js')}}"></script>
          <script src="{{asset('admins/js/settings.js')}}"></script>
          <script src="{{asset('admins/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
          <script src="{{asset('admins/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
          <script src="{{asset('admins/js/data-table.js')}}"></script>
          <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
          <!-- endinject -->
          <!-- Custom js for this page-->
          <script src="{{asset('admins/js/dashboard_1.js')}}"></script>
          <script>
          $(document).on("click", "#delete", function(e) {
          e.preventDefault();
          var link = $(this).attr("href");
          bootbox.confirm("Are you sure to delate!!", function(confirmed){
          if(confirmed){
          window.location.href = link;
          };
          });
          });
          $(document).on("click", "#alert", function(e) {
          e.preventDefault();
          var link = $(this).attr("href");
          bootbox.confirm("Please Login First!!", function(confirmed){
          if(confirmed){
          window.location.href = link;
          };
          });
          });
          </script>
          <!-- End custom js for this page-->
        </body>
      </html>