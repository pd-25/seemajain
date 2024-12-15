@extends('frontend.layout.main')
@section('content')

     <!-- Banner Section -->
     <section class="page-banner">
        <h1>Courses Details</h1>
    </section>
    <!-- End Banner -->
    <!-- Popular Classes Section -->
    <section class="courses-details sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 mb-4 position-relative">
                    <div class="courses-details-highlight position-sticky">
                        <div class="cdc-img">
                            <img src="{{asset('frontend/assets/img/pop-cls.jpg')}}" alt="Courses Details">
                        </div>
                        <div class="cdh-header my-3 text-center">
                            <h2 class="m-0">₹15,000.00 <small><del>19,999.00</del></small></h2>
                        </div>
                        <div class="cdh-list">
                            <ul class="list-group list-group-flush ff-jost">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-clock me-2"></i>Duration</div>
                                    <div class="ma-color fw-bold">24 weeks</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-bookmark-star"></i>
                                        Skill level</div>
                                    <div class="ma-color fw-bold">All levels</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-translate"></i>
                                        Language</div>
                                    <div class="ma-color fw-bold">English</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-clipboard-check"></i>
                                        Assessments</div>
                                    <div class="ma-color fw-bold">Yes</div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="courses-details-cotent">
                        <div class="overview">
                            <ul class="nav nav nav-pills ff-jost nav-fill border-bottom cdc-tab" id="myTab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab-01" data-bs-toggle="tab"
                                        data-bs-target="#tab-01-pane" type="button" role="tab"
                                        aria-controls="tab-01-pane" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-02" data-bs-toggle="tab"
                                        data-bs-target="#tab-02-pane" type="button" role="tab"
                                        aria-controls="tab-02-pane" aria-selected="false">Curriculum</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-03" data-bs-toggle="tab"
                                        data-bs-target="#tab-03-pane" type="button" role="tab"
                                        aria-controls="tab-03-pane" aria-selected="false">Instructor</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-04" data-bs-toggle="tab"
                                        data-bs-target="#tab-04-pane" type="button" role="tab"
                                        aria-controls="tab-04-pane" aria-selected="false">Instructor</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-3" id="tab-01-pane" role="tabpanel"
                                    aria-labelledby="tab-01">
                                    <div class="content">
                                        <h4>Switchwords Course</h4>
                                        <p>Switchwords are powerful words that carry intent rather than specific
                                            meanings, much like the potent Indian mantras. Over the years, thousands of
                                            result-oriented Switchwords have been discovered, with experts continuing to
                                            develop more.</p>
                                        <p>The Vedic Switch Words Course teaches you how to harness these words to
                                            address nearly every aspect of life—whether it’s finance, health, love,
                                            relationships, education, beauty, or success. These areas often reflect
                                            common human goals, and Switchwords help individuals achieve those goals by
                                            shifting their mental state.</p>
                                        <p>Ultimately, it’s all about reaching a desired mental state, and through the
                                            Vedic Switch Words Course, you’ll learn to use Switchwords as an effective
                                            tool to manifest your intentions.</p>
                                        <h4>Module 1: Introduction to Vedic Switchwords Course and Significance</h4>
                                        <p>Our western and vedic switch words course is structured into four detailed
                                            modules, each covering essential aspects of Vedic, Italian, and Western
                                            Switchwords.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-4" id="tab-02-pane" role="tabpanel"
                                    aria-labelledby="tab-02">02
                                </div>
                                <div class="tab-pane fade p-4" id="tab-03-pane" role="tabpanel"
                                    aria-labelledby="tab-03">03
                                </div>
                                <div class="tab-pane fade p-4" id="tab-04-pane" role="tabpanel"
                                    aria-labelledby="tab-04">04
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Classes -->
    @endsection