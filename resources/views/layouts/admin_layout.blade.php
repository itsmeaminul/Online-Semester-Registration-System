<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel of OSRS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/rickshaw/rickshaw.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admins/bower_components/chartist/dist/chartist.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admins/css/admin_style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.html" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body class="sidebar-dark">
    
    <div class="container-scroller">
      <div class="row bg-white pt-3 mb-1 pb-2">
        <div class="col-sm-2 d-flex justify-content-start">
          <nav class="navbar navbar-light">
            <div class="navbar-menu-wrapper d-flex align-items-center">
              <!-- minimize button -->
              <button class="navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
        </div>
        <div class="col-sm">
          <div class="d-flex justify-content-center myfont">
            {{-- <span class="text-info font-weight-bold display-3">Admin Pannel</span>&nbsp
            <span class="text-dark font-weight-bold pt-2 mt-1 h5">of Online Student Registration System</span> --}}
            <img src="/images/csebrur_admin.png" class="ml-5">
            
          </div>
        </div>
        <div class="col-sm d-flex justify-content-end mr-5 pt-3 col-sm-2 h6">
          <div class="text-right d-flex align-items-right nav-item dropdown h4">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Admin{{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('admin.profile') }}">
                Profile
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
          <nav class="navbar-light">
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
          </button>
          </nav>
        </div>
      </div>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
          <!-- nav bar starts -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <!--main pages start-->
              <li class="nav-item nav-category">
                <span class="nav-link">Menu</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/all_student')}}">
                  <i class="mdi mdi-gauge menu-icon"></i>
                  <span class="menu-title">All Student</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenuRegn" aria-expanded="false" aria-controls="layoutsSubmenuRegn">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Registration Form</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="layoutsSubmenuRegn">
                  <ul class="nav flex-column sub-menu">
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/regular')}}">Regular</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/improve')}}">Improvement</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/admit')}}">
                  <i class="mdi mdi-clipboard-outline menu-icon"></i>
                  <span class="menu-title">Admit Card</span>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenuAdmit" aria-expanded="false" aria-controls="layoutsSubmenuAdmit">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Admit Card</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="layoutsSubmenuAdmit">
                  <ul class="nav flex-column sub-menu">
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/regular_admit')}}">Regular</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/improve_admit')}}">Improvement</a>
                    </li>
                  </ul>
                </div>
              </li> --}}
              
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenuCourse" aria-expanded="false" aria-controls="layoutsSubmenu">
                  <i class="fa fa-book menu-icon"></i>
                  <span class="menu-title">Course</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="layoutsSubmenuCourse">
                  <ul class="nav flex-column sub-menu">
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/show_course')}}">Show Course</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/add_course')}}">Add Course &nbsp
                        <span class="badge badge-danger badge-pill ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                  <i class="mdi mdi-clipboard-outline menu-icon"></i>
                  <span class="menu-title">Saved Forms</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="layoutsSubmenu">
                  <ul class="nav flex-column sub-menu">
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/y1_student')}}">1st Year</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/y2_student')}}">2nd Year</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/y3_student')}}">3rd Year</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/y4_student')}}">4th Year</a>
                    </li>
                  </ul>
                </div>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu1" aria-expanded="false" aria-controls="layoutsSubmenu1">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Notice</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="layoutsSubmenu1">
                  <ul class="nav flex-column sub-menu">
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/show_notice')}}">Show All Notice</a>
                    </li>
                    <li class="dropdown-item">
                      <a class="nav-link" href="{{URL::to('/add_notice')}}">Add Notice &nbsp
                        <span class="badge badge-danger badge-pill ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          
          <!-- content-wrapper starts -->
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          
          <!-- Footer starts here -->
          <footer class="newfooter ml-5 pl-5">
            <div class="container-fluid clearfix pl-5 ml-5">
              <span class="">
                <p class="text-center font-weight-bold text-light mt-2 ml-5 pl-5">Copyright © 2019. All rights reserved Begum Rokeya University, Rangpur</p>
              </span>
            </div>
          </footer>
          <!-- Footer ends here -->
        </div>
        <!-- row-offcanvas ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
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
    </script>
  </body>
</html>