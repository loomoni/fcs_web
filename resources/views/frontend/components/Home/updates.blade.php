    <!-- ======= Update ======= -->

    <style>
        .card-updates {
            position: relative;
            border: 2px solid transparent; /* Adjust border width as needed */
            border-radius: 10px; /* Adjust border radius as needed */
            overflow: hidden;
        }
        
        .card-updates::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, blue, yellow, green, blue);
            z-index: -1;
            border-radius: 12px; /* Adjust border radius to match card border radius */
            animation: flow 5s linear infinite; /* Adjust animation duration as needed */
            background-size: 400% 400%;
        }
        
        @keyframes flow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
    <section class="updates">
        <div class="container">
            <div class="postcast-content">
                <div class="row">
                    <div class="col-md-7 item" data-aos="fade-down"
                                                data-aos-easing="linear"
                                                data-aos-duration="1500">
                        <div class="card card-updates bg-white">
                            <div class="card-body text-center mb-4">
                                <div class="row">
                                    <div class="col-md-8 update-text">
                                        <h2 class="card-title"><strong class="text-dinim">Our Flagship Event CSO Week</strong></h2>
                                            
                                        <!-- <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to  </p> -->
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <a class="read-more bg-dinim text-center float-right" data-mdb-ripple-color="dark">
                                            Website
                                        </a>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 item" data-aos="fade-right"
                                                data-aos-offset="300"
                                                data-aos-easing="ease-in-sine">
                        <div class="card card-updates bg-white">
                            <div class="card-body text-center mb-4">
                                <div class="row">
                                    <div class="col-md-8 update-text">
                                        <h2 class="card-title"><strong class="text-dinim">Don't Miss an Update</strong></h2>
                                        <!-- <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to  </p> -->
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

                    <!-- <div class="col-md-4">
                        <div class="card card-updates bg-white">
                            <div class="card-body text-center d-flex align-items-center justify-content-center">
                                <h2 class="card-title"><strong class="text-dinim">Other Service <br> Support <br> <i class="bi bi-arrow-right-circle-fill icon-service"></i> </strong></h2>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Update Section -->