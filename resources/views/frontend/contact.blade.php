@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <h1>Contact Us</h1>
    </section>
    <!-- End Banner -->
    <!-- Contact Section -->
    <section class="contact sec position-relative">
        <div class="container position-relative z-3">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="contact-icon">
                            <i class="bi bi-pin-map"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Address</h4>
                            <p>75/23 Folsom Ave, Suite 600 San Francisco, CA 94107 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box" data-aos="fade-up" data-aos-duration="2000">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-inbound"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Phone Number</h4>
                            <p><a href="tel:+88 (0) 101 0000 000">+88 (0) 101 0000 000</a></p>
                            <p><a href="tel:+88 (0) 101 0000 000">+88 (0) 101 0000 000</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box" data-aos="fade-up" data-aos-duration="3000">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-open"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
                            <p><a href="mailto:name@yourdomain.com">name@yourdomain.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="exp-shape">
            <img src="{{asset('frontend/assets/img/shape/expert-shape.png')}}" alt="shape">
        </div>
    </section>
    <!-- End Our Expert Trainers -->
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{asset('frontend/assets/img/services.png')}}" class="img-fluid" alt="Services" data-aos="fade-right"
                        data-aos-duration="1000">
                </div>
                <div class="col-md-6">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Need Help? Send Us A Message</h2>
                    </div>
                    <div class="form-floating mb-3 ff-jost">
                        <input type="text" class="form-control" id="floatingInputName" placeholder="Full Name">
                        <label for="floatingInputName">Full Name</label>
                    </div>
                    <div class="form-floating mb-3 ff-jost">
                        <input type="tel" class="form-control" id="floatingInputPhone" placeholder="Phone Number">
                        <label for="floatingInputPhone">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3 ff-jost">
                        <input type="mail" class="form-control" id="floatingInputEmail" placeholder="Email Address">
                        <label for="floatingInputEmail">Email Address</label>
                    </div>
                    <div class="form-floating mb-3 ff-jost">
                        <input type="text" class="form-control" id="floatingInputCountry" placeholder="Country Name">
                        <label for="floatingInputCountry">Country Name</label>
                    </div>
                    <a href="javascript:void(0)" class="ma-btn ma-btn-primary mt-3" data-aos="fade-up"
                        data-aos-duration="1000">Send Message</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

@endsection