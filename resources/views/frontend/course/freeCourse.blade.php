@extends('frontend.layout.main')
@section('content')
   <!-- Banner Section -->
   <section class="page-banner">
    <h1>Free Courses</h1>
</section>
<!-- End Banner -->
<!-- Free Classes Section -->
<section class="popular-classes sec">
    <div class="container">
        <div class="row">
            @foreach ($course as $course)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    @php
                        // Extract the YouTube video ID from the link
                        preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $course->youtube_link, $matches);
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
                    <h5>{{ $course->title }}</h5>
                    <a href="{{ $course->youtube_link }}" target="_blank"
                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Watch Free</a>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</section>
@endsection