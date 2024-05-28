    <!-- ======= Success Stories ======= -->
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

    <style>
        .custom-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.5);;
            text-decoration: none;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
        }
        .carousel-control-prev.custom-control {
            left: -10px; /* Adjust based on your layout */
        }
        .carousel-control-next.custom-control {
            right: -10px; /* Adjust based on your layout */
        }
        .custom-arrow {
            display: inline-block;
            color: grey;
            font-size: 2.5rem;
        }
        .custom-control:hover .custom-arrow {
            color: #398abd; /* Ensure the arrow color changes on hover if needed */
        }
        .carousel-control-prev,
        .carousel-control-next {
            opacity: 1;
        }
    </style>
    
    


    <section class="success-stories">
        <div class="container position-relative">
            <div class="postcast-content">
                <div id="storiesCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-8 offset-2 item mt-3" data-aos="zoom-in-up" data-aos-once="false">
                                    <div class="card card-story bg-white">
                                        <div class="story-img">
                                            <img src="{{ url('frontend/images/Francis-Kiwanga.png') }}" class="team-image" alt="">
                                        </div>
                                        <div class="story-btn">
                                            <a class="read-more bg-dinim text-center float-right w-20" data-mdb-ripple-color="dark">
                                                More
                                            </a>
                                        </div>
                                        <div class="card-body body-story text-center mb-4">
                                            <h5 class="card-title">SUCCESS STORIES</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-8 offset-2 item mt-3" data-aos="zoom-in-up" data-aos-once="false">
                                    <div class="card card-story bg-white">
                                        <div class="story-img">
                                            <img src="{{ url('frontend/images/director.png') }}" class="team-image" alt="">
                                        </div>
                                        <div class="story-btn">
                                            <a class="read-more bg-dinim text-center float-right w-20" data-mdb-ripple-color="dark">
                                                More
                                            </a>
                                        </div>
                                        <div class="card-body body-story text-center mb-4">
                                            <h5 class="card-title">ANOTHER SUCCESS STORY</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more carousel items as needed -->
                    </div>
                    <a class="carousel-control-prev custom-control" href="#storiesCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        <span class="custom-arrow">&larr; </span>
                    </a>
                    <a class="carousel-control-next custom-control" href="#storiesCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        <span class="custom-arrow"> &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- End Success Stories Section -->
