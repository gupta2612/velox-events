@extends('layout.main')
@section('title')
<title>LED Screens || {{ config('app.name') }}</title>
@endsection
@section('main-content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main" style="background-image:url({{ asset('assets/images/pexels-wendy-wei-1190297.jpg') }});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Velox Events</h5>
                    <h1 class="mb-0 white">LED Screens</h1>
                </div>
            </div>
        </div>
        <div class="bread-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- about-us starts -->
    <section class="about-us about-before pt-12">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-5 pe-4">
                        <div class="about-content section-title text-lg-start text-center mb-4">
                            <h3 class="h-title">Services</h3>
                            <h4 class="theme"> LED Screens</h4>
                            <div class="selector4" style="display: flex; justify-content: center;">
                                <h2 class="ah-headline">
                                  <span>Conference, Seminars &</span>
                                  <span class="ah-words-wrapper white theme">
                                    <b class="is-visible textcap">Events</b>
                                    <b>Events</b>
                                  </span>
                                </h2>
                            </div>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 Quis ip suspendisse ultrices gravida. Risus commodo</p>
                        </div>
                    </div>
                    <div class="col-lg-7 ps-4">
                        <div class="about-features" style="background-image:url({{ asset('assets/images/contentbg.png') }});">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <img src="{{ asset('assets/images/about/busi-3.jpg') }}" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/images/about/busi-1.jpg') }}" alt="" class="mb-4">
                                    <img src="{{ asset('assets/images/about/busi-2.jpg') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about-us ends -->

    <!-- about-us starts -->
    <section class="about-us about-features pt-12 pb-8" style="background-image:url({{ asset('assets/images/testimonial-1.png') }});">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 pe-lg-4">
                        <div class="about-features">
                            <div class="features-infobox border-all d-flex align-items-center p-4 box-shadow bg-white mb-4">
                                <div class="infobox-icon me-3">
                                    <i class="fas fa-lightbulb fs-1 theme"></i>
                                </div>
                                <div class="box-body">
                                    <h4 class="infobox-title mb-1">Our Vision </h4>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                            <div class="features-infobox border-all d-flex align-items-center p-4 box-shadow bg-white mb-4">
                                <div class="infobox-icon me-3">
                                    <i class="fas fa-users fs-1 theme"></i>
                                </div>
                                <div class="box-body">
                                    <h4 class="infobox-title mb-1">Community Sharing  </h4>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                            <div class="features-infobox border-all d-flex align-items-center p-4 box-shadow bg-white">
                                <div class="infobox-icon me-3">
                                    <i class="fas fa-gear fs-1 theme"></i>
                                </div>
                                <div class="box-body">
                                    <h4 class="infobox-title mb-1">Exchange the Idea </h4>
                                    <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <div class="about-content text-center text-lg-start mb-4">
                            <h3 class="h-title">Culture</h3>
                            <h4 class="theme">Our Culture</h4>
                            <div class="selector4" style="display: flex; justify-content: center;">
                                <h2 class="ah-headline">
                                  <span>Learn More About Our</span>
                                  <span class="ah-words-wrapper white theme">
                                    <b class="is-visible textcap">Values</b>
                                    <b>Values</b>
                                  </span>
                                </h2>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 Quis ip suspendisse ultrices gravida. Risus commodo</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about-us ends -->
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

@endsection