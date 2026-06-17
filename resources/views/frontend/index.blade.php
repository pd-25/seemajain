@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="banner d-flex align-items-center">
        <div class="banner-overlay"></div>
        <div class="container position-relative z-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <div class="banner-eyebrow" data-aos="fade-down" data-aos-duration="1000">TRANSFORM YOUR LIFE ✦</div>
                        <h1 data-aos="fade-down" data-aos-duration="2000">Welcome to Your Journey <br> of Transformation</h1>
                        <p data-aos="fade-right" data-aos-duration="2000" class="mb-4">"Discover clarity, balance, and
                            purpose with Seemma Jain, a globally acclaimed healer blending ancient wisdom and modern
                            practices. Transform your life through personalized sessions and workshops. Start your journey
                            toward empowerment today!"</p>
                        <p data-aos="fade-right" data-aos-duration="2500" class="fw-bold mb-2">Are you ready to take the
                            first step toward a more empowered you?</p>
                        <p data-aos="fade-right" data-aos-duration="2500" class="fw-bold mb-4">Start Your Healing Journey Today.</p>
                        
                        <div class="d-flex flex-wrap gap-3 align-items-center" data-aos="fade-up" data-aos-duration="3000">
                            <a href="#popularcourses" class="btn-primary-custom">Browse Courses &rarr;</a>
                            <a href="javascript:void(0)" class="btn-outline-custom"><i class="bi bi-play-circle-fill me-2"></i> Watch Free Session</a>
                        </div>
                        
                        <div class="banner-rating mt-5" data-aos="fade-up" data-aos-duration="3000">
                            <div class="stars mb-1">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-0 text-muted" style="font-family: var(--ff-jost); font-size: 14px;">Trusted by 10,000+ Students Worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="banner-image-wrapper position-relative">
                        <div class="banner-glow-circle"></div>
                        <img src="{{ asset('frontend/assets/img/banner/banner-img.webp') }}" class="img-fluid position-relative z-2 main-portrait" alt="Seemma Jain" data-aos="zoom-in" data-aos-duration="2000" style="border-radius: 20px;">
                        
                        <!-- Floating Cards -->
                        <div class="floating-card fc-1" data-aos="fade-down" data-aos-duration="2500">
                            <div class="fc-icon"><i class="bi bi-heart"></i></div>
                            <div class="fc-text"><strong>25+</strong><br>Years Experience</div>
                        </div>
                        <div class="floating-card fc-2" data-aos="fade-left" data-aos-duration="2500">
                            <div class="fc-icon"><i class="bi bi-globe"></i></div>
                            <div class="fc-text"><strong>Global</strong><br>Clients Worldwide</div>
                        </div>
                        <div class="floating-card fc-3" data-aos="fade-right" data-aos-duration="2500">
                            <div class="fc-icon"><i class="bi bi-award"></i></div>
                            <div class="fc-text"><strong>Certified</strong><br>Spiritual Mentor</div>
                        </div>
                        <div class="floating-card fc-4" data-aos="fade-up" data-aos-duration="2500">
                            <div class="fc-icon"><i class="bi bi-book"></i></div>
                            <div class="fc-text"><strong>100+</strong><br>Workshops Conducted</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="banner-stats py-4 bg-white position-relative z-3" style="border-radius: 20px; margin-top: -50px; margin-bottom: 50px; max-width: 1140px; margin-left: auto; margin-right: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.05) !important;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3 mb-md-0 stat-item border-end">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                        <i class="bi bi-people text-primary fs-2 mb-2 mb-md-0 me-md-3" style="color: #6a4b8c !important;"></i>
                        <div class="text-center text-md-start">
                            <h4 class="mb-0 fw-bold" style="color: var(--primary-color); font-family: var(--ff-jost);">5000+</h4>
                            <p class="mb-0 text-muted" style="font-size: 13px; font-family: var(--ff-jost); line-height: 1.2;">Students<br>Empowered</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0 stat-item border-end">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                        <i class="bi bi-book text-primary fs-2 mb-2 mb-md-0 me-md-3" style="color: #6a4b8c !important;"></i>
                        <div class="text-center text-md-start">
                            <h4 class="mb-0 fw-bold" style="color: var(--primary-color); font-family: var(--ff-jost);">100+</h4>
                            <p class="mb-0 text-muted" style="font-size: 13px; font-family: var(--ff-jost); line-height: 1.2;">Workshops<br>Conducted</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 stat-item border-end">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                        <i class="bi bi-award text-primary fs-2 mb-2 mb-md-0 me-md-3" style="color: #6a4b8c !important;"></i>
                        <div class="text-center text-md-start">
                            <h4 class="mb-0 fw-bold" style="color: var(--primary-color); font-family: var(--ff-jost);">25+</h4>
                            <p class="mb-0 text-muted" style="font-size: 13px; font-family: var(--ff-jost); line-height: 1.2;">Years of<br>Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 stat-item">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                        <i class="bi bi-globe text-primary fs-2 mb-2 mb-md-0 me-md-3" style="color: #6a4b8c !important;"></i>
                        <div class="text-center text-md-start">
                            <h4 class="mb-0 fw-bold" style="color: var(--primary-color); font-family: var(--ff-jost);">35+</h4>
                            <p class="mb-0 text-muted" style="font-size: 13px; font-family: var(--ff-jost); line-height: 1.2;">Countries<br>Reached</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Me Custom Section -->
    <section class="why-choose-me-custom py-5">
        <div class="container">
            <div class="text-center mb-5">
                <div class="banner-eyebrow text-center mb-2 mx-auto" data-aos="fade-up" data-aos-duration="1000">WHY CHOOSE ME</div>
                <h2 data-aos="fade-up" data-aos-duration="1500" style="color: var(--primary-color); font-family: var(--ff-garamond); font-size: 42px; font-weight: 600;">Why Thousands Trust Seemma Jain</h2>
                <p data-aos="fade-up" data-aos-duration="2000" class="text-muted mx-auto" style="max-width: 600px; font-size: 16px;">Helping people reconnect with themselves through ancient wisdom and modern transformational techniques.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="wcm-card" data-aos="fade-up" data-aos-duration="1000">
                        <div class="wcm-icon"><i class="bi bi-flower1"></i></div>
                        <h4>Healing Sessions</h4>
                        <p>Personalized energy healing to release emotional blocks.</p>
                        <a href="javascript:void(0)" class="wcm-link">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wcm-card" data-aos="fade-up" data-aos-duration="1500">
                        <div class="wcm-icon"><i class="bi bi-journal-text"></i></div>
                        <h4>Akashic Records</h4>
                        <p>Discover your soul purpose and gain clarity on life's hidden patterns.</p>
                        <a href="javascript:void(0)" class="wcm-link">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wcm-card" data-aos="fade-up" data-aos-duration="2000">
                        <div class="wcm-icon"><i class="bi bi-tree"></i></div>
                        <h4>Spiritual Coaching</h4>
                        <p>Build confidence, clarity and inner peace with one-on-one guidance.</p>
                        <a href="javascript:void(0)" class="wcm-link">Learn More &rarr;</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wcm-card" data-aos="fade-up" data-aos-duration="2500">
                        <div class="wcm-icon"><i class="bi bi-stars"></i></div>
                        <h4>Transformational Courses</h4>
                        <p>Self-paced courses designed for deep healing and lifelong growth.</p>
                        <a href="javascript:void(0)" class="wcm-link">Learn More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- Services Section -->
    <section class="services position-relative py-5">
        <div class="services-bg-overlay"></div>
        <div class="container position-relative z-3">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="services-image-wrapper position-relative" data-aos="fade-right" data-aos-duration="1000">
                        <div class="services-glow"></div>
                        <img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid services-img shadow-lg" alt="Services">
                        <div class="services-floating-badge" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
                            <i class="bi bi-star-fill text-warning mb-2 d-block fs-4"></i>
                            <span class="fw-bold d-block text-dark" style="font-size: 18px;">16+ Years</span>
                            <span class="text-muted small">Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="services-content">
                        <div class="sec-header mb-5" data-aos="fade-up" data-aos-duration="500">
                            <div class="banner-eyebrow mb-2">MY APPROACH</div>
                            <h2 class="display-5 fw-bold" style="font-family: var(--ff-garamond); color: var(--primary-color);">Empowering Lives, One Soul at a Time</h2>
                            <p class="text-muted fs-6 lh-lg mt-3" style="font-family: var(--ff-jost);"><b>Seemma Jain</b> is a globally renowned spiritual healer and life coach, specializing in Reiki, Tarot, EFT, Past Life Regression, and mental wellness. With 16+ years of experience, she has transformed lives worldwide through personalized sessions and workshops.</p>
                        </div>
                        <div class="row g-4 mt-2">
                            <div class="col-sm-6">
                                <div class="service-feature-card h-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                                    <div class="sfc-icon-wrapper mb-3">
                                        <img src="{{ asset('frontend/assets/img/word-of-mouth.png') }}" width="30" alt="Discover Your Potential">
                                    </div>
                                    <div class="sfc-content">
                                        <h6 class="fw-bold mb-2">Discover Your Potential</h6>
                                        <p class="text-muted small mb-0 lh-sm">Seemma Jain empowers individuals to break free from limitations. With expertise in life coaching, Reiki, and mental wellness practices, she guides clients to uncover their strengths and embrace transformative growth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-feature-card h-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                                    <div class="sfc-icon-wrapper mb-3">
                                        <img src="{{ asset('frontend/assets/img/love-yourself.png') }}" width="30" alt="Your Self, Reimagined">
                                    </div>
                                    <div class="sfc-content">
                                        <h6 class="fw-bold mb-2">Your Self, Reimagined</h6>
                                        <p class="text-muted small mb-0 lh-sm">As a dedicated healer, Seemma addresses challenges like stress, anxiety, and emotional blocks. Through her personalized sessions, she helps clients rediscover clarity, balance, and purpose in life.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-feature-card h-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                                    <div class="sfc-icon-wrapper mb-3">
                                        <img src="{{ asset('frontend/assets/img/origin.png') }}" width="30" alt="Transformed Lives, Global Reach">
                                    </div>
                                    <div class="sfc-content">
                                        <h6 class="fw-bold mb-2">Transformed Lives, Global Reach</h6>
                                        <p class="text-muted small mb-0 lh-sm">With a global presence spanning the USA, UK, Canada, and beyond, Seemma’s workshops and sessions have transformed countless lives. Her methods combine ancient wisdom with contemporary healing techniques.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-feature-card h-100" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                                    <div class="sfc-icon-wrapper mb-3">
                                        <img src="{{ asset('frontend/assets/img/quality-of-life.png') }}" width="30" alt="Design Your Life">
                                    </div>
                                    <div class="sfc-content">
                                        <h6 class="fw-bold mb-2">Design Your Life</h6>
                                        <p class="text-muted small mb-0 lh-sm">Through techniques like Past Life Regression, EFT, and Angel Healing, Seemma inspires clients to take control of their journey. Her approach is designed to unlock potential and lead to lasting transformation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <!-- Popular Classes Section -->
    <section class="popular-classes py-5 bg-light">
        <div class="container" id="popularcourses">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <div class="banner-eyebrow mb-2">LEARN & GROW</div>
                        <h2 class="display-5 fw-bold" style="font-family: var(--ff-garamond); color: var(--primary-color);">Popular Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slick-slider" id="popClsCarousel">
                        @foreach ($courses as $course)
                            <div class="item px-3 py-2">
                                <div class="course-card h-100 position-relative">
                                    <div class="course-img-wrapper overflow-hidden">
                                        <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid w-100 course-img" alt="{{ $course->title }}">
                                        <div class="course-overlay d-flex align-items-center justify-content-center">
                                            <a href="{{ route('courseDetail', $course->slug) }}" class="btn-primary-custom btn-sm rounded-pill px-4 py-2" style="font-size: 14px;">View Course</a>
                                        </div>
                                    </div>
                                    <div class="course-content p-4 text-center">
                                        <div class="course-icon-badge mb-3">
                                            <i class="bi bi-mortarboard text-primary fs-4"></i>
                                        </div>
                                        <h5 class="fw-bold mb-3" style="font-family: var(--ff-jost); font-size: 20px;">{{ $course->title }}</h5>
                                        <a href="{{ route('courseDetail', $course->slug) }}" class="course-link fw-medium">Read More &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Classes -->
    <!-- Free Tutorial Section -->
    <section class="free-tutorial sec">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>Watch Our Free Tutorial Video</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slick-slider" id="videoTutorialCarousel">
                        <div class="item">
                            <div class="video-tutorial position-relative" data-aos="fade-down" data-aos-duration="500">
                                <img src="{{ asset('frontend/assets/img/free-tutorial.jpg') }}" class="img-fluid"
                                    alt="Free Tutorial">
                                <i class="bi bi-play-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Free Tutorial -->
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
    <!-- Why Choose Section -->
    <section class="why-choose sec">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion accordion-flush position-relative z-3" id="accordionChoose">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Personalized Guidance
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">One-on-one sessions tailored to your unique journey of transformation and
                                    self-discovery.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Holistic Expertise
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Mastery in Tarot, Reiki, Angel Healing, Zibu Symbols, EFT, Mental
                                    Wellness, and PLR for
                                    comprehensive healing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Transformative Workshops
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Engaging group courses fostering growth, healing, and collective
                                    learning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Proven Success
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">16+ years of experience with global clients and glowing testimonials.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Direct Communication
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Personal, approachable guidance with no third-party involvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Safe & Confidential
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">A non-judgmental space ensuring privacy and trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Award-Winning
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Honored with prestigious accolades like the “Gyan Kalash Award.”</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Global Reach
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Trusted by clients worldwide, including the USA, UK, Canada, and Dubai.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Effective Techniques
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Practical methods to overcome stress, anxiety, phobias, and emotional
                                    blocks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Lasting Impact
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionChoose">
                            <div class="accordion-body">
                                <p class="mb-0">Empowering individuals to unlock potential, heal deeply, and
                                    live balanced lives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose -->
    <!-- Blog Section -->
    <section class="blog sec">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-8">
                    @foreach ($blogs as $blog)
                        <div class="blog-box" data-aos="fade-right" data-aos-duration="1000">
                            <a href="{{ route('blogDetails', $blog->slug) }}">
                                <div class="blog-img">
                                    <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="blog-text">
                                    <!-- <p><i class="bi bi-calendar-week me-2"></i>
                                        {{ $blog->created_at->isoFormat('Do MMMM YYYY') }} <i
                                            class="bi bi-layers ms-3 me-2"></i>Vinyasa Yoga
                                    </p> -->
                                    <h5>{{ $blog->title }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @if ($offers->isNotEmpty())
        <div class="container text-center mt-5">
            <!-- The modal will automatically open after 3 seconds -->
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            @foreach ($offers as $offer)
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="discountModalLabel">{{ $offer->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <h6 style="color: black" class="mb-3">{{ $offer->description }}</h6>


                        <ul class="course-list ">
                            @if ($offer->courses->isNotEmpty())
                                @foreach ($offer->courses as $course)
                                    <li style="display: flex; justify-content: space-between; align-items: center;">
                                        <span>{{ $course->title }}</span>
                                        <a class="ma-btn-primary get-course"
                                            href="{{ route('courseDetail', $course->slug) }}">Get Course</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>


                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="{{ route('contact') }}" class="ma-btn-primary register-btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Bootstrap JS -->
    @if ($offers->isNotEmpty())
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Automatically open the modal after 3 seconds
            window.onload = function() {
                setTimeout(function() {
                    const modal = new bootstrap.Modal(document.getElementById('discountModal'));
                    modal.show();
                }, 3000); // 3 seconds delay
            };
        </script>
    @endif
    <!-- End Blog -->
    <style>
        .modal-content {
            background-color: #fff;
            /* Matches blue background */
            color: white;
            border-radius: 10px;
        }

        .modal-header {
            background-color: #543269;
            /* Matches red strip */
        }

        .modal-title {
            font-weight: bold;
        }

        .course-list {
            list-style: none;
            padding: 0;
        }

        .course-list li {
            margin: 5px 0;
            background-color: #fedb6f;
            /* Matches yellow background for text */
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .register-btn {
            background-color: #543269;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            text-decoration: unset;
        }

        .get-course {
            color: white;
            border: navajowhite;
            border-radius: 3px;
            padding: 7px;
            font-size: 14px;
            text-decoration: unset;
            background-color: #543269;
        }

        .btn-close {
            background-color: white;
            /* Add white background */
            opacity: 1;
            /* Ensure full visibility */
        }

        .btn-close:focus,
        .btn-close:hover {
            background-color: #cccccc;
            /* Optional: Change on hover */
        }
    </style>
@endsection
