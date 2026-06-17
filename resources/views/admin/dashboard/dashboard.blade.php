@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    <section class="section dashboard">
        <div class="row">

            <!-- Paid Courses Card -->
            <div class="col-xxl-4 col-md-4 mb-4">
                <div class="card info-card sales-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Paid Courses</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-journal-check"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $paidCoursesCount ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Free Courses Card -->
            <div class="col-xxl-4 col-md-4 mb-4">
                <div class="card info-card sales-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Free Courses</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-journal"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $freeCoursesCount ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Card -->
            <div class="col-xxl-4 col-md-4 mb-4">
                <div class="card info-card sales-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Services</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $servicesCount ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
