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

 @include('frontend.layouts.components.css')

</head>

<body>
 
  
  <!-- ======= Hero Section ======= -->
  <section id="hero-others" class="py-0" >
  
   @include('frontend.layouts.components.navbar')      
      
  </section><!-- End Hero -->

  <main id="main">

    <!-- Top banner for other pages -->
    <section id="banner" class="bg-dinim">
        <div class="container">
            <div class="postcast-content">
                <div class="section-title text-white">
                    <h2>Media</h2>
                </div>
            </div>
        </div>
    </section>

   
      <!-- ======= Foundation News ======= -->
      <section class="bg-light-gray">
        <div class="container">
            <div class="foundation-news-content">
                <div class="foundation-news-title text-center mb-3" data-aos="fade-up-left" data-aos-once="false">
                    <h2><strong>News</strong></h2>
                </div>

                <div class="row">
                    <div class="col-md-3 item" data-aos="fade-up" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/matching_fund.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">Participatory Grant Making: A New daw...</h5>
                                <p class="card-text">Residents of Wilunze Village in Chamwino District, Dodoma Region, have expressed gratitude for the implementation...</p>
                                <a class="read-more-dinim bg-white float-right" data-mdb-ripple-color="dark">
                                   READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item" data-aos="fade-down" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/uraia_project-1.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">Fondation for Civil Society And ....</h5>
                                <p class="card-text">Foundation for Civil Society and Partners Reflect on Uraia Wetu Project Progress Dar es salaam yetu Project Progress Dar es…</p>
                                <a class="read-more-dinim bg-white float-right" data-mdb-ripple-color="dark">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item" data-aos="fade-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/G57A6554.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">Building Partnerships For development...</h5>
                                <p class="card-text">Civil Society Organizations (CSOs) in East Africa are recognizing the critical importance of effective collaboration of effective ,…</p>
                                <a class="read-more-dinim  bg-white float-right" data-mdb-ripple-color="dark">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item" data-aos="fade-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Aid-Localization.jpg') }}" class="card-img-top w-100" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">CSO Sustainability: Aid Localization ...</h5>
                                <p class="card-text">In a bid to align their goals with anticipated aid funding and ensure effective utilization, civil society organizations...</p>
                                <a class="read-more-dinim  bg-white float-right" data-mdb-ripple-color="dark">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Foundation News Section -->

       <!-- ======= Podcast ======= -->
       <section id="podcast" class="podcast bg-white">
        <div class="container">
            <div class="postcast-content-1" data-aos="fade-up-left" data-aos-once="false">
                <div class="section-title text-center mb-4" data-aos="fade-down-right" data-aos-once="false">
                    <h2>Podcast</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 item" ata-aos="fade-down-right">
                        <div class="card bg-white">
                            <div class="card-body mb-4">
                                <h5 class="card-title">FCSAND CSOSJOIN HANDSTO SUPPORTOVER220CHILDREN</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="audio">
                                    <audio controls>
                                        <source src="your-audio-file.mp3" type="audio/mp3">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 item" ata-aos="fade-down-left">
                        <div class="card bg-white">
                            <div class="card-body mb-4">
                                <h5 class="card-title">FCSAND CSOSJOIN HANDSTO SUPPORTOVER220CHILDREN</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="audio">
                                    <audio controls>
                                        <source src="your-audio-file.mp3" type="audio/mp3">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>

                <div class="row">
                    <div class="col-md-6 item" ata-aos="fade-down-right">
                        <div class="card bg-white">
                            <div class="card-body mb-4">
                                <h5 class="card-title">FCSAND CSOSJOIN HANDSTO SUPPORTOVER220CHILDREN</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="audio">
                                    <audio controls>
                                        <source src="your-audio-file.mp3" type="audio/mp3">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 item" ata-aos="fade-down-left">
                        <div class="card bg-white">
                            <div class="card-body mb-4">
                                <h5 class="card-title">FCSAND CSOSJOIN HANDSTO SUPPORTOVER220CHILDREN</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="audio">
                                    <audio controls>
                                        <source src="your-audio-file.mp3" type="audio/mp3">
                                        Your browser does not support the audio tag.
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </section>
     <!-- End Podcast Section -->

  
    
     <section id="our-gallery"> 
        <div class="d-flex container flex-column  position-relative">
            <div class="foundation-news-title text-center mx-2" data-aos="zoom-in-up" data-aos-once="false">
                <h2>Our Gallery</h2>
            </div>
            <div class="row" data-aos="zoom-in-up" data-aos-once="false">
                <div class="col-md-6 position-relative" >
                    <div class="d-flex flex-column my-4">
                        <div class="item">
                            <div class="card bg-white">
                                <div class="position-relative">
                                    <img src="{{ url('frontend/assets/img/home/KAK_4853.jpg') }}" class="card-img-blog" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="item my-4">
                            <div class="card bg-white">
                                <div class="position-relative">
                                    <i class="bi bi-play-circle fa-3x position-absolute top-50 start-50 translate-middle text-white" style="font-size: 4rem;"></i>
                                    <img src="{{ url('frontend/assets/img/home/CSO-Resource-Center-Training.jpg') }}" class="card-img-blog" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
                <div class="col-md-6 position-relative" >
                    <div class="d-flex flex-column my-4">
                        <div class="item">
                            <div class="card bg-white">
                                <div class="position-relative">
                                    <i class="bi bi-play-circle fa-3x position-absolute top-50 start-50 translate-middle text-white" style="font-size: 4rem;"></i>
                                    <img src="{{ url('frontend/assets/img/home/KAK_4853.jpg') }}" class="card-img-blog" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="item my-4">
                            <div class="card bg-white">
                                <div class="position-relative">
                                    <img src="{{ url('frontend/assets/img/home/Aid-Localization.jpg') }}" class="card-img-blog" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section><!-- End Hero -->


    <!-- ======= Success Stories ======= -->
    <section class="success-stories">
        <div class="container">
            <div class="postcast-content">

                <div class="row">
                    <div class="col-md-8 offset-2 item mt-3" data-aos="zoom-in-down" data-aos-once="false">
                        <div class="card card-story bg-white">
                            <div class="story-img">
                                <img src="{{ ('frontend/images/Francis-Kiwanga.png') }}" class="team-image" alt="">
                            </div>

                            <div class="card-body body-story text-center mb-4">
                                <h5 class="card-title">SUCCESS STORIES</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Success Stories Section -->


    <section class="bg-white"> 
        <div class="d-flex container flex-column " data-aos="zoom-in-up" data-aos-once="false"> 
            <div class="section-title text-center mb-4">
                <h2>Financial Reports</h2>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="d-flex flex-column my-4">
                        <div class="item">
                            <div class="card bg-white border-card financial-card">
                                <div class="card-body w-100 d-flex justify-content-end align-items-center ">
                                    <div class="d-flex flex-column w-100 p-2">
                                        <div class="d-flex justify-content-between bg-white p-2 left-box">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-white">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-dinim-2 p-2 left-box mt-2">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white p-2 left-box">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-white">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-dinim-2 p-2 left-box mt-2">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white p-2 left-box">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-white">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-dinim-2 p-2 left-box mt-2">
                                            <div class="text-dark">
                                                <img src="{{ ('frontend/images/pdf.png') }}" class="pdf-image" alt="">
                                                <span>CISNCO 123 WEEK 20239 </span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="" class="btn btn-primary bg-dinim text-white text-decoration-underline"> Download</a>
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
    </section><!-- End Hero -->



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fcb116" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,240C320,256,400,224,480,197.3C560,171,640,149,720,122.7C800,96,880,64,960,42.7C1040,21,1120,11,1200,21.3C1280,32,1360,64,1400,80L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->
  
   @include('frontend.layouts.components.footer')
 
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('frontend.layouts.components.script')

</body>

</html>


