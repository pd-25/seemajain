@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="banner">
        <div class="banner-overlay"></div>
        <div class="container h-100 position-relative z-3">
            <div class="row h-100 align-items-center">
                <div class="col-lg-5">
                    <div class="banner-content">
                        <h1 data-aos="fade-down" data-aos-duration="3000">Welcome to Your Journey of Transformation</h1>
                        <p data-aos="fade-right" data-aos-duration="3000" class="mb-0">"Discover clarity, balance, and
                            purpose with Seemma Jain, a globally acclaimed healer blending ancient wisdom and modern
                            practices. Transform your life through personalized sessions and workshops. Start your journey
                            toward empowerment today!"</p>
                        <p data-aos="fade-right" data-aos-duration="3000" class="fw-bold mb-0">Are you ready to take the
                            first
                            step toward a more empowered you?</p>
                        <p data-aos="fade-right" data-aos-duration="3000" class="fw-bold">Start Your Healing Journey Today.
                        </p>
                        <a href="javascript:void(0)" class="ma-btn ma-btn-primary me-4" data-aos="fade-down-right"
                            data-aos-duration="3000">Browse Courses</a>
                        <a href="javascript:void(0)" class="ma-btn ma-btn-secondary" data-aos="fade-down-left"
                            data-aos-duration="3000">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid services-img" alt="Services"
                        data-aos="fade-right" data-aos-duration="1000">
                </div>
                <div class="col-lg-6">
                    <div class="services-content">
                        <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                            <h2>Empowering Lives, One Soul at a Time</h2>
                            <p><b>Seemma Jain</b> is a globally renowned spiritual healer and life coach, specializing in Reiki,
                                Tarot, EFT, Past Life Regression, and mental wellness. With 16+ years of experience, she has
                                transformed lives worldwide through personalized sessions and workshops.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="500">
                                    <div class="ser-icon">
                                        <img src="{{ asset('frontend/assets/img/word-of-mouth.png') }}" width="62"
                                            alt="Switch Word">
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
                                        <img src="assets/img/love-yourself.png" width="62" alt="Your Self">
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
                                        <img src="{{ asset('frontend/assets/img/origin.png') }}" width="62"
                                            alt="Transformed">
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
                                        <img src="{{ asset('frontend/assets/img/quality-of-life.png') }}" width="62"
                                            alt="Transformed">
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
    <!-- Popular Classes Section -->
    <section class="popular-classes sec">
        <div class="pop-cls-shape left">
            <img src="{{ asset('frontend/assets/img/shape/pop-cls-shape.png') }}" width="250" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="sec-header" data-aos="fade-up" data-aos-duration="500">
                        <h2>Popular Course​s</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme pop-cls-carousel">
                        @foreach ($courses as $course)
                            <div class="item">
                                <div class="pop-cls-img">
                                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}">
                                </div>
                                <div class="pop-cls-icon">
                                    <i class="bi bi-brightness-high"></i>
                                </div>
                                <div class="pop-cls-txt">
                                    <h5>{{ $course->title }}</h5>
                                    <a href="{{ route('courseDetail', $course->slug) }}"
                                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Read
                                        More</a>
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
                    <div class="video-tutorial position-relative" data-aos="fade-down" data-aos-duration="500">
                        <img src="{{ asset('frontend/assets/img/free-tutorial.jpg') }}" class="img-fluid"
                            alt="Free Tutorial">
                        <i class="bi bi-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Free Tutorial -->
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
        </div>
    </section>
    <!-- End Testimonials -->
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
    </section>
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
            <div class="col-lg-5">
                <div class="accordion accordion-flush position-relative z-3" id="accordionChoose">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                One on one interaction
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionChoose">
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
                <div class="col-lg-6 col-md-8">
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
