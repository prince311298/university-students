@extends('layouts.app')

@section('content')
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1920x600" class="d-block w-100" alt="Hero Slide 1">
            <div class="carousel-caption">
                <h1>Welcome to UniCourses</h1>
                <p>Learn from the best instructors around the world.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1920x600" class="d-block w-100" alt="Hero Slide 2">
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
    <h2 class="text-center">Our Courses</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Programming">
                <div class="card-body">
                    <h5 class="card-title">Programming</h5>
                    <p class="card-text">Learn coding, algorithms, and web development.</p>
                    <a href="#" class="btn btn-primary">View Courses</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Design">
                <div class="card-body">
                    <h5 class="card-title">Design</h5>
                    <p class="card-text">Master graphic and UI/UX design skills.</p>
                    <a href="#" class="btn btn-primary">View Courses</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Marketing">
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
            <div class="col-md-4">
                <img src="https://via.placeholder.com/100" alt="Mission">
                <h4>Our Mission</h4>
                <p>Empowering students with knowledge and skills.</p>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/100" alt="Values">
                <h4>Our Values</h4>
                <p>Commitment to quality and lifelong learning.</p>
            </div>
        </div>
    </div>
</section>
@endsection
