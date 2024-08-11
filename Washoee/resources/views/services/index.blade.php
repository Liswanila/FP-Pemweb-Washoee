@extends('layouts.app')
<link href="{{ asset('css/service.css') }}" rel="stylesheet">
@section('content')
    <section class="hero-section" style="background-image: url('images/service-bg.jpg'); padding: 50px 0; background-size: cover; background-position: center;">
        <div class="container text-center text-white">
            <h1 class="display-4 float-in-bottom">Our Service</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item float-in-bottom"><a href="/" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white float-in-bottom" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="our-service py-5 float-in-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Service</h4>
                    <h2>Ready to make your shoes brand new</h2>
                    <p>Welcome to our comprehensive shoe care service! At Washoee, we specialize in restoring and revitalizing your favorite footwear to its former glory. Whether your shoes need a thorough cleaning, intricate detailing, or a fresh coat of paint, our skilled team is here to provide expert craftsmanship and attention to detail.</p>
                    <a href="{{ route('pages.pricing') }}" class="btn btn-primary service-btn">Order Pickup</a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="service-box text-center p-4 shadow float-in-bottom">
                                <div class="service-icon">
                                    <img src="images/delivery-truck.png" alt="Free Pickup Icon">
                                </div>
                                <h4>Free Pickup</h4>
                                <p>We offer convenient free pickup services right from your doorstep, ensuring your shoes receive the care they deserve without any hassle.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="service-box text-center p-4 shadow float-in-bottom">
                                <div class="service-icon">
                                    <img src="images/diamond.png" alt="Detailed Clean Icon">
                                </div>
                                <h4>Detailed Clean</h4>
                                <p>Experience the best in shoe cleaning with our detailed cleaning service, removing every speck of dirt and restoring your shoes to their original glory.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="service-box text-center p-4 shadow float-in-bottom">
                                <div class="service-icon">
                                    <img src="images/paintbrush.png" alt="Shoe Repaint Icon">
                                </div>
                                <h4>Shoe Repaint</h4>
                                <p>Give your shoes a fresh new look with our professional repainting service, bringing back their vibrant colors and extending their life.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="service-box text-center p-4 shadow float-in-bottom">
                                <div class="service-icon">
                                    <img src="images/layers.png" alt="Insole Service Icon">
                                </div>
                                <h4>Insole Service</h4>
                                <p>Enhance the comfort of your shoes with our specialized insole service, providing custom-fit insoles for maximum support and comfort.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Step by Step Section -->
    <section class="step-by-step py-5 text-center float-in-bottom">
        <div class="container">
            <h2>Step by Step</h2>
            <h3 class="mb-5">How our service work</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="step-item p-4 float-in-bottom">
                        <h4>01</h4>
                        <h5>Contact us for pickups</h5>
                        <p>Schedule a convenient pickup time through our website or give us a call. Our team will come to your location to collect your shoes.</p>
                        <a href="{{ route('services') }}" class="btn btn-link">Services</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-item p-4 float-in-bottom">
                        <h4>02</h4>
                        <h5>Your shoes are picked up</h5>
                        <p>Our friendly staff will carefully pick up your shoes from your doorstep, ensuring they are safely transported to our facility for cleaning.</p>
                        <a href="{{ route('tracking') }}" class="btn btn-link">Track</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-item p-4 float-in-bottom">
                        <h4>03</h4>
                        <h5>Start the cleaning process</h5>
                        <p>Our experts will begin the thorough cleaning process, using premium products and techniques to restore your shoes to their best condition.</p>
                        <a href="{{ route('tracking') }}" class="btn btn-link">Tracking</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-item p-4 float-in-bottom">
                        <h4>04</h4>
                        <h5>Ready to be delivered to you</h5>
                        <p>Once your shoes are perfectly clean and dry, we'll arrange a prompt delivery back to your doorstep. Enjoy your cleaned shoes!</p>
                        <a href="{{ route('contact') }}" class="btn btn-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Service Section -->
    <section class="detailed-service py-5 float-in-bottom">
        <div class="container text-center">
            <h2>Detailed and professional cleaning</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-detail-box p-4 float-in-bottom">
                        <img src="images/fabric.jpg" class="img-fluid mb-3" alt="Fabric Shoes">
                        <h4>Fabric Shoes</h4>
                        <p>Elevate your fabric shoes with our meticulous cleaning regimen. Begin by removing shoelaces and inserts for thorough access. Gently brush away surface dirt, then treat stubborn stains with a mild detergent solution. For deeper cleaning, immerse in a diluted detergent mix and scrub gently. Rinse thoroughly and air-dry away from direct heat sources to preserve fabric integrity, ensuring your shoes stay fresh and vibrant.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-detail-box p-4 float-in-bottom">
                        <img src="images/sport.jpg" class="img-fluid mb-3" alt="Sport Shoes">
                        <h4>Sport Shoes</h4>
                        <p>Keep your sport shoes in prime condition with our expert cleaning method. Start by clearing away dirt and mud with a firm brush. Utilize a specialized sports shoe cleaner or mild detergent to gently scrub away stains. Rinse comprehensively to remove all traces of cleaner, then air-dry indoors at room temperature. This process ensures your sport shoes maintain their peak performance and appearance, ready for your next challenge.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-detail-box p-4 float-in-bottom">
                        <img src="images/sneaker.jpg" class="img-fluid mb-3" alt="Sneaker Shoes">
                        <h4>Sneaker Shoes</h4>
                        <p>Discover the art of sneaker maintenance with our comprehensive cleaning approach. Begin by brushing off loose dirt, then target stains with a gentle cleaner or diluted detergent solution. Thoroughly scrub the shoes to restore their original freshness, ensuring uniform cleanliness throughout. After rinsing, air-dry naturally and use paper towels to preserve their shape. Our method guarantees your sneakers remain stylish and pristine, ready for any occasion.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="service-detail-box p-4 float-in-bottom">
                        <img src="images/leather.jpg" class="img-fluid mb-3" alt="Leather Shoes">
                        <h4>Leather Shoes</h4>
                        <p>Unveil the beauty of leather shoes with our premium cleaning service. Start by delicately wiping off dust and debris, then nourish the leather with a quality conditioner to maintain suppleness. Restore shine and cover scuffs with a matching shoe polish, buffing to perfection. Complete the process with a protective waterproofing treatment to shield against the elements. Our meticulous care ensures your leather shoes exude timeless elegance and durability, making every step a statement of sophistication.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section py-5 bg-light float-in-bottom">
        <div class="container text-center">
            <h2>Years of Experience</h2>
            <p>With years of experience in the shoe care industry, we bring expertise and dedication to every pair of shoes we handle, ensuring exceptional quality and service every time.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="experience-box p-4 float-in-bottom">
                        <h3>3+</h3>
                        <p style="color: #164863 float-in-bottom">Years of Experience</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="experience-box p-4 float-in-bottom">
                        <h3>800+</h3>
                        <p style="color: #164863 float-in-bottom">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="experience-box p-4 float-in-bottom">
                        <h3>1000+</h3>
                        <p style="color: #164863 float-in-bottom">Shoes Repaired</p>
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
