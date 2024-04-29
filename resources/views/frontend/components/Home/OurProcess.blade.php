
    <!-- ======= Our Process ======= -->
    <section class="our-process">
        <div class="container">
            <div class="foundation-news-content">
                <div class="our-process text-center text-lsf">
                    <h2><strong>We do this through</strong></h2>
                    <p>Strategic partnerships with CSOs, cummunity groups and other development actors in the following areas</p>
                </div>

                <div class="owl-carousel owl-theme row">
                   

                    <?php $count = 0; ?>
                        @foreach($processThrough as $data)
                            <?php $count++; ?>

                            @if ($count % 2 == 0)
                                <div class="w-100 item">
                                    <div class="card bg-white">
                                        <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-4">
                                            <div class="hexagon-part">
                                                <div class='hexagon-shape'>
                                                    <img src="/images/ProcessThrough/{{ $data->image }}" class="pent-img">
                                                </div>
                                            </div>
                                            <div class="line-after">
                                            </div>
                                            <div class="circle d-flex align-items-center justify-content-center">
                                                <span>{{ $count }}</span>
                                            </div>
                                        </div>

                                        <div class="card-body text-center mb-4">
                                            <h5 class="card-title">{{ $data->title }}</h5>
                                            <p class="card-text">{{ $data->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="w-100 item">
                                    <div class="card bg-white">
                                        <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-4">
                                            <div class="hexagon-part">
                                                <div class='hexagon-shape-2'>
                                                    <img src="/images/ProcessThrough/{{ $data->image }}" class="pent-img-4">
                                                </div>
                                            </div>
                                            <div class="line-after-2">
                                            </div>
                                            <div class="circle-2 d-flex align-items-center justify-content-center">
                                                <span>{{ $count }}</span>
                                            </div>
                                        </div>

                                        <div class="card-body text-center mb-4">
                                            <h5 class="card-title">{{ $data->title }}</h5>
                                            <p class="card-text">{{ $data->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @endforeach




                    {{-- <div class="w-100 item">
                        <div class="card bg-white">
                            <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-4">
                                <div class="hexagon-part">
                                    <div class='hexagon-shape'>
                                        <img src="{{ url('frontend/images/fcs/ELEMENTS/free-trust-1824261-1545946.webp') }}" class="pent-img-4">
                                    </div>
                                </div>
                                <div class="line-after">
                                </div>
                                <div class="circle d-flex align-items-center justify-content-center">
                                    <span>3</span>
                                </div>
                            </div>

                            <div class="card-body text-center mb-4">
                                <h5 class="card-title">Targeting promotion</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 item">
                        <div class="card bg-white">
                            <div class="w-100 d-flex flex-column align-items-center justify-content-center mt-4">
                                <div class="hexagon-part">
                                    <div class='hexagon-shape-2'>
                                        <img src="{{ url('frontend/images/fcs/ELEMENTS/1024px-Noun_Project_projects_icon_1327109_cc.svg.png') }}" class="pent-img-4">
                                    </div>
                                </div>
                                <div class="line-after-2">
                                </div>
                                <div class="circle-2 d-flex align-items-center justify-content-center">
                                    <span>4</span>
                                </div>
                            </div>

                            <div class="card-body text-center mb-4">
                                <h5 class="card-title">Targeting promotion</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Process Section -->

