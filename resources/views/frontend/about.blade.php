@extends('frontend.layout.main')
@section('content')
   <!-- Banner Section -->
   <section class="page-banner">
    <h1>About Us</h1>
</section>
<!-- End Banner -->
<!-- Why Choose Section -->
<section class="why-choose sec">
    <div class="why-choose-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                    <h2>Why Choose Us?</h2>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="accordion accordion-flush position-relative z-3" id="accordionChoose">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            One on one interaction
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        data-bs-parent="#accordionChoose">
                        <div class="accordion-body">
                            <p> Best part to join courses like Switchwords is that even in a group we
                                get chance to interact and solve all our queries. Learn remedies for mental health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Live classes with recordings
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                        <div class="accordion-body">
                            <p>Incase, you missed your class just relax. We've your back with
                                recordings available for lifetime. PDF and notes also available in both English and
                                Hindi.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Life-time handholding
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                        <div class="accordion-body">
                            <p>Once the course is competeted we'll help you to become professional
                                with life time guidance and support. Enroll for spirituality courses online now.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Certified World - class courses
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                        <div class="accordion-body">
                            <p>I've over 20+ years of experience in my Spiritual journey. I deliver
                                what I received from the higher energies. Switchwords expertise transformed
                                thousands of
                                souls.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose -->
<!-- Our Expert Trainers Section -->
<section class="expert-trainers sec position-relative">
    <div class="container position-relative z-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sec-header" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Meet Our Expert Trainers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="expert-box" data-aos="fade-up" data-aos-duration="1000">
                    <div class="expert-img">
                        <img src="{{asset('frontend/assets/img/expert.jpg')}}" alt="Expert Trainer">
                    </div>
                    <div class="expert-text">
                        <h4>Layla Santiago</h4>
                        <p>Pilates Instructor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="expert-box" data-aos="fade-up" data-aos-duration="2000">
                    <div class="expert-img">
                        <img src="{{asset('frontend/assets/img/expert.jpg')}}" alt="Expert Trainer">
                    </div>
                    <div class="expert-text">
                        <h4>Layla Santiago</h4>
                        <p>Pilates Instructor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="expert-box" data-aos="fade-up" data-aos-duration="3000">
                    <div class="expert-img">
                        <img src="{{asset('frontend/assets/img/expert.jpg')}}" alt="Expert Trainer">
                    </div>
                    <div class="expert-text">
                        <h4>Layla Santiago</h4>
                        <p>Pilates Instructor</p>
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
                <img src="{{asset('frontend/assets/img/services-img.png')}}" alt="Services">
                    data-aos-duration="1000">
            </div>
            <div class="col-md-6">
                <div class="services-content">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>Discover Seemma Jain</h2>
                        <p>Aenean nunc augue, volutpat id massa sed, facilisis efficitur nisl orci nulla, efficitur
                            id ante at, finibus consequat sapien. Nulla fermen vel purus at mollis sed malesuada
                            laoreet quam.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="500">
                                <div class="ser-icon">
                                    <img src="{{asset('frontend/assets/img/word-of-mouth.png')}}" width="62" alt="Switch Word">
                                </div>
                                <div class="ser-txt">
                                    <h6>Switch Word</h6>
                                    <p>Learn from us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="ser-icon">
                                    <img src="{{asset('frontend/assets/img/love-yourself.png')}}" width="62" alt="Your Self">
                                </div>
                                <div class="ser-txt">
                                    <h6>Your Self</h6>
                                    <p>Learn from us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="2000">
                                <div class="ser-icon">
                                    <img src="{{asset('frontend/assets/img/origin.png')}}" width="62" alt="Transformed">
                                </div>
                                <div class="ser-txt">
                                    <h6>Transformed</h6>
                                    <p>Learn from us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="3000">
                                <div class="ser-icon">
                                    <img src="{{asset('frontend/assets/img/quality-of-life.png')}}" width="62" alt="Transformed">
                                </div>
                                <div class="ser-txt">
                                    <h6>Design your Life</h6>
                                    <p>Learn from us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="ma-btn ma-btn-primary mt-4" data-aos="zoom-in-left"
                        data-aos-duration="3000">Know
                        More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->
<!-- Testionials Section -->
<section class="testimonials sec">
    <div class="testimonial-background-overlay"></div>
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>What Our Client Says</h2>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="owl-carousel owl-theme testimonial-carousel">
                        <div class="item text-center">
                            <div class="testi-txt">
                                <p class="mb-4"><q>Seema Ji exhibits exceptional proficiency in her subject matter
                                        and psychic talents. It has been a pleasure participating in her classes and
                                        sessions. She is dedicated to fostering an inclusive learning environment,
                                        actively seeking and incorporating feedback from every participant. Her
                                        energy is both engaging and enriching. I have personally attended her
                                        Switchwords classes, and I highly commend her commitment and expertise.
                                        Wishing her continued success!</q></p>
                                <div class="tisti-img">
                                    <img src="{{asset('frontend/assets/img/testimonial-img.jpg')}}" alt="Testimonials">
                                </div>
                                <h5>Mamtta Shard</h5>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->
<!-- Blog Section -->
<section class="blog sec">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="sec-header" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Recent News From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-6">
                <div class="blog-box" data-aos="fade-right" data-aos-duration="1000">
                    <a href="javascript:void(0)">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/img/blog-img.jpg')}}" alt="blog img">
                        </div>
                        <div class="blog-text">
                            <p><i class="bi bi-calendar-week me-2"></i> 23 Aug 2024 <i
                                    class="bi bi-layers ms-3 me-2"></i>Vinyasa Yoga
                            </p>
                            <h5>13 Major Yoga Mantras to Memorize</h5>
                        </div>
                    </a>
                </div>
                <div class="blog-box" data-aos="fade-right" data-aos-duration="2000">
                    <a href="javascript:void(0)">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/img/blog-img.jpg')}}" alt="blog img">
                        </div>
                        <div class="blog-text">
                            <p><i class="bi bi-calendar-week me-2"></i> 23 Aug 2024 <i
                                    class="bi bi-layers ms-3 me-2"></i>Vinyasa Yoga
                            </p>
                            <h5>13 Major Yoga Mantras to Memorize</h5>
                        </div>
                    </a>
                </div>
                <div class="blog-box" data-aos="fade-right" data-aos-duration="3000">
                    <a href="javascript:void(0)">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/img/blog-img.jpg')}}" alt="blog img">
                        </div>
                        <div class="blog-text">
                            <p><i class="bi bi-calendar-week me-2"></i> 23 Aug 2024 <i
                                    class="bi bi-layers ms-3 me-2"></i>Vinyasa Yoga
                            </p>
                            <h5>13 Major Yoga Mantras to Memorize</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->
@endsection