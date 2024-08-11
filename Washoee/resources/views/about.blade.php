@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<section class="hero-section">
    <div class="container text-center text-white py-5 float-in-bottom">
        <h1 class="display-4">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</section>

<section class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 float-in-bottom">
                    <img src="{{ asset('images/about us.jpg') }}" class="about-us-image img-fluid" alt="About Us">
                </div>
                <div class="col-md-6 float-in-bottom">
                    <h2>About Us</h2>
                    <h1>Welcome to Washoee Laundry!</h1>
                    <p class="about-desc">At Washoee, we believe that every pair of shoes has a story to tell, and we're here to make sure that story continues with pride and freshness. Founded by a group of shoe enthusiasts, our mission is to breathe new life into your favorite footwear, one wash at a time.</p>
                    <a href="{{ route('pages.pricing') }}" class="btn btn-secondary custom-btn">Order Pickup</a>
                    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="skills-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 float-in-bottom">
                    <h2>Our Skills</h2>
                    <p>Our team possesses incredible skill and extensive experience in shoe care.</p>
                    <p>We excel in various aspects of shoe maintenance, from meticulous cleaning to precise repairs. Our skilled professionals are dedicated to restoring your shoes to their best condition, ensuring they look and feel as good as new. Trust us with your footwear, and experience unparalleled expertise and craftsmanship.</p>
                </div>
                <div class="col-md-6 float-in-bottom">
                    <div class="progress ">
                        <div class="progress-bar bg-164863" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">Technique 92%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-164863" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">Service 83%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-164863" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Satisfied Customers 95%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-164863" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">Price 68%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experiences-section py-5 float-in-bottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h2><span class="counter">1200</span>+</h2>
                    <p>Shoes Cleaned</p>
                </div>
                <div class="col-md-3">
                    <h2><span class="counter">800</span>+</h2>
                    <p>Happy Clients</p>
                </div>
                <div class="col-md-3">
                    <h2><span class="counter">1500</span>+</h2>
                    <p>Working Hours</p>
                </div>
                <div class="col-md-3">
                    <h2><span class="counter">900</span>+</h2>
                    <p>Positive Reviews</p>
                </div>
            </div>
        </div>
    </section>

    <section class="location-section py-5 float-in-bottom">
        <div class="container">
            <h2>Our Main Location</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q=-7.739127,110.434428&z=15&output=embed"></iframe>
            </div>
            <p>Jl. Raya Tajem 55584, Kenayan, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</p>
        </div>
    </section>

    <section class="contact py-5 text-center text-white" style="background-color: #427D9D;">
        <div class="container float-in-bottom">
            <h2>Contact Us</h2>
            <p>Have a question or need support? Contact us today.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary custom-btn-contact ">Get in Touch</a>
        </div>
    </section>
@endsection


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function handleScroll() {
            const elements = document.querySelectorAll('.float-in-bottom');
            const windowHeight = window.innerHeight;

            elements.forEach(el => {
                const position = el.getBoundingClientRect().top;
                if (position < windowHeight * 0.9) { // 0.9 for triggering the animation a bit earlier
                    el.classList.add('animate');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Initial check on page load
    });
</script>
