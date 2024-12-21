@extends('frontend.layout.main')
@section('content')
<section class="page-banner">
    <h1>Testimonials</h1>
</section>
<!-- End Banner -->
<!-- Free Classes Section -->
<section class="popular-classes sec">
    <div class="container">
        <div class="row">
            @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    @php
                        // Extract the YouTube video ID from the link
                        preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $video->youtube_link, $matches);
                        $videoId = $matches[1] ?? '';
                    @endphp
                    @if($videoId)
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}?si=wXQIJ4vpwZ56MU31"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    @else
                        <p>Invalid YouTube Link</p>
                    @endif
                </div>
                <div class="pop-cls-txt">
                    <h5>{{ $video->title }}</h5>
                    <a href="{{ $video->youtube_link }}" target="_blank"
                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Watch Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Free Classes -->
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
                                    <img src="{{asset('storage/'.$testimonial->image_path)}}" alt="{{ $testimonial->name }}">
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
<!-- Google Testionials Section -->
<section class="sec">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="mb-4">
                    <img src="{{asset('frontend/assets/img/google-reviews-1-.png')}}" height="100" alt="Google Review">
                </div>
                <a href="https://www.google.com/maps/place//data=!4m3!3m2!1s0x396db79c49a8400d:0x276a02c41fea5bf6!12e1?source=g.page.m.kd._&laa=lu-desktop-review-solicitation"
                    target="_blank" class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">MORE REVIEW
                    FROM GOOGLE</a>
            </div>
        </div>
    </div>
</section>
<!-- End Google Testionials -->
@endsection