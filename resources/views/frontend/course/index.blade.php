@extends('frontend.layout.main')
@section('content')
<section class="page-banner">
    <h1>Courses</h1>
</section>
<!-- End Banner -->
<!-- Popular Classes Section -->
<section class="popular-classes sec">
    <div class="container">
        <div class="row">
            
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pop-cls-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('storage/'.$course->image)}}" alt="{{ $course->title }}">
                </div>
                <div class="pop-cls-icon">
                    <i class="bi bi-brightness-high"></i>
                </div>
                <div class="pop-cls-txt">
                    <h5>{{ $course->title }}</h5>
                    <a href="{{route('courseDetail',$course->slug)}}" class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Read
                        More</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!-- End Popular Classes -->
@endsection