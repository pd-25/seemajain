@extends('frontend.layout.main')
@section('content')

    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">SUCCESS STORIES</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Testimonials</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">Hear from our clients who have experienced transformative healing and personal growth.</p>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Video Testimonials Section -->
    <section class="video-testimonials py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="sec-header text-center mb-5" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold" style="font-family: var(--ff-garamond); color: var(--primary-color);">Video Testimonials</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse ($videos as $video)
                <div class="col-lg-4 col-md-6">
                    <div class="course-card h-100 position-relative bg-white" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                        <div class="course-img-wrapper position-relative" style="padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            @php
                                preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video->youtube_link, $matches);
                                $videoId = $matches[1] ?? '';
                            @endphp
                            @if($videoId)
                                <iframe src="https://www.youtube.com/embed/{{ $videoId }}?si=wXQIJ4vpwZ56MU31"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                    class="position-absolute top-0 start-0 w-100 h-100" style="border-radius: 20px 20px 0 0;"></iframe>
                            @else
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                    <p class="text-muted m-0" style="font-family: var(--ff-jost);">Invalid YouTube Link</p>
                                </div>
                            @endif
                        </div>
                        <div class="course-content p-4 text-center">
                            <h5 class="fw-bold mb-3" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 18px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $video->title }}
                            </h5>
                            <a href="{{ $video->youtube_link }}" target="_blank"
                                class="btn-primary-custom d-inline-block px-4 py-2 mt-2" style="border-radius: 30px; text-decoration: none; font-size: 14px;">Watch on YouTube</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted" style="font-family: var(--ff-jost);">No video testimonials available.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Video Testimonials -->

    <!-- Text Testimonials Section -->
    <section class="testimonials sec">
        <div class="testimonial-background-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="sec-header mb-5" data-aos="fade-up" data-aos-duration="500">
                        <h2 class="fw-bold" style="font-family: var(--ff-garamond); color: var(--primary-color);">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="slick-slider" id="testimonialCarousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="item text-center">
                                <div class="testi-txt">
                                    <p class="mb-4" style="font-family: var(--ff-jost); font-size: 16px; line-height: 1.8;"><q>{{ $testimonial->description }}</q></p>
                                    <div class="tisti-img mb-3">
                                        <img src="{{ asset('storage/' . $testimonial->image_path) }}"
                                            alt="{{ $testimonial->name }}" class="rounded-circle shadow-sm" style="width: 80px; height: 80px; object-fit: cover; margin: 0 auto;">
                                    </div>
                                    <h5 class="fw-bold mb-1" style="font-family: var(--ff-jost); color: var(--secondary-color);">{{ $testimonial->name }}</h5>
                                    <p class="text-muted" style="font-size: 14px; font-family: var(--ff-jost);">{{ $testimonial->location }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Text Testimonials -->

    <!-- Google Reviews Section -->
    <section class="google-reviews py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mb-4" data-aos="fade-up" data-aos-duration="500">
                        <img src="{{asset('frontend/assets/img/google-reviews-1-.png')}}" height="80" alt="Google Review">
                    </div>
                    <a href="https://www.google.com/maps/place//data=!4m3!3m2!1s0x396db79c49a8400d:0x276a02c41fea5bf6!12e1?source=g.page.m.kd._&laa=lu-desktop-review-solicitation"
                        target="_blank" class="btn-primary-custom d-inline-block px-5 py-3 shadow-sm" style="border-radius: 30px; text-decoration: none; font-family: var(--ff-jost); font-size: 15px; font-weight: 500; letter-spacing: 1px;" data-aos="fade-up" data-aos-duration="1000">
                        READ MORE GOOGLE REVIEWS
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Google Reviews -->

@endsection