<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FCS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

@include('frontend.layouts.components.css')
</head>

<body>
 
  
  <!-- ======= Hero Section ======= -->
  <section id="hero-others" class="py-0" >

    @include('frontend.layouts.components.navbar')

 </div>
      
      
  </section><!-- End Hero -->

  <main id="main">

    <!-- Top banner for other pages -->
    <section id="banner" class="bg-dinim">
        <div class="container">
            <div class="postcast-content">
                <div class="section-title text-white">
                    <h2>Get Involved</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="foundation-news-content">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Name</label>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Company</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Subject</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                           
                            <button type="submit" class="btn btn-warning px-5">Send</button>
                          </form>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <div class="card bg-light-gray">
                            <div class="card-body">
                                As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                            </div>
                        </div>

                        <div class="card bg-light-gray mt-2">
                            <div class="card-body">

                                <div class="d-flex flex-column">

                                    <div class="d-flex flex-row">
                                        <div class="rounded-box">
                                            <i class="bi bi-phone inner-icon"></i>
                                        </div>
                                        <p class="mx-2">
                                            678F+F69, <br> Madai 
                                            Cres,DaresSalaam
                                        </p>
                                    </div>

                                    <div class="d-flex flex-row mt-3">
                                        <div class="rounded-box">
                                            <i class="bi bi-phone inner-icon"></i>
                                        </div>
                                        <p class="mx-2">
                                            www.thefoundation.or.tz
                                        </p>
                                    </div>

                                    <div class="d-flex flex-row mt-3">
                                        <div class="rounded-box">
                                            <i class="bi bi-phone inner-icon"></i>
                                        </div>
                                        <div>
                                            <p class="mx-2">
                                                +255754005708
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="foundation-news-content">

                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <img src="{{ url('frontend/images/map1.png') }}" alt="">
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <div class="card">
                            <div class="card-body">
                                As an operating foundation, our programs and the partnerships we build work to contribute to sustainable and inclusive development in all 31 regions of Tanzania through strengthening capabilities and sharing resources. We have partnered with over 10,000 civil society, community groups, and other development actors all over the country.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

     <!-- ======= Update ======= -->
     <section class="updates">
        <div class="container">
            <div class="postcast-content">
                <div class="row">
                    <div class="col-md-8 item" data-aos="fade-down-right">
                        <div class="card card-updates bg-white">
                            <div class="card-body text-center mb-4">
                                <div class="row">
                                    <div class="col-md-8 update-text">
                                        <h2 class="card-title"><strong class="text-dinim">Don't Miss an Update</strong></h2>
                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to  </p>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <a class="read-more bg-dinim text-center float-right" data-mdb-ripple-color="dark">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-down-left">
                        <div class="card card-updates bg-white">
                            <div class="card-body text-center d-flex align-items-center justify-content-center">
                                <h2 class="card-title"><strong class="text-dinim">Other Service <br> Support <br> <i class="bi bi-arrow-right-circle-fill icon-service"></i> </strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Update Section -->

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



