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
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <iframe src="https://www.youtube.com/embed/NAQ8fZuQNYI?si=Tpm_XxPwL5QpbAND"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pop-cls-txt">
                    <h5>Stock market profit via switchwords</h5>
                    <a href="https://youtu.be/NAQ8fZuQNYI?si=51XW2OHDcWHwEzbd" target="_blank"
                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Watch Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <iframe src="https://www.youtube.com/embed/NAQ8fZuQNYI?si=Tpm_XxPwL5QpbAND"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pop-cls-txt">
                    <h5>Stock market profit via switchwords</h5>
                    <a href="https://youtu.be/NAQ8fZuQNYI?si=51XW2OHDcWHwEzbd" target="_blank"
                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Watch Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <iframe src="https://www.youtube.com/embed/NAQ8fZuQNYI?si=Tpm_XxPwL5QpbAND"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pop-cls-txt">
                    <h5>Stock market profit via switchwords</h5>
                    <a href="https://youtu.be/NAQ8fZuQNYI?si=51XW2OHDcWHwEzbd" target="_blank"
                        class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Watch Now</a>
                </div>
            </div>
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
                        <div class="item text-center">
                            <div class="testi-txt">
                                <p class="mb-4"><q>Seema Ji exhibits exceptional proficiency in her subject matter
                                        and psychic talents. It has been a pleasure participating in her classes and
                                        sessions. She is dedicated to fostering an inclusive learning environment,
                                        actively seeking and incorporating feedback from every participant. Her
                                        energy is both engaging and enriching. I have personally attended her
                                        Switchwords classes, and I highly commend her commitment and expertise.
                                        Wishing her continued success!</q></p>
                                <div class="tisti-img">
                                    <img src="{{asset('frontend/assets/img/testimonial-img.jpg')}}" alt="Testimonials">
                                </div>
                                <h5>Mamtta Shard</h5>
                                <p>India</p>
                            </div>
                        </div>
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
                    <img src="assets/img/google-reviews-1-.png" height="100" alt="Google Review">
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