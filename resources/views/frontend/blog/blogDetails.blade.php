@extends('frontend.layout.main')
@section('content') 
    
    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">ARTICLE</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">{{$blog->title}}</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">
                <i class="bi bi-calendar3 me-2"></i> {{ $blog->created_at->isoFormat('Do MMMM YYYY') }}
            </p>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Blog Details Section -->
    <section class="courses-details py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row g-5">
                
                <!-- Main Content -->
                <div class="col-lg-8 col-md-7 mb-4">
                    <div class="blog-details-content bg-white p-4 p-md-5" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                        <div class="cdc-img mb-5 overflow-hidden" style="border-radius: 15px;">
                            <img src="{{asset('storage/'.$blog->image_path)}}" alt="{{$blog->title}}" class="img-fluid w-100" style="object-fit: cover; max-height: 500px;">
                        </div>
                        <div class="content text-muted lh-lg" style="font-family: var(--ff-jost); font-size: 17px;">
                            {!! $blog->description !!}
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-5 position-relative">
                    <div class="courses-details-highlight position-sticky bg-white p-4" style="top: 100px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div class="cdh-header mb-4 border-bottom pb-3">
                            <h4 class="m-0 fw-bold" style="font-family: var(--ff-jost); color: var(--primary-color);">Related Blogs</h4>
                        </div>
                        <ul class="list-group list-group-flush ff-jost">
                            @forelse ($relatedBlogs as $relatedBlog)
                                <li class="list-group-item bg-transparent px-0 border-bottom-0 mb-3">
                                    <a href="{{ route('blogDetails', $relatedBlog->slug) }}" class="text-decoration-none d-flex align-items-start">
                                        <i class="bi bi-arrow-right-short mt-1 me-2" style="color: var(--primary-color); font-size: 20px;"></i>
                                        <span style="color: var(--secondary-color); font-weight: 500; font-size: 16px; line-height: 1.4; transition: color 0.3s ease;" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='var(--secondary-color)'">
                                            {{ $relatedBlog->title }}
                                        </span>
                                    </a>
                                </li>
                            @empty
                                <li class="list-group-item bg-transparent px-0 text-muted" style="font-family: var(--ff-jost);">No related blogs found.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Details Section -->
@endsection