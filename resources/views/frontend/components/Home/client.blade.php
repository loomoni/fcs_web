    <!-- ======= Clients ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up" data-aos-once="false">
            <div class="who-are-we">
               
                <!-- About section -->
                <div id="who-we-are">
                    <div class="row h-100">
                        <div class="col-lg-6 d-flex align-items-start justify-content-start" data-aos="fade-right" data-aos-once="false">
                            <div class="d-flex flex-column">
                                <div class="about-title">
                                    <h3>Our Partners</h3>
                                    <h4>All over the globe</h4>
                                </div>
                                <p class="independent-title">
                                    Foundation for Civil Society(fCS) is a citizen-centered
                                    institution that facilitates, capacitates anda ccelerates
                                </p>
                
                            </div>
                        </div>
                        
                        <div class="col-lg-6 pt-4 d-flex align-items-center pt-lg-0" data-aos="fade-left" data-aos-once="false">
                            <div class="row no-gutters clidents-wrap clearfisx" data-aos="fade-up" data-aos-once="false">
                                @if ($client != null)
                                    @foreach ($client as $data)
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="sclient-logo">
                                            <img src="/images/logo/{{ $data->logo }}" class="simg-fluid" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                              
                      
                                {{-- <div class="col-lg-6 col-md-6 col-6">
                                  <div class="sclient-logo">
                                    <img src="{{ ('frontend/images/partner1.png') }}" class="ismg-fluid" alt="">
                                  </div>
                                </div> --}}
                           
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Clients Section ======= -->
