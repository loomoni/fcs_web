<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FCS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

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
                    <h2>Who we are</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="d-flex container">
            <div class="row">
                <div class="col-md-6 d-flex flex-row mt-2 position-relative" data-aos="fade-up" data-aos-once="false">
                    <div class="card bg-dinim text-white">
                        <!-- Dont use multiple card bodies, just one is enough -->
                        <div class="card-body story-card-body">
                        {!! $Aboutus->description !!}
                        </div>
                        {{-- <div class="card-body story-card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body story-card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body story-card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body story-card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div> --}}
                    </div>
                    <div class="vertical-line-4"></div>
                </div>

                <div class="col-md-6" data-aos="fade-down" data-aos-once="false">
                    <img src="{{ url('frontend/images/tree.png') }}" class="tree-img" alt="Image">
                </div>
            </div>
        </div>
          
    </section><!-- Our Story -->

    <section> 
        <div class="d-flex container flex-column solid-border position-relative">
            <div class="foundation-news-title text-yellow-sunshine mx-2">
                <h2>Our Story</h2>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex flex-row mt-2" data-aos="fade-right" data-aos-once="false">
                    <div class="card text-dinim">
                        <!-- Dont use multiple card bodies, just one is enough -->
                        <div class="card-body ">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                        <div class="card-body">
                            As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                        </div>
                    </div>
                    <!-- <div class="vertical-line"></div> -->
                </div>

            
                <div class="col-md-6 position-relative" data-aos="fade-left" data-aos-once="false">
                    <div class="vertical-line-2"></div>
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
                                    <i class="bi bi-play-circle fa-3x position-absolute top-50 start-50 translate-middle text-white" style="font-size: 4rem;"></i>
                                    <img src="{{ url('frontend/assets/img/home/CSO-Resource-Center-Training.jpg') }}" class="card-img-blog" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="story-box"></div>
        </div>
    </section><!-- End Hero -->

    <section class="container-full bg-light-gray">
        <div class="container">
            <div class="foundation-news-content">
                <div class="foundation-news-title text-lsf">
                    <h2>Management</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 item" data-aos="fade-up-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Francis-Kiwanga.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Francis Kiwanga</h5>
                                <p class="card-text italic-grey">Executive Director</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item" data-aos="fade-up-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Edna-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Edna Chilimo</h5>
                                <p class="card-text italic-grey">Programs Manager</p>
                                
                            </div>
                        </div>
                    </div>
                      <div class="col-md-3 item" data-aos="fade-down-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Haule-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Guesturd Haule</h5>
                                <p class="card-text italic-grey">Monitoring & Evaluation</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 item" data-aos="fade-down-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Nasim-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Nasim Losai</h5>
                                <p class="card-text italic-grey">Business Development </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Management Team -->

    <section class="container-full">
        <div class="container">
            <div class="foundation-news-content">
                <div class="foundation-news-title text-lsf text-center">
                    <h2>OUR STAFF</h2>
                    <h2>Meet the team</h2>
                </div>

                <div class="row team-man-img">
                    <div class="col-md-2 item" data-aos="fade-down-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Karin-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Karin Rupia</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="flip-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Gina-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Georgina Lundi</h5>                                
                            </div>
                        </div>
                    </div>
                      <div class="col-md-2 item" data-aos="flip-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Yonah-Lyimo--160x160.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Yonah Lyimo</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="flip-up" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Nemes-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Nemes Maro</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="flip-down" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Rehema-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Rehema Malongo</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-in" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Tusekile-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Tusekile Anangisye</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-in-up" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Bertha-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Bertha Ngwada</h5>                                </h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-in-down" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Ngala-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Neil Ngala</h5>
                                                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-in-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Bart-Web-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Bartholomew Mbiling’i</h5>                                
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-2 item" data-aos="zoom-in-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Shamsia-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Shamsia Manu</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-out-up" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Maria-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Maria Sikauka Chang’a</h5>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-out" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Basil-160x160.jpg') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Basil Lema</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Staff Team -->



    <section class="container-full bg-light-gray">
        <div class="container">
            <div class="foundation-news-content">
                <div class="foundation-news-title text-center text-lsf">
                    <h2>Ideas that GUide the FCS include</h2>
                </div>

                <div class="inlude-text text-center">
                    <p>Gender Equility and Inclusion, Humidyi  and companrison  of the compaisione when it comes down to the fll of uhrri it can compaisione when it comes down to the fll of uhrri it can compaisione when it comes down to the fll of uhrri it can  </p>
                </div>

                <div class="row">
                    <div class="col-md-2 item" data-aos="zoom-out-down" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-start mt-4">
                                <img src="{{ url('frontend/images/gender.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Gender Equility</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="zoom-out-right" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/images/hands.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Humility</h5>                
                            </div>
                        </div>
                    </div>
                      <div class="col-md-2 item" data-aos="zoom-out-left" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/images/face.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Adapdatibility and Agility</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 item" data-aos="fade-up"
                                                data-aos-duration="3000" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/images/inclusion.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Inclusiion</h5>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 item" data-aos="fade-down"
                                                data-aos-easing="linear"
                                                data-aos-duration="1500" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/images/intergrity.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Intergrity and Accountability</h5>                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 item"  data-aos="fade-right"
                                                data-aos-offset="300"
                                                data-aos-easing="ease-in-sine" data-aos-once="false">
                        <div class="card bg-transparent">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/images/learning.png') }}" class="team-img" alt="...">
                            </div>

                            <div class="card-body mb-4 text-center">
                                <h5 class="card-title">Learning and Excellence</h5>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End FCS Inclusions-->


    <section> 
        <div class="d-flex container flex-column ">
            <div class="row">
                <div class="col-md-6 d-flex flex-row mt-2" data-aos="fade-down"
                                                            data-aos-easing="linear"
                                                            data-aos-duration="1500" data-aos-once="false">
                    <div class="card w-100">
                        <div class="card-body w-100 d-flex justify-content-end align-items-center ">
                            <h3 style="font-weight: normal;"> Abrief History of <br>
                            Civil Society in Tanzania <br> 
                            <strong class="mt-2">WITH GUESTUR DHAUL</strong>
                        </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-6"  data-aos="fade-right"
                                        data-aos-offset="300"
                                        data-aos-easing="ease-in-sine" data-aos-once="false">
                    <div class="d-flex flex-column my-4">
                        <div class="item">
                            <div class="card bg-white">
                                <div class="position-relative">
                                    <i class="bi bi-play-circle fa-3x position-absolute top-50 start-50 translate-middle text-white" style="font-size: 4rem;"></i>
                                    <img src="{{ url('frontend/assets/img/home/final3-2.jpg') }}" class="card-img-blog" alt="...">
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
  @include('frontend.layouts.components.footer')
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('frontend.layouts.components.script')
</body>

</html>



