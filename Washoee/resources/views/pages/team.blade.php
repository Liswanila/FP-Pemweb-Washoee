@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/team.css') }}">

<section class="hero-section">
    <div class="container text-center text-white py-5">
        <h1 class="display-4 float-in-bottom">Meet Our Team</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent float-in-bottom">
                <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Team</li>
            </ol>
        </nav>
    </div>
</section>

<section class="team-intro py-5 float-in-bottom">
    <div class="container text-center">
        <h2 class="mb-4">Our Dedicated Team</h2>
        <p>Our team is composed of highly skilled professionals who are passionate about what they do. Meet the people who make our services extraordinary.</p>
    </div>
</section>

<section class="team-section py-5 float-in-bottom">
    <div class="container">
        <!-- First Row: Team Member 1, 2, 3 -->
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/rilly.jpg') }}" alt="Team Member 1" class="img-fluid rounded-circle mb-3">
                    <h4>Muhammad Rilly</h4>
                    <p>Back-End</p>
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/rillyayidan" target="_blank" class="social-icon"><i class="fab fa-facebook-f float-in-bottom"></i></a>
                        <a href="https://www.instagram.com/rillyayidan/" target="_blank" class="social-icon"><i class="fab fa-instagram float-in-bottom"></i></a>
                        <a href="https://www.linkedin.com/in/rillyayidan/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in float-in-bottom"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/liswan.jpg') }}" alt="Team Member 2" class="img-fluid rounded-circle mb-3">
                    <h4>Liswan Saifullah</h4>
                    <p>Front-End</p>
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/liswan.saifullah.1" target="_blank" class="social-icon"><i class="fab fa-facebook-f float-in-bottom"></i></a>
                        <a href="https://www.instagram.com/liswnsfll_/" target="_blank" class="social-icon"><i class="fab fa-instagram float-in-bottom"></i></a>
                        <a href="https://www.linkedin.com/in/liswan-saifullah/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in float-in-bottom"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/faris.jpg') }}" alt="Team Member 3" class="img-fluid rounded-circle mb-3">
                    <h4>Faris Ammar</h4>
                    <p>Front-End</p>
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/farisammar.faishal.5" target="_blank" class="social-icon"><i class="fab fa-facebook-f float-in-bottom"></i></a>
                        <a href="https://www.instagram.com/a_mrfrshl/" target="_blank" class="social-icon"><i class="fab fa-instagram float-in-bottom"></i></a>
                        <a href="https://www.linkedin.com/in/faris-ammar-faishal-6aa06b274/" target="_blank" class="social-icon float-in-bottom"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="team-member text-center">
                    <img src="{{ asset('images/big-smoke.jpg') }}" alt="Team Member 4" class="img-fluid rounded-circle mb-3">
                    <h4>Atqiya Trianda</h4>
                    <p>Web Design</p>
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/atqiya.trianda" target="_blank" class="social-icon"><i class="fab fa-facebook-f float-in-bottom"></i></a>
                        <a href="https://www.instagram.com/cherurno/" target="_blank" class="social-icon"><i class="fab fa-instagram float-in-bottom"></i></a>
                        <a href="https://www.linkedin.com/in/atqiyatrianda75/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in float-in-bottom"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/van.jpg') }}" alt="Team Member 5" class="img-fluid rounded-circle mb-3">
                    <h4>Christian Nery</h4>
                    <p>Web Design</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f float-in-bottom"></i></a>
                        <a href="https://www.instagram.com/vanss.22/" target="_blank" class="social-icon"><i class="fab fa-instagram float-in-bottom"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in float-in-bottom"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact py-5 text-center text-white" style="background-color: #427D9D;">
        <div class="container float-in-bottom">
            <h2>Contact Us</h2>
            <p>Have a question or need support? Contact us today.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary custom-btn-contact ">Get in Touch</a>
            <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
