    <!-- ======= Where we Work ======= -->
    <section id="where-we-work" class="work bg-light-gray">
        <div class="container" data-aos="fade-up">
            <div class="who-are-we">
                <!-- About section -->
                <div id="who-we-are">
                    <div class="row h-100">
                        <div class="col-lg-6 pt-4 d-flex align-items-center pt-lg-0" data-aos="fade-left">
                            <img src="/images/aboutUs/{{ $WorkLocation->image }}" class="img-map" alt="">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-right">
                            <div class="d-flex flex-column">
                                <div class="about-title text-center">
                                    <h3> {!! $WorkLocation->title !!}</h3>
                                </div>
                                <p class="independent-title">
                                    {!! $WorkLocation->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Where we Work Section -->