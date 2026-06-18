@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">GET IN TOUCH</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Contact Us</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">We would love to hear from you. Reach out to schedule a session, ask a question, or simply say hello.</p>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Contact Info Grid Section -->
    <section class="contact-info py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row g-4 justify-content-center">
                
                <!-- Address Box -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card h-100 bg-white text-center p-4 p-md-5" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                        <div class="contact-icon mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background-color: rgba(106, 75, 140, 0.05); color: var(--primary-color); font-size: 32px;">
                            <i class="bi bi-pin-map"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: var(--ff-jost); color: var(--secondary-color);">Address</h4>
                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 16px;">75/23 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>
                    </div>
                </div>

                <!-- Phone Box -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card h-100 bg-white text-center p-4 p-md-5" data-aos="fade-up" data-aos-duration="2000" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                        <div class="contact-icon mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background-color: rgba(106, 75, 140, 0.05); color: var(--primary-color); font-size: 32px;">
                            <i class="bi bi-telephone-inbound"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: var(--ff-jost); color: var(--secondary-color);">Phone Number</h4>
                        <p class="text-muted mb-2" style="font-family: var(--ff-jost); font-size: 16px;"><a href="tel:+8801010000000" class="text-decoration-none text-muted" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='inherit'">+88 (0) 101 0000 000</a></p>
                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 16px;"><a href="tel:+8801010000000" class="text-decoration-none text-muted" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='inherit'">+88 (0) 101 0000 000</a></p>
                    </div>
                </div>

                <!-- Email Box -->
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card h-100 bg-white text-center p-4 p-md-5" data-aos="fade-up" data-aos-duration="3000" style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                        <div class="contact-icon mb-4 d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background-color: rgba(106, 75, 140, 0.05); color: var(--primary-color); font-size: 32px;">
                            <i class="bi bi-envelope-open"></i>
                        </div>
                        <h4 class="fw-bold mb-3" style="font-family: var(--ff-jost); color: var(--secondary-color);">Email Address</h4>
                        <p class="text-muted mb-2" style="font-family: var(--ff-jost); font-size: 16px;"><a href="mailto:info@yourdomain.com" class="text-decoration-none text-muted" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='inherit'">info@yourdomain.com</a></p>
                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 16px;"><a href="mailto:name@yourdomain.com" class="text-decoration-none text-muted" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='inherit'">name@yourdomain.com</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Info Grid Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section py-5 bg-white">
        <div class="container my-5">
            <div class="row align-items-center g-5">
                <div class="col-md-6 text-center text-md-start">
                    <img src="{{asset('frontend/assets/img/services.png')}}" class="img-fluid rounded-4 shadow-sm w-100" alt="Contact Us" data-aos="fade-right" data-aos-duration="1000" style="object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <div class="contact-form-wrapper p-0 p-md-4">
                        <div class="sec-header mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);">Need Help? Send Us A Message</h2>
                            <p class="text-muted" style="font-family: var(--ff-jost); font-size: 16px;">We are here to help you. Fill out the form below and we will get back to you shortly.</p>
                        </div>
                        <form data-aos="fade-up" data-aos-duration="1500">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating ff-jost">
                                        <input type="text" class="form-control bg-light border-0 shadow-none" id="floatingInputName" placeholder="Full Name" style="border-radius: 10px;">
                                        <label for="floatingInputName" class="text-muted">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating ff-jost">
                                        <input type="tel" class="form-control bg-light border-0 shadow-none" id="floatingInputPhone" placeholder="Phone Number" style="border-radius: 10px;">
                                        <label for="floatingInputPhone" class="text-muted">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating ff-jost">
                                        <input type="email" class="form-control bg-light border-0 shadow-none" id="floatingInputEmail" placeholder="Email Address" style="border-radius: 10px;">
                                        <label for="floatingInputEmail" class="text-muted">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating ff-jost mb-4">
                                        <input type="text" class="form-control bg-light border-0 shadow-none" id="floatingInputCountry" placeholder="Country Name" style="border-radius: 10px;">
                                        <label for="floatingInputCountry" class="text-muted">Country Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn-primary-custom w-100 py-3 border-0 shadow-sm" style="border-radius: 30px; font-family: var(--ff-jost); font-size: 16px; font-weight: 500;">
                                        Send Message <i class="bi bi-send ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->

@endsection