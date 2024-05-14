    <!-- ======= Wo are we ======= -->
    <section id="about-us" class="about-us who-we-are">
        <div class="container" >
            <div class="who-are-we">
                <div class="text-primary  about-title mx-5">
                    <h3>{{ $Aboutus->title }}</h3>
                </div>
                <!-- About section -->
                {{-- <div data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"> --}}
                <div id="who-we-are"  data-aos="flip-left"
                                      data-aos-easing="ease-out-cubic"
                                       data-aos-duration="2000" data-aos-once="false">
                    <div class="row h-100">
                        <div class="col-lg-6 d-flex align-items-start justify-content-start text-dinim">
                            <div class="d-flex flex-column">
                                <p class="who-title">
                                  {!! $Aboutus->description !!}
                                </p>

                                <a class="read-more text-center float-right w-25" data-mdb-ripple-color="dark">
                                    More
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 pt-4 d-flex align-items-end justify-content-center pt-lg-0" data-aos="zoom-in-down" data-aos-once="false">
                            <div class="vertical-line"></div>
                            <img src="/images/aboutUs/{{ $Aboutus->image }}" class="img-fluid-who" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6" >
                            <img src="{{ url('frontend/images/back-rem.png') }}" class="w-100 h-100"  alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who are we Section -->
