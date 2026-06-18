@extends('frontend.layout.main')
@section('content') 

    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">INSIGHTS & ARTICLES</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Our Blog</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">Read our latest thoughts, healing tips, and wellness insights from Seemma Jain.</p>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Blog Grid -->
    <section class="blog-grid py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row g-4 justify-content-center">
                @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card h-100 position-relative bg-white" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; overflow: hidden; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: transform 0.3s ease;">
                        <a href="{{ route('blogDetails', $blog->slug) }}" class="text-decoration-none text-dark d-flex flex-column h-100">
                            <div class="blog-img-wrapper position-relative" style="height: 240px; overflow: hidden;">
                                <img src="{{ asset('storage/'.$blog->image_path) }}" alt="{{ $blog->title }}" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;">
                            </div>
                            <div class="blog-content p-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge rounded-pill" style="background-color: rgba(106, 75, 140, 0.1); color: var(--primary-color); font-family: var(--ff-jost); font-weight: 500; font-size: 13px; padding: 8px 15px;">
                                        <i class="bi bi-calendar3 me-2"></i> {{ $blog->created_at->isoFormat('Do MMMM YYYY') }}
                                    </span>
                                </div>
                                <h4 class="fw-bold mb-4 flex-grow-1" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 20px; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $blog->title }}
                                </h4>
                                <div>
                                    <span class="fw-bold d-inline-flex align-items-center pb-1" style="color: var(--primary-color); font-family: var(--ff-jost); font-size: 15px; border-bottom: 2px solid var(--primary-color); transition: opacity 0.3s ease;">
                                        Read Article <i class="bi bi-arrow-right ms-2"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white shadow-sm" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03);">
                        <i class="bi bi-journal-text display-1 text-muted mb-3 opacity-25"></i>
                        <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-family: var(--ff-garamond);">No Articles Yet</h3>
                        <p class="text-muted" style="font-family: var(--ff-jost);">Check back soon for inspiring wellness content.</p>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Blog Grid -->
@endsection