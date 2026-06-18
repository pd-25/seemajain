@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">KNOW MORE</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);"
                data-aos="fade-up" data-aos-duration="1500">About Us</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up"
                data-aos-duration="2000">Discover the journey, the vision, and the passion that drives us to help you heal
                and transform.</p>
        </div>
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
            <div class="col-md-8 col-lg-7">
                <div class="card border-0 p-3 p-md-4" data-aos="fade-up" data-aos-duration="500"
                    style="border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.05); background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <div class="card-body text-muted lh-lg" style="font-family: var(--ff-jost); font-size: 16px;">
                        <p> Seemma Jain is a global expert in spiritual healing and mental wellness, known for blending
                            ancient wisdom with modern techniques to create powerful transformative experiences. Her
                            credentials include being a Life Coach, Reiki Grand Master, EFT Master Practitioner, Past Life
                            Regression Therapist, NLP Practitioner, Angel Healer, and more. With over 16 years of
                            experience, Seemma has helped individuals from across the globe, including the USA, UK, Canada,
                            Dubai, and India, overcome life’s challenges and achieve emotional balance and clarity.
                        </p>
                        <p>Her work has earned her accolades such as the Gyan Kalash Award in 2021 and 2022 for "Best Past
                            Life Regression Therapist." Seemma has also been featured on Red FM Nagpur's "Ye Taare Woh
                            Taare" and presented on NLP at The Taj Gateway, Pushkar in 2018. These achievements reflect her
                            dedication to empowering others and her excellence in the field of holistic healing.
                        </p>
                        <p>Join her vibrant online community of over 81K followers on Instagram (@jainseemma) or explore her
                            YouTube channel for inspiring content designed to guide you toward clarity, purpose, and
                            happiness. Whether through personalized sessions or engaging workshops, Seemma’s approach is
                            always rooted in compassion and a deep commitment to transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose -->
    <!-- Our Expert Trainers Section -->
    {{-- <section class="expert-trainers sec position-relative">
        <div class="container position-relative z-3">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Meet Our Expert Trainers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($members as $member)
                <div class="col-md-4">
                    <div class="expert-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="expert-img">
                            <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                        </div>
                        <div class="expert-text">
                            <h4>{{ $member->name }}</h4>
                            <p>{{ $member->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="exp-shape">
            <img src="{{ asset('frontend/assets/img/shape/expert-shape.png') }}" alt="shape">
        </div>
    </section> --}}
    <!-- End Our Expert Trainers -->
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0 text-center">
                    <img src="{{ asset('frontend/assets/img/services.png') }}" alt="Services"
                        class="img-fluid rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="1000"
                        style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-6">
                    <div class="services-content">
                        <div class="sec-header mb-5" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);">
                                Discover Seemma Jain</h2>
                            <p class="text-muted" style="font-family: var(--ff-jost); font-size: 16px;">Aenean nunc augue,
                                volutpat id massa sed, facilisis efficitur nisl orci nulla, efficitur
                                id ante at, finibus consequat sapien. Nulla fermen vel purus at mollis sed malesuada
                                laoreet quam.</p>
                        </div>
                        <div class="row g-4 mt-2">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center bg-white p-3 rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="500" style="border: 1px solid rgba(0,0,0,0.02);">
                                    <div class="ser-icon flex-shrink-0 me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                        <img src="{{ asset('frontend/assets/img/word-of-mouth.png') }}" width="35" alt="Switch Word">
                                    </div>
                                    <div class="ser-txt">
                                        <h5 class="fw-bold mb-1" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 18px;">Switch Word</h5>
                                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 14px;">Learn from us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center bg-white p-3 rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="1000" style="border: 1px solid rgba(0,0,0,0.02);">
                                    <div class="ser-icon flex-shrink-0 me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                        <img src="{{ asset('frontend/assets/img/love-yourself.png') }}" width="35" alt="Your Self">
                                    </div>
                                    <div class="ser-txt">
                                        <h5 class="fw-bold mb-1" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 18px;">Your Self</h5>
                                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 14px;">Learn from us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center bg-white p-3 rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="2000" style="border: 1px solid rgba(0,0,0,0.02);">
                                    <div class="ser-icon flex-shrink-0 me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                        <img src="{{ asset('frontend/assets/img/origin.png') }}" width="35" alt="Transformed">
                                    </div>
                                    <div class="ser-txt">
                                        <h5 class="fw-bold mb-1" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 18px;">Transformed</h5>
                                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 14px;">Learn from us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center bg-white p-3 rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="3000" style="border: 1px solid rgba(0,0,0,0.02);">
                                    <div class="ser-icon flex-shrink-0 me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                        <img src="{{ asset('frontend/assets/img/quality-of-life.png') }}" width="35" alt="Design your Life">
                                    </div>
                                    <div class="ser-txt">
                                        <h5 class="fw-bold mb-1" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 18px;">Design your Life</h5>
                                        <p class="text-muted mb-0" style="font-family: var(--ff-jost); font-size: 14px;">Learn from us</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="javascript:void(0)" class="ma-btn ma-btn-primary mt-4" data-aos="zoom-in-left"
                                data-aos-duration="3000">Know
                                More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <!-- Testionials Section -->
    <section class="testimonials sec">
        <div class="testimonial-background-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>What Our Client Says</h2>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="slick-slider" id="testimonialCarousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="item text-center">
                                <div class="testi-txt">
                                    <p class="mb-4"><q>{{ $testimonial->description }}</q></p>
                                    <div class="tisti-img">
                                        <img src="{{ asset('storage/' . $testimonial->image_path) }}"
                                            alt="{{ $testimonial->name }}">
                                    </div>
                                    <h5>{{ $testimonial->name }}</h5>
                                    <p>{{ $testimonial->location }}</p>
                                </div>
                            </div>
                        @endforeach
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
                    @foreach ($blogs as $blog)
                        <div class="blog-box" data-aos="fade-right" data-aos-duration="1000">
                            <a href="{{ route('blogDetails', $blog->slug) }}">
                                <div class="blog-img">
                                    <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="blog-text">
                                    <p><i class="bi bi-calendar-week me-2"></i>
                                        {{ $blog->created_at->isoFormat('Do MMMM YYYY') }} <i
                                            class="bi bi-layers ms-3 me-2"></i>Vinyasa Yoga
                                    </p>
                                    <h5>{{ $blog->title }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->
@endsection