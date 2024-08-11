@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/tracking.css') }}">
<div class="container float-in-bottom">
    <div class="tracking-container">
        <h1 class="tracking-title float-in-bottom">Track Your Order</h1>
        <form action="{{ route('tracking.search') }}" method="POST" class="tracking-form">
            @csrf
            <div class="form-group">
                <label for="trackingNumber" class="tracking-label float-in-bottom">Enter Tracking Number:</label>
                <input type="text" class="form-control tracking-input " id="trackingNumber" name="trackingNumber" required>
            </div>

            <button type="submit" class="btn btn-primary tracking-btn">Track</button>
        </form>

        @if(session('trackingNumber'))
        <div class="alert alert-success mt-4 tracking-alert">
            <strong>Your tracking number is: {{ session('trackingNumber') }}</strong>
        </div>
        @endif

        @if(isset($trackingInfo))
        <div class="mt-4 tracking-info">
            <h3 class="tracking-info-title">Tracking Information</h3>
            <p>{!! $trackingInfo !!}</p>
        </div>
        @endif

        @if(isset($error))
        <div class="alert alert-danger mt-4 tracking-error">
            <strong>{{ $error }}</strong>
        </div>
        @endif
    </div>
</div>
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
