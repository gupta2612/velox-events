
@extends('layout.main')
@section('title')
<title>{{ config('app.name') }}</title>
@endsection
@section('main-content')
    <!-- banner starts -->
    <section class="banner pt-10 pb-0 overflow-hidden" style="background-image:url({{ asset('assets/images/pexels-wendy-wei-1190297.jpg') }});">
        <div class="container">
            <div class="banner-in pt-6">
                <div class="row align-items-end">
                    <div class="col-lg-7 mb-10">
                        <div class="banner-content text-lg-start text-center">
                            <h4 class="theme mb-0">Big Event 2022</h4>
                            <div class="selector4" style="display: flex; justify-content: center;">
                                <h1 class="ah-headline white">
                                  <span>World Biggest 2023</span>
                                  <span class="ah-words-wrapper white">
                                    <b class="is-visible textcap">Conference</b>
                                    <b>Conference</b>
                                  </span>
                                </h1>
                            </div>
                            <p class="mb-0 white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-image" style="background-image:url({{ asset('assets/images/manbg.png') }});">
                            <img src="{{ asset('assets/images/man4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="color-overlay"></div>
    </section>
    <!-- banner ends -->

    <!-- coming counter starts -->
    <section class="coming-countermain p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-lg-offset-5">
                    <div class="coming-counter d-md-flex align-items-center justify-content-between p-4 py-5 text-md-start text-center" data-date="2024-02-28 12:30:00">
                        <div class="counter-box"><span class="days"></span><br> Days</div>
                        <div class="counter-box"><span class="hours"></span><br> Hours</div>
                        <div class="counter-box"><span class="minutes"></span><br> Minutes</div>
                        <div class="counter-box"><span class="seconds"></span><br> Seconds</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- coming counter Ends -->

     <!-- about-us starts -->
     <section class="about-us about-features pt-12 pb-8" style="background-image:url({{ asset('assets/images/testimonial-1.png') }});">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-7 pe-lg-4">
                        <div class="about-features" style="background-image:url({{ asset('assets/images/contentbg.png') }});">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="features-infobox border-all p-5 box-shadow bg-white text-center mb-4">
                                        <div class="infobox-icon mb-2">
                                            <i class="fa fa-users fs-1 theme"></i>
                                        </div>
                                        <div class="box-body">
                                            <h4 class="infobox-title">Wedding Planning </h4>
                                            <p class="mb-2">Duis aute irure dolor in reprehenderit </p>
                                            <a href="#" class="theme">Read More <i class="fa fa-angle-right "></i></a>
                                        </div>
                                    </div>
                                    <div class="features-infobox border-all p-5 box-shadow bg-white text-center mb-4">
                                        <div class="infobox-icon mb-2">
                                            <i class="fa fa-flag fs-1 theme"></i>
                                        </div>
                                        <div class="box-body">
                                            <h4 class="infobox-title">Culture Planning</h4>
                                            <p class="mb-2">Duis aute irure dolor in reprehenderit </p>
                                            <a href="#" class="theme">Read More <i class="fa fa-angle-right "></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="features-infobox border-all p-5 box-shadow bg-white text-center mb-4">
                                        <div class="infobox-icon mb-2">
                                            <i class="fa fa-gear fs-1 theme"></i>
                                        </div>
                                        <div class="box-body">
                                            <h4 class="infobox-title">Audio & Sound Systems</h4>
                                            <p class="mb-2">Duis aute irure dolor in reprehenderit </p>
                                            <a href="#" class="theme">Read More <i class="fa fa-angle-right "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ps-lg-4">
                        <div class="about-content text-center text-lg-start mb-4">
                            <h4 class="h-title">Events</h4>
                            <div class="selector4" style="display: flex; justify-content: center;">
                                <h2 class="ah-headline">
                                  <span>Why You Should Join The</span>
                                  <span class="ah-words-wrapper white theme">
                                    <b class="is-visible textcap">Velox Events?</b>
                                    <b>Velox Events?</b>
                                  </span>
                                </h2>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 Quis ip suspendisse ultrices gravida. Risus commodo</p>
                            <a href="event-detail.html" class="nir-btn">About Us <i class="fa fa-angle-right "></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about-us ends -->

    <div class="event-seperator">
        <div class="container">
            <div class="event-seperator-divider d-flex border-b pt-2">
                <div class="event-seperator-icon position-absolute start-50 top-0 bg-white p-1">
                    <i class="fas fa-star theme fs-5"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- our teams starts -->
    <section class="event-team" style="background-image: url({{ asset('assets/images/manbg.png') }});">
        <div class="container">

            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">Successfull</h3>
                <h4 class="theme">Successful Events</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>Experience Events With </span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">Knowledge</b>
                        <b>Knowledge</b>
                        </span>
                    </h2>
                </div>
            </div>

            <div class="team-main">
                <div class="row align-items-center">
                    <div class="col-lg-3 mb-4">
                        <div class="team-list position-relative">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img6.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Gerardo Ambrose </h4>
                                <p class="mb-3 white">Senior Agent</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list position-relative mb-4">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img2.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Horke Pels</h4>
                                <p class="mb-3 white">Head Officer</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="team-list position-relative">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img3.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Horke Pels</h4>
                                <p class="mb-3 white">Head Officer</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list position-relative mb-4">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img4.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Horke Pels</h4>
                                <p class="mb-3 white">Head Officer</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <div class="team-list position-relative">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img1.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Horke Pels</h4>
                                <p class="mb-3 white">Head Officer</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <div class="team-list position-relative">
                            <div class="team-image border-all p-2 bg-white">
                                <img src="{{ asset('assets/images/team/img5.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-4">
                                <h4 class="mb-0 theme">Horke Pels</h4>
                                <p class="mb-3 white">Head Officer</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>

                </div>
                <div class="speaker-btn text-center">
                    <a href="speaker-detail.html" class="nir-btn">View All Events <i class="fa fa-angle-right "></i></a>
                </div>

            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- our teams Ends -->

    <!-- event-calltoaction starts -->
    <section class="event-calltoaction pb-0" style="background-image: url({{ asset('assets/images/pexels-sascha.jpg') }});">
        <div class="container">
            <div class="section-title mb-5 w-60 mx-auto text-center">
                <h3 class="h-title theme-stroke">Expo</h3>
                <h4 class="theme">Join Dubai Expo 2024</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span class="white">Join Us At 20th Dubai Expo </span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">2024</b>
                        <b>2023</b>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="event-expo w-60 mx-auto mb-7">
                <div class="event-expo-item mb-4" style="background-color: #FFFFFF1F;">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="expo-icon p-4 py-5 bg-theme text-center">
                                <i class="fa fa-calendar white fs-1"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <p class="mb-0 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis</p>
                        </div>
                    </div>
                </div>
                <div class="event-expo-item" style="background-color: #FFFFFF1F;">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="expo-icon p-4 py-5 bg-white text-center">
                                <i class="fa fa-bar-chart theme fs-1"></i>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <p class="mb-0 white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-expo w-75 mx-auto position-relative mb-minus">
                <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="" class="p-2 bg-white">
                <div class="video-button text-center position-absolute top-50 start-50 z-index2 translate-50">
                    <div class="call-button text-center">
                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                            <i class="fa fa-play bg-blue"></i>
                        </button>
                    </div>
                    <div class="video-figure"></div>
                </div>

            </div>
        </div>
        <div class="theme-overlay"></div>
    </section>
    <!-- event-calltoaction ends -->

    <!-- testomonial start -->
    <section class="event-testimonial pt-18 pb-7 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-4">
                    <div class="section-title text-center text-lg-start">
                        <h3 class="h-title">Testimonials</h3>
                        <h4 class="theme">Our Testimonials</h4>
                        <div class="selector4" style="display: flex; justify-content: center;">
                            <h2 class="ah-headline mb-0">
                                <span>What Peoples's Says About</span>
                                <span class="ah-words-wrapper white theme">
                                <b class="is-visible textcap">Velox Events</b>
                                <b>Velox Events</b>
                                </span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-7 pe-lg-5">
                    <div class="row review-slider">
                        <div class="col-sm-4 item">
                            <div class="testimonial-item bg-white p-5">
                                <div class="testi-details mb-4">
                                    <i class="fa fa-quote-left fs-1"></i>
                                    <p class="m-0">Lorem Ipsum is simply dummy
                                        text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                        has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                        unde inventore quasi vero dolorem.</p>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <img src="{{ asset('assets/images/reviewer/1.jpg') }}" alt="">
                                    <div class="author-title ms-3">
                                        <h5 class="m-0 theme">Jared Erondu</h5>
                                        <span>Supervisor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 item">
                            <div class="testimonial-item bg-white p-5">
                                <div class="testi-details mb-4">
                                    <i class="fa fa-quote-left me-2 fs-1"></i>
                                    <p class="m-0">Lorem Ipsum is simply dummy
                                        text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum
                                        has been the industry's standard dummy hic et quidem. Dignissimos maxime velit
                                        unde inventore quasi vero dolorem.</p>
                                </div>
                                <div class="author-info d-flex align-items-center">
                                    <img src="{{ asset('assets/images/reviewer/2.jpg') }}" alt="">
                                    <div class="author-title ms-3">
                                        <h5 class="m-0 theme">Jared Erondu</h5>
                                        <span>Supervisor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/images/testi-image.png') }}" alt="" class="opacity-50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends -->

    <!-- partner starts -->
    <section class="event-partners pb-8" style="background-image: url({{ asset('assets/images/contentbg.png') }});">
        <div class="container">
            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">Clients</h3>
                <h4 class="theme">Our Clients</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>Our Perfect & Successfull</span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">Clients</b>
                        <b>Clients</b>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="partners_inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-list border-all mb-4">
                            <img src="{{ asset('assets/images/cl-5.png') }}" alt="">
                        </div>
                        <div class="partner-list border-all">
                            <img src="{{ asset('assets/images/cl-3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-list border-all mb-4">
                            <img src="{{ asset('assets/images/cl-5.png') }}" alt="">
                        </div>
                        <div class="partner-list border-all">
                            <img src="{{ asset('assets/images/cl-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-list border-all mb-4">
                            <img src="{{ asset('assets/images/cl-1.png') }}" alt="">
                        </div>
                        <div class="partner-list border-all">
                            <img src="{{ asset('assets/images/cl-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="partner-list border-all mb-4">
                            <img src="{{ asset('assets/images/cl-2.png') }}" alt="">
                        </div>
                        <div class="partner-list border-all">
                            <img src="{{ asset('assets/images/cl-1.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="white-overlay opacity-75"></div>
    </section>
    <!-- partner ends -->

@endsection