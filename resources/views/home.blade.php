@extends('layouts.app')
@section('content')
<!-- conteiner starts here -->
<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1>Welcome Note</h1><hr>
      <p class="text-justify">
        Welcome to the Online Semester Registration System, Begum Rokeya University, Rangpur. The Department of Computer Science and Engineering was established on 12 October, 2008. It is one of the founding department among six, Begum Rokeya University, Rangpur started its journey with. Since the beginning of its establishment, the department has been able to attract the very best students who secure topmost merit positions in the undergraduate admission test every year. In the last eight years, CSE, BRUR prepared some talented graduates and they are playing important role both in the academic sector and industry. The department is conducting its activities with the motto to prepare future technology leaders and innovators of the country as well as throughout the globe in the domain of Computer Science and Engineering.
      </p>
      <ul class="list-group mt-2">
        <li class="list-group-item bg-light font-weight-bold h4 pl-3">
          <i class="mdi mdi-gauge menu-icon"></i> Upcoming Events: 
        </li>
        <li class="list-group-item pl-5 pb-5 pt-4">No Upcoming Events</li>
        {{-- <li class="list-group-item"><a class="mb-2 pl-5" href="#"></a></li> --}}
      </ul>
    </div>
    <div class="col-sm">
      
      <!-- <img src="images/vc.jpg"> -->
      
      <!-- Slider Starts from here -->
      <div class="bd-example mt-5 pt-3">
        <div id="carouselExampleCaptions" class="carousel slide pb-2" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="images/rsz_brur.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BRUR Campus</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
            <div class="carousel-item active">
              <img src="images/vc.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Virtual Class Room</h5>
                <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/software.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Software Lab</h5>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/workshop.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Work Shop</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/brur_10thanniversary.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BRUR celebrates 10th founding Anniversary</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/brur_inks_mou.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BRUR inks MoU with Canadian University of Bangladesh</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/campus_radio.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Campus Radio broadcast launched at BRUR</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/rokeya-begum-university.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>BRUR Campus</h5>
                <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <br><br>
      <ul class="list-group mt-2">
        <li class="list-group-item bg-light font-weight-bold h4 pl-3">
          <i class="mdi mdi-gauge menu-icon"></i> Past Events
        </li>
        <li class="list-group-item"><a class="mb-2" href="http://cse.brur.ac.bd/events/15">Workshop on Advanced Problem Solving & Programming (Day-3)</a></li>
        <li class="list-group-item"><a class="mb-2" href="http://cse.brur.ac.bd/events/16">CSE Fest 2017 Closing Ceremony</a></li>
      </ul>
      
      <!-- Slider Ends from here -->
    </div>
    
  </div>
</div>
<!-- conteiner endss here -->
@endsection