@extends('layout.main')
@section('title')
<title>Career || {{ config('app.name') }}</title>
@endsection
@section('main-content')
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main" style="background-image:url({{ asset('assets/images/pexels-wendy-wei-1190297.jpg') }});">
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center pt-14 pb-2">
                    <h5 class="theme mb-0">Velox Events</h5>
                    <h1 class="mb-0 white">Career</h1>
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
                    <div class="col-lg-12 pe-12">
                        <div class="about-content section-title text-lg-start text-center mb-4">
                            <h3 class="h-title">Career</h3>
                            <h4 class="theme"> Career</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                 Quis ip suspendisse ultrices gravida. Risus commodo</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about-us ends -->

@endsection