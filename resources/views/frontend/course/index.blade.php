@extends('frontend.layout.main')
@section('content')
<section class="page-banner position-relative">
    <div class="container text-center position-relative z-3">
        <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">LEARN & GROW</div>
        <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Transformative Courses</h1>
        <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">Discover profound clarity, healing, and self-empowerment through our expert-led programs designed for lifelong growth.</p>
    </div>
</section>

<!-- Courses Grid Section -->
<section class="courses-grid py-5" style="background-color: #faf7f2;">
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            @forelse ($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <div class="course-card h-100 position-relative" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.02); overflow: hidden;">
                        <div class="course-img-wrapper overflow-hidden" style="height: 240px;">
                            <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid w-100 course-img" alt="{{ $course->title }}" style="height: 100%; object-fit: cover;">
                            <div class="course-overlay d-flex align-items-center justify-content-center">
                                <a href="{{ route('courseDetail', $course->slug) }}" class="btn-primary-custom btn-sm rounded-pill px-4 py-2" style="font-size: 14px;">View Course</a>
                            </div>
                        </div>
                        <div class="course-content p-4 text-center bg-white">
                            <div class="course-icon-badge mb-3">
                                <i class="bi bi-mortarboard text-primary fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3" style="font-family: var(--ff-jost); font-size: 20px; color: var(--secondary-color);">{{ $course->title }}</h5>
                            <a href="{{ route('courseDetail', $course->slug) }}" class="course-link fw-medium">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white shadow-sm" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03);">
                        <i class="bi bi-journal-x display-1 text-muted mb-3 opacity-25"></i>
                        <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-family: var(--ff-garamond);">No Courses Yet</h3>
                        <p class="text-muted" style="font-family: var(--ff-jost);">Check back later for new transformative programs.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection