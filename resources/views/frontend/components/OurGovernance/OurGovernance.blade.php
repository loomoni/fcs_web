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
                    <h2>Governance</h2>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="d-flex container">
            <div class="row">
                <div class="col-md-12 d-flex flex-row mt-2">
                    <div class="card bg-light-gray text-dinim">
                        <!-- Dont use multiple card bodies, just one is enough -->
                        <div class="card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    </section><!-- Our Story -->

  <!-- ======= Our Story ======= -->
  <section id="our-story" class="about-us">
    <div class="container" data-aos="fade-up" data-aos-once="false">
        <div class="who-are-we">
            <!-- About section -->
            <div id="who-we-are">
                <div class="row g-5 h-100">
                    <div class="col-lg-6 d-flex align-items-center flex-column justify-content-start text-dinim" data-aos="fade-right" data-aos-once="false">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex  align-items-center justify-content-center w-75">
                                <div class="text-dinim text-center about-title">
                                    <h2><strong>MEMBERS</strong></h2>
                                </div>
                            </div>
                            <div class="d-flex flex-column w-75">
                                <div class="image-members">
                                    <img src="{{ url('frontend/assets/img/home/Haule-160x160.jpg') }}" class="img-fluid-member" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 pt-4 d-flex  align-items-center pt-lg-0" data-aos="fade-left" data-aos-once="false">
                        <div class="d-flex flex-column story-left-member w-75">
                            <p class="independent-title mt-2 text-dinim">
                                Established over 2 decades ago, FCS is the largest local
                                grant maker with extensive Established over 2 decades ago, FCS is the largest local
                                grant maker with extensive Established over 2 decades ago, FCS is the largest local
                               
                            </p>
                            <div class="card-body py-5 d-flex flex-column justify-content-center bg-dinim text-white text-center mb-4" style="border-radius: 2rem;">    
                                <p class="story-title text-start">
                                    Established over 2 decades ago, FCS is the largest local
                                    grant maker with extensive 
                                
                                    Established over 2 decades ago, FCS is the largest local
                                    grant maker with extensive 
                                    class="independent-title">
                                    Established over 2 decades ago, FCS is the largest local
                                    grant maker with extensive 
                                    class="independent-title">
                                    Established over 2 decades ago, FCS is the largest local
                                    grant maker with extensive 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= End Our Story ======= -->

<section>
    <div class="d-flex container flex-column">
        <div class="section-title text-dark text-center">
            <h2>Our Policies</h2>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex flex-row mt-2">
                <div class="card">
                    <!-- Dont use multiple card bodies, just one is enough -->
                    <div class="card-body">
                        As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                    </div>
                </div>
            </div>
        </div>
    </div>
      
</section><!-- Our Story -->

 
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



