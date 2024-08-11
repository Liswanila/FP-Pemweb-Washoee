@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">

<section class="hero-section">
    <div class="container text-center text-white py-5 float-in-bottom">
        <h1 class="display-4">Pricing Package</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Pricing</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container ">
    <section id="pricing" class="py-5">
        <div class="row">
            <div class="col-lg-12 text-center float-in-bottom">
                <h2 class="section-heading text-uppercase">Best price for our customers</h2>
                <p class="text-muted">Choose the best service plan for your needs.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center float-in-bottom">Basic Cleaning</h4>
                        <p class="card-text text-center float-in-bottom"> Basic Cleaning </p>
                        <p class="card-text text-center float-in-bottom"> Upper Clean </p>
                        <p class="card-text text-center float-in-bottom"> Insole & Lining </p>
                        <p class="card-text text-center float-in-bottom"> Attention to Detail </p>
                        <p class="card-text text-center float-in-bottom"> Basic Finishing </p>
                        <h5 class="card-price text-center float-in-bottom">$5.99</h5>
                        <div class="text-center">
                        <a href="{{ route('payment.show') }}" class="btn custom-btn-service">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center float-in-bottom">Deep Cleaning</h4>
                        <p class="card-text text-center float-in-bottom"> Deep Cleaning </p>
                        <p class="card-text text-center float-in-bottom"> Upper Clean </p>
                        <p class="card-text text-center float-in-bottom"> Insole & Lining </p>
                        <p class="card-text text-center float-in-bottom"> Attention to Detail </p>
                        <p class="card-text text-center float-in-bottom"> Deep Finishing </p>
                        <h5 class="card-price text-center float-in-bottom">$7.99</h5>
                        <div class="text-center">
                        <a href="{{ route('payment.show') }}" class="btn custom-btn-service">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center float-in-bottom">Extra Cleaning</h4>
                        <p class="card-text text-center float-in-bottom"> Extra Cleaning </p>
                        <p class="card-text text-center float-in-bottom"> Upper Clean </p>
                        <p class="card-text text-center float-in-bottom"> Insole & Lining </p>
                        <p class="card-text text-center float-in-bottom"> Attention to Detail </p>
                        <p class="card-text text-center float-in-bottom"> Extra Finishing </p>
                        <h5 class="card-price text-center float-in-bottom">$12.99</h5>
                        <div class="text-center">
                        <a href="{{ route('payment.show') }}" class="btn custom-btn-service">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Advantages Section -->
    <section id="advantages" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase mb-4 float-in-bottom">Our Advantages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title float-in-bottom">Quality Service</h4>
                            <p class="card-text float-in-bottom">We provide high-quality cleaning with attention to detail.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title float-in-bottom">Affordable Pricing</h4>
                            <p class="card-text float-in-bottom">Our pricing is competitive and affordable for all budgets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 float-in-bottom">
                    <div class="card shadow border-0">
                        <div class="card-body text-center">
                            <h4 class="card-title float-in-bottom">Free Delivery</h4>
                            <p class="card-text float-in-bottom">We provide free pick-up and delivery for all plans.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Contact Us Section -->
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
