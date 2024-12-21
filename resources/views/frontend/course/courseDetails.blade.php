@extends('frontend.layout.main')
@section('content')

     <!-- Banner Section -->
     <section class="page-banner">
        <h1>{{ $course->title }}</h1>
    </section>
    <!-- End Banner -->
    <!-- Popular Classes Section -->
    <section class="courses-details sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 mb-4 position-relative">
                    <div class="courses-details-highlight position-sticky">
                        <div class="cdc-img">
                            <img src="{{asset('storage/'.$course->image)}}" alt="{{ $course->title }}">
                        </div>
                        <div class="cdh-header my-3 text-center">
                            <h2 class="m-0">₹{{$course->regular_price}} <small><del>₹{{$course->sale_price}}</del></small></h2>
                        </div>
                        <div class="cdh-list">
                            <ul class="list-group list-group-flush ff-jost">
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-clock me-2"></i>Duration</div>
                                    <div class="ma-color fw-bold">{{ $course->duration }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-bookmark-star"></i>
                                        Skill level</div>
                                    <div class="ma-color fw-bold">{{ $course->skill_level }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-translate"></i>
                                        Language</div>
                                    <div class="ma-color fw-bold">{{ $course->language }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <div><i class="bi bi-clipboard-check"></i>
                                        Assessments</div>
                                    <div class="ma-color fw-bold">{{ $course->assessments }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center mt-3">
                            {{-- <a href="#" class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost"
                            data-bs-toggle="modal"
                                   data-bs-target="#bookingModal"
                                   data-id="{{ $course->id }}" 
                                   data-title="{{ $course->title }}">
                            Book Now</a> --}}
                            <a href="javascript:void(0)"
                            class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost book-now-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#bookingModal"
                            data-id="{{ $course->id }}" 
                            data-title="{{ $course->title }}">
                            Book Now
                         </a>
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
                                
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-3" id="tab-01-pane" role="tabpanel"
                                    aria-labelledby="tab-01">
                                    <div class="content">
                                       {!! $course->overview !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade p-4" id="tab-02-pane" role="tabpanel"
                                    aria-labelledby="tab-02">{!! $course->curriculum !!}
                                </div>
                                <div class="tab-pane fade p-4" id="tab-03-pane" role="tabpanel"
                                    aria-labelledby="tab-03">{!! $course->instructor !!}
                                </div>
                                {{-- <div class="tab-pane fade p-4" id="tab-04-pane" role="tabpanel"
                                    aria-labelledby="tab-04">04
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Course Apply For</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bookingForm" action="{{ route('applycourse') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="course_id" id="course_id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <div id="thankYouMessage" class="alert alert-success d-none mt-3">Thank you for your booking request!</div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const bookingForm = document.getElementById('bookingForm');
            const thankYouMessage = document.getElementById('thankYouMessage');
            const bookingModal = document.getElementById('bookingModal');

            // Set service details on modal open
            document.addEventListener('click', function (event) {
                if (event.target.classList.contains('book-now-btn')) {
                    const course_id = event.target.getAttribute('data-id');
                    const serviceTitle = event.target.getAttribute('data-title');

                    document.getElementById('course_id').value = course_id;
                    document.getElementById('bookingModalLabel').textContent = `Apply For - ${serviceTitle}`;
                }
            });

            // Handle form submission
            bookingForm.addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                const formData = new FormData(bookingForm);
                const actionUrl = bookingForm.action;

                fetch(actionUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: formData,
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to submit the form');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Reset form and show Thank You message
                            bookingForm.reset();
                            thankYouMessage.classList.remove('d-none');

                            // Hide modal after a delay
                            setTimeout(() => {
                                const bootstrapModal = bootstrap.Modal.getInstance(bookingModal);
                                bootstrapModal.hide();
                                thankYouMessage.classList.add('d-none');
                            }, 3000);
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            });
        });
    </script>
    @endsection