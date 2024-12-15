@extends('frontend.layout.main')
@section('content') <!-- Banner Section -->
<section class="page-banner">
    <h1>Blog</h1>
</section>
<!-- End Banner -->
<!-- Popular Classes Section -->
<section class="popular-classes sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('frontend/assets/img/pop-cls.jpg')}}" alt="Popular Classes">
                </div>
                <div class="pop-cls-icon">
                    <i class="bi bi-calendar4-week"></i>
                </div>
                <div class="pop-cls-txt blog-item-text">
                    <a href="blog-details.html">
                        Free Reiki Healing Online Course: Discover the Power of Reiki
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('frontend/assets/img/pop-cls.jpg')}}" alt="Popular Classes">
                </div>
                <div class="pop-cls-icon">
                    <i class="bi bi-calendar4-week"></i>
                </div>
                <div class="pop-cls-txt blog-item-text">
                    <a href="blog-details.html">
                        Free Reiki Healing Online Course: Discover the Power of Reiki
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('frontend/assets/img/pop-cls.jpg')}}" alt="Popular Classes">
                </div>
                <div class="pop-cls-icon">
                    <i class="bi bi-calendar4-week"></i>
                </div>
                <div class="pop-cls-txt blog-item-text">
                    <a href="blog-details.html">
                        Free Reiki Healing Online Course: Discover the Power of Reiki
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Classes -->
@endsection