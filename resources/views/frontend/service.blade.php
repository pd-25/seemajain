@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <h1>Services</h1>
    </section>
    <!-- End Banner -->
    <!-- Free Classes Section -->
    <section class="popular-classes sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item position-relative" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('frontend/assets/img/service01.jpg')}}" class="services-hover" alt="Tarot Reading">
                        <div class="services-item-content position-relative">
                            <img src="{{asset('frontend/assets/img/tarot-cards.png')}}" width="120" alt="Tarot Reading">
                            <h2>Tarot Reading</h2>
                            <p>60 min reading with remedies - 3000 INR</p>
                            <p>30 min reading only - 2100 INR</p>
                            <p>15 min reading only - 1500 INR</p>
                            <a href="javascript:void(0)"
                                class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item position-relative" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('frontend/assets/img/service02.jpg')}}" class="services-hover" alt="Tarot Reading">
                        <div class="services-item-content position-relative">
                            <img src="{{asset('frontend/assets/img/quality-of-life.png')}}" width="120" alt="Tarot Reading">
                            <h2>PLR Session</h2>
                            <p>2hrs 1st session - 6500 INR</p>
                            <p>2hrs 2nd session - 5000 INR</p>
                            <p>2hrs 3rd session - 4500 INR</p>
                            <a href="javascript:void(0)"
                                class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Free Classes -->

@endsection