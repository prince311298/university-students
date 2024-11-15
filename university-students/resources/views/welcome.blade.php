@extends('layouts.app')

@section('content')
    <style>
        .carousel-control-next,
        .carousel-control-prev {
            top: 80px;
        }

        .carousel-caption {
            z-index: 2
        }

        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
    </style>
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <span id="overlay"></span>
                <img src="{{ url('asset/banner/welcome.png') }}" class="d-block w-100" alt="Hero Slide 1">
                <div class="carousel-caption">
                    <h1>Welcome to UniCourses</h1>
                    <p>Learn from the best instructors around the world.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
            <div class="carousel-item">
                <span id="overlay"></span>
                <img src="{{ url('asset/banner/master-skills.png') }}" class="d-block w-100" alt="Hero Slide 2">
                <div class="carousel-caption">
                    <h1>Master New Skills</h1>
                    <p>Explore a wide range of courses in various categories.</p>
                    <a href="#" class="btn btn-primary">Browse Courses</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="container my-5">
        <h2 class="text-center pb-4">Our Courses</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('asset/images/1.png') }}" class="card-img-top" alt="Programming">
                    <div class="card-body">
                        <h5 class="card-title">Programming</h5>
                        <p class="card-text">Learn coding, algorithms, and web development.</p>
                        <a href="#" class="btn btn-primary">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('asset/images/2.png') }}" class="card-img-top" alt="Design">
                    <div class="card-body">
                        <h5 class="card-title">Design</h5>
                        <p class="card-text">Master graphic and UI/UX design skills.</p>
                        <a href="#" class="btn btn-primary">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('asset/images/3.png') }}" class="card-img-top" alt="Marketing">
                    <div class="card-body">
                        <h5 class="card-title">Marketing</h5>
                        <p class="card-text">Learn digital marketing and SEO techniques.</p>
                        <a href="#" class="btn btn-primary">View Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>About Us</h2>
            <p>UniCourses is a platform dedicated to helping you achieve your goals with high-quality courses.</p>
            <div class="row">
                <div class="responsive-container-block bigContainer">
                    <div class="responsive-container-block Container">
                        <img class="mainImg"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eaboutus1.svg">
                        <div class="allText aboveText">
                            <p class="text-blk headingText">
                                Our Mission
                            </p>
                            <p class="text-blk subHeadingText">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p class="text-blk description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper
                                suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum
                                ut.
                            </p>
                            <button class="explore">
                                Explore
                            </button>
                        </div>
                    </div>
                    <div class="responsive-container-block Container bottomContainer">
                        <img class="mainImg"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/xpraup2.svg">
                        <div class="allText bottomText">
                            <p class="text-blk headingText">
                                Our Vision
                            </p>
                            <p class="text-blk subHeadingText">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <p class="text-blk description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper
                                suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum
                                ut.
                            </p>
                            <button class="explore">
                                Explore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
