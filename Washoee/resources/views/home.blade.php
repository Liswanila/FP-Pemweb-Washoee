@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-content float-in-bottom">
            <h1 class="display-4">Welcome to Washoee</h1>
            <p class="hero-text">Your one-stop shop for shoe cleaning and care services.</p>
            <a href="{{ route('services') }}" class="btn btn-primary custom-btn">Explore Services</a>
            <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
                    <a href="{{ route('about') }}" class="btn btn-secondary custom-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services py-5 bg-light">
        <div class="container">
            <h2 class="text-center float-in-bottom">Our Services</h2>
            <div class="row">
                <div class="col-md-4 float-in-bottom">
                    <div class="service-item text-center p-3">
                        <h3>Shoe Cleaning</h3>
                        <p>Professional shoe cleaning service to keep your shoes looking new.</p>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary custom-btn-service">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 float-in-bottom">
                    <div class="service-item text-center p-3">
                        <h3>Shoe Repair</h3>
                        <p>Expert shoe repair services to fix your worn-out shoes.</p>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary custom-btn-service">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 float-in-bottom">
                    <div class="service-item text-center p-3">
                        <h3>Shoe Care Products</h3>
                        <p>Premium shoe care products for maintaining your shoes.</p>
                        <a href="{{ route('services') }}" class="btn btn-outline-primary custom-btn-service">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="step-by-step py-5 text-center">
        <div class="container">
            <h2 class="float-in-bottom">Step by Step</h2>
            <h3 class="mb-5 float-in-bottom">How our service work</h3>
            <div class="row">
                <div class="col-md-3 float-in-bottom">
                    <div class="step-item p-4">
                        <h4>01</h4>
                        <h5>Contact us for pickups</h5>
                        <p>Schedule a convenient pickup time through our website or give us a call. Our team will come to your location to collect your shoes.</p>
                        <a href="{{ route('services') }}" class="btn btn-link">Services</a>
                    </div>
                </div>
                <div class="col-md-3 float-in-bottom">
                    <div class="step-item p-4">
                        <h4>02</h4>
                        <h5>Your shoes are picked up</h5>
                        <p>Our friendly staff will carefully pick up your shoes from your doorstep, ensuring they are safely transported to our facility for cleaning.</p>
                        <a href="{{ route('tracking') }}" class="btn btn-link">Track</a>
                    </div>
                </div>
                <div class="col-md-3 float-in-bottom">
                    <div class="step-item p-4">
                        <h4>03</h4>
                        <h5>Start the cleaning process</h5>
                        <p>Our experts will begin the thorough cleaning process, using premium products and techniques to restore your shoes to their best condition.</p>
                        <a href="{{ route('tracking') }}" class="btn btn-link">Track</a>
                    </div>
                </div>
                <div class="col-md-3 float-in-bottom">
                    <div class="step-item p-4">
                        <h4>04</h4>
                        <h5>Ready to be delivered to you</h5>
                        <p>Once your shoes are perfectly clean and dry, we'll arrange a prompt delivery back to your doorstep. Enjoy your cleaned shoes!</p>
                        <a href="{{ route('contact') }}" class="btn btn-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5 text-center text-white" style="background-color: #427D9D;">
        <div class="container float-in-bottom">
            <h2>Contact Us</h2>
            <p>Have a question or need support? Contact us today.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary custom-btn-contact">Get in Touch</a>
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
@endpush
