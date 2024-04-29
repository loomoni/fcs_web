<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FCS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('frontend/assets/img/favicon.jpg') }}" rel="icon">
  <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
 @include('frontend.layouts.components.css')
 
</head>

<body>
 
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="py-0" >
    <div class="logo p-absolute">
        <img src="{{ url('frontend/images/logo-rem.png') }}" class="img-logo" alt="Image">
    </div>

    {{-- @yield('contents') --}}

    <div class="d-flex container">
      <div class="row w-100">
          <div class="col-md-6 position-relative">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                          <img src="{{ url('frontend/images/tree.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                          </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                          <img src="{{ url('frontend/images/tree.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="{{ url('frontend/images/tree.png') }}" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            
          
          <div class="col-md-6 d-flex flex-row top-header">
              <ul>
                  <li class="right text-nowrap fw-bold text-dinim"> 
                      <button type="button" class="btn  bg-white text-dinim fw-bold" data-bs-toggle="modal" data-bs-target="#facilitateModal">
                          Facilitate
                      </button>
                      <div class="modal fade" id="facilitateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Facilitate</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>Facilitate In publishing and graphic design, Lorem ipsum is a placeholder text commonly used.</p>
                                  <img src="{{ url('frontend/images/Capture.jpg') }}" class="d-block w-100" alt="...">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                              </div>
                            </div>
                          </div>
                      </div>
                  </li>
                  <li class="middle text-nowrap fw-bold text-dinim">
                      <button type="button" class="btn  bg-white text-dinim fw-bold" data-bs-toggle="modal" data-bs-target="#CapacitateModal">
                          Capacitate
                      </button>
                      <div class="modal fade" id="CapacitateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Capacitate</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>Capacitate In publishing and graphic design, Lorem ipsum is a placeholder text commonly used.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                              </div>
                            </div>
                          </div>
                      </div>
                  </li>
                  <li class="buttom text-nowrap fw-bold text-dinim">
                      <button type="button" class="btn  bg-white text-dinim fw-bold" data-bs-toggle="modal" data-bs-target="#AccelerateModal">
                          Accelerate
                      </button>
                      <div class="modal fade" id="AccelerateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Accelerate</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>Accelerate In publishing and graphic design, Lorem ipsum is a placeholder text commonly used.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                              </div>
                            </div>
                          </div>
                      </div>
                  </li>
              </ul>
  
              <div class="d-flex align-items-end justify-content-center ">
                  <div class="text-dinim text-center">
                      <h2>Facilitating Partnership<br>
                          For Development</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
    
  {{-- @include('frontend.layouts.components.navbar') --}}

  {{-- @include('frontend.components.Home.sliders') --}}

  <div class="menu-toogle p-absolute">
    <div class="menu-toggle-icon">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3 2.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zM3.5 6a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5zm5 0a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5zm5 0a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5z"/>
        </svg> -->
        <span style="font-size:30px;cursor:pointer" id="menu-icon" onclick="openNav()">&#9776; Menu</span>
        
    </div>
    
    <div id="mySidenav" class="sidenav mx-2">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}" class="text-dinim">Home</a>
        <a href="{{ url('about-us') }}" class="text-dinim">About Us</a>
        {{-- <a href="{{ url('our-governance') }}" class="text-dinim">Our governance</a> --}}
        <a href="{{ url('our-approach') }}" class="text-dinim">Our approach</a>
        <a href="https://csoweek.or.tz/" class="text-dinim">CSO Week 2024</a>
        <a href="{{ url('get-involved') }}" class="text-dinim">Get involved</a>
        <a href="{{ url('media') }}" class="text-dinim">Media</a>
    </div>
</div>



      
  </section>
  <!-- End Hero -->

  {{-- <main id="main"> --}}

   @yield('contents')


  {{-- </main> --}}
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fcb116" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,240C320,256,400,224,480,197.3C560,171,640,149,720,122.7C800,96,880,64,960,42.7C1040,21,1120,11,1200,21.3C1280,32,1360,64,1400,80L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->

  @include('frontend.layouts.components.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('frontend.layouts.components.script')

</body>

</html>



