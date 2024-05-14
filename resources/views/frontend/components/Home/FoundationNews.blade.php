    
     <!-- ======= Foundation News ======= -->
     <section class="bg-light-gray">
        <div class="container">
            <div class="foundation-news-content">
                <div class="foundation-news-title text-center mb-3">
                    <h2><strong>Read the Foundation News</strong></h2>
                </div>


                <div class="owl-carousel owl-theme row">
                    @foreach ($currentNews as $data)
                        <div class="w-100 item px-2">
                            <div class="card bg-white" style="min-height: 40vh;">
                                <div class="w-100 d-flex justify-content-center mt-4">
                                    <img src="/images/Blog/{{ $data->image }}" class="card-img-top" alt="...">
                                </div>

                                <div class="card-body mb-4" >
                                    <h5 class="card-title">{{ $data->title }}</h5>
                                    <p class="card-text">Residents of Wilunze Village in Chamwino District, Dodoma Region, have expressed gratitude for the implementation...</p>
                                    <a class="read-more-dinim float-right" data-mdb-ripple-color="dark">
                                        MORE
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                    <div class="w-100 item  px-2">
                        <div class="card bg-white" style="min-height: 40vh;">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/uraia_project-1.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">Fondation for Civil Society And ....</h5>
                                <p class="card-text">Foundation for Civil Society and Partners Reflect on Uraia Wetu Project Progress Dar es salaam yetu Project Progress Dar es…</p>
                                <a class="read-more-dinim float-right" data-mdb-ripple-color="dark">
                                    MORE
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 item  px-2">
                        <div class="card bg-white" style="min-height: 40vh;">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/G57A6554.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">Building Partnerships For development...</h5>
                                <p class="card-text">Civil Society Organizations (CSOs) in East Africa are recognizing the critical importance of effective collaboration of effective ,…</p>
                                <a class="read-more-dinim float-right" data-mdb-ripple-color="dark">
                                    MORE
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 item  px-2">
                        <div class="card bg-white" style="min-height: 40vh;">
                            <div class="w-100 d-flex justify-content-center mt-4">
                                <img src="{{ url('frontend/assets/img/home/Aid-Localization.jpg') }}" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body mb-4">
                                <h5 class="card-title">CSO Sustainability: Aid Localization ...</h5>
                                <p class="card-text">In a bid to align their goals with anticipated aid funding and ensure effective utilization, civil society organizations...</p>
                                <a class="read-more-dinim float-right" data-mdb-ripple-color="dark">
                                    MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Foundation News Section -->

