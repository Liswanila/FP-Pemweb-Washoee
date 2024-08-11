@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/faqs.css') }}">

<section class="hero-section">
    <div class="container text-center text-white py-5 float-in-bottom">
        <h1 class="display-4 float-in-bottom">FAQs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent float-in-bottom">
                <li class="breadcrumb-item"><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div>
</section>

<!-- FAQs Section -->
<section class="faqs-section py-5">
    <div class="container">
        <h2 class="text-center mb-4 float-in-bottom">Frequently Asked Questions</h2>
        <div class="accordion" id="faqsAccordion">
            <!-- FAQ 1 -->
            <div class="card float-in-bottom">
                <div class="card-header" id="faq1Heading">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
                            What services do you offer?
                        </button>
                    </h2>
                </div>
                <div id="faq1" class="collapse show" aria-labelledby="faq1Heading" data-parent="#faqsAccordion">
                    <div class="card-body">
                        We offer a variety of shoe care services including cleaning, repainting, and insole replacement.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="card float-in-bottom">
                <div class="card-header" id="faq2Heading">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            How can I order a pickup service?
                        </button>
                    </h2>
                </div>
                <div id="faq2" class="collapse" aria-labelledby="faq2Heading" data-parent="#faqsAccordion">
                    <div class="card-body">
                        You can order a pickup service through our website or by calling our customer service number.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="card float-in-bottom">
                <div class="card-header" id="faq3Heading">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            What are your service charges?
                        </button>
                    </h2>
                </div>
                <div id="faq3" class="collapse" aria-labelledby="faq3Heading" data-parent="#faqsAccordion">
                    <div class="card-body">
                        Our service charges vary based on the type of service and shoe condition. Please refer to our pricing page for details.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regular Questions Section -->
<section class="regular-questions-section py-5">
    <div class="container">
        <h2 class="text-center mb-4 float-in-bottom">Regular Questions</h2>
        <ul class="list-group">
            <li class="list-group-item float-in-bottom">
                <h5>What are your operating hours?</h5>
                <p>We are open from Monday to Saturday, 9 AM to 6 PM.</p>
            </li>
            <li class="list-group-item float-in-bottom">
                <h5>How long does the cleaning process take?</h5>
                <p>The cleaning process typically takes 2-3 days depending on the condition of the shoes.</p>
            </li>
            <li class="list-group-item float-in-bottom">
                <h5>Do you offer home delivery?</h5>
                <p>Yes, we offer home delivery services for no additional charge AKA Free.</p>
            </li>
        </ul>
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
