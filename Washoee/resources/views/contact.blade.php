@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center text-white py-5 float-in-bottom float-in-bottom">
        <h1 class="display-4">Our Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Our Contact Section -->
<section class="contact-section py-5 ">
    <div class="container float-in-bottom">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-map-marker-alt fa-3x custom-icon-contact"></i>
                <h4 class="mt-3">Our Address</h4>
                <p>Jl. Raya Tajem</p>
                <p>Gg. Labu</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-phone fa-3x custom-icon-contact"></i>
                <h4 class="mt-3">Phone Number</h4>
                <p>+62 812-3456-7890</p>
                <p>+62 813-1887-9455</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-envelope fa-3x custom-icon-contact"></i>
                <h4 class="mt-3">Email</h4>
                <p>info@washoee.com</p>
                <p>contact@washoee.com</p>
            </div>
        </div>
    </div>
</section>


<!-- Social Media Section -->
<section class="social-media-section py-5">
    <div class="container text-center float-in-bottom">
        <h2>Follow Us</h2>
        <div class="d-flex justify-content-center mt-4">
            <a href="https://facebook.com" target="_blank" class="social-icon mx-3 custom-icon">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="social-icon mx-3 custom-icon">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-icon mx-3 custom-icon">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-icon mx-3 custom-icon">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="location-section py-5 float-in-bottom">
    <div class="container">
        <h2>Our Branch Location</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://maps.google.com/maps?q=-7.753773,110.404089&z=15&output=embed"></iframe>
            </div>
        <p>Gg. Labu, Gempol, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
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
