@extends('frontend.layout.main')
@section('content')
<section class="page-banner position-relative">
    <div class="container text-center position-relative z-3">
        <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">EMPOWER YOURSELF</div>
        <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Free Video Sessions</h1>
        <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">Start your healing journey today with our collection of free, transformative video tutorials.</p>
    </div>
</section>

<!-- Free Classes Section -->
<section class="courses-grid py-5" style="background-color: #faf7f2;">
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            @forelse ($course as $c)
                <div class="col-lg-4 col-md-6">
                    <div class="course-card h-100 position-relative" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.02); overflow: hidden;">
                        
                        <div class="course-video-wrapper overflow-hidden bg-dark position-relative">
                            @php
                                // Extract the YouTube video ID from the link (handles both formats)
                                preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $c->youtube_link, $matches);
                                $videoId = $matches[1] ?? '';
                            @endphp
                            
                            @if($videoId)
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/{{ $videoId }}?si=wXQIJ4vpwZ56MU31"
                                        title="{{ $c->title }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            @else
                                <div class="ratio ratio-16x9 d-flex align-items-center justify-content-center bg-light">
                                    <p class="text-muted mb-0" style="font-family: var(--ff-jost);">Video Unavailable</p>
                                </div>
                            @endif
                        </div>
                        
                        <div class="course-content p-4 text-center bg-white">
                            <div class="course-icon-badge mb-3" style="background: #fdfaf6; border-color: #fff;">
                                <i class="bi bi-play-circle text-primary fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3" style="font-family: var(--ff-jost); font-size: 20px; color: var(--secondary-color);">{{ $c->title }}</h5>
                            <a href="{{ $c->youtube_link }}" target="_blank" class="course-link fw-medium">Watch on YouTube &rarr;</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white shadow-sm" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03);">
                        <i class="bi bi-camera-video-off display-1 text-muted mb-3 opacity-25"></i>
                        <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-family: var(--ff-garamond);">No Free Courses Yet</h3>
                        <p class="text-muted" style="font-family: var(--ff-jost);">Check back later for new free tutorial videos.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection