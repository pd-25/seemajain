@extends('frontend.layout.main')
@section('content')

    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">COURSE DETAILS</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">{{ $course->title }}</h1>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Course Details Section -->
    <section class="courses-details py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row g-5">
                <!-- Left Sidebar -->
                <div class="col-lg-4 col-md-5 position-relative">
                    <div class="courses-details-highlight position-sticky bg-white p-4" style="top: 100px; border-radius: 20px; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div class="cdc-img mb-4 overflow-hidden" style="border-radius: 15px;">
                            <img src="{{asset('storage/'.$course->image)}}" alt="{{ $course->title }}" class="img-fluid w-100">
                        </div>
                        <div class="cdh-header my-3 text-center">
                            <h2 class="m-0 fw-bold" style="color: var(--primary-color); font-family: var(--ff-jost);">₹{{$course->sale_price}} <small class="text-muted fs-5"><del>₹{{$course->regular_price}}</del></small></h2>
                        </div>
                        <hr class="my-4 text-muted opacity-25">
                        <div class="cdh-list">
                            <ul class="list-group list-group-flush ff-jost">
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-bottom-0 pb-3">
                                    <div class="text-muted"><i class="bi bi-clock me-2" style="color: var(--primary-color);"></i>Duration</div>
                                    <div class="fw-bold" style="color: var(--secondary-color);">{{ $course->duration }}</div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent px-0 border-bottom-0 pb-3">
                                    <div class="text-muted"><i class="bi bi-translate me-2" style="color: var(--primary-color);"></i>Language</div>
                                    <div class="fw-bold" style="color: var(--secondary-color);">{{ $course->language }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center mt-4">
                            <a href="javascript:void(0)"
                            class="btn-primary-custom w-100 d-block book-now-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#bookingModal"
                            data-id="{{ $course->id }}"
                            data-title="{{ $course->title }}"
                            style="font-size: 16px; padding: 15px; border-radius: 30px; text-decoration: none;">
                            Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-8 col-md-7">
                    <div class="courses-details-content bg-white p-4 p-md-5" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                        <div class="overview">
                            <ul class="nav nav-pills nav-fill border-bottom pb-3 mb-4 cdc-tab" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active fw-bold px-4 rounded-pill" id="tab-01" data-bs-toggle="tab"
                                        data-bs-target="#tab-01-pane" type="button" role="tab"
                                        aria-controls="tab-01-pane" aria-selected="true" style="font-family: var(--ff-jost);">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold px-4 rounded-pill" id="tab-02" data-bs-toggle="tab"
                                        data-bs-target="#tab-02-pane" type="button" role="tab"
                                        aria-controls="tab-02-pane" aria-selected="false" style="font-family: var(--ff-jost);">Curriculum</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold px-4 rounded-pill" id="tab-03" data-bs-toggle="tab"
                                        data-bs-target="#tab-03-pane" type="button" role="tab"
                                        aria-controls="tab-03-pane" aria-selected="false" style="font-family: var(--ff-jost);">Instructor</button>
                                </li> -->
                            </ul>
                            <div class="tab-content text-muted lh-lg" id="myTabContent" style="font-family: var(--ff-jost); font-size: 16px;">
                                <div class="tab-pane fade show active" id="tab-01-pane" role="tabpanel"
                                    aria-labelledby="tab-01">
                                    {!! $course->overview !!}
                                </div>
                                <div class="tab-pane fade" id="tab-02-pane" role="tabpanel"
                                    aria-labelledby="tab-02">
                                    {!! $course->curriculum !!}
                                </div>
                                <!-- <div class="tab-pane fade" id="tab-03-pane" role="tabpanel"
                                    aria-labelledby="tab-03">
                                    {!! $course->instructor !!}
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; border: none; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                <div class="modal-header px-4 py-3" style="background: var(--primary-color); border-bottom: none;">
                    <h5 class="modal-title fw-bold text-white" id="bookingModalLabel" style="font-family: var(--ff-jost);">Course Apply For</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1;"></button>
                </div>
                <form id="bookingForm" action="{{ route('applycourse') }}" method="POST">
                    @csrf
                    <div class="modal-body p-4 bg-light" style="font-family: var(--ff-jost);">
                        <input type="hidden" name="course_id" id="course_id">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold" style="color: var(--secondary-color);">Name</label>
                            <input type="text" class="form-control px-3 py-2" id="name" name="name" required style="border-radius: 10px; border: 1px solid #ddd;">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-bold" style="color: var(--secondary-color);">Phone</label>
                            <input type="text" class="form-control px-3 py-2" id="phone" name="phone" required style="border-radius: 10px; border: 1px solid #ddd;">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold" style="color: var(--secondary-color);">Email</label>
                            <input type="email" class="form-control px-3 py-2" id="email" name="email" required style="border-radius: 10px; border: 1px solid #ddd;">
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label fw-bold" style="color: var(--secondary-color);">Location</label>
                            <input type="text" class="form-control px-3 py-2" id="location" name="location" required style="border-radius: 10px; border: 1px solid #ddd;">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold" style="color: var(--secondary-color);">Message</label>
                            <textarea class="form-control px-3 py-2" id="message" name="message" rows="3" style="border-radius: 10px; border: 1px solid #ddd;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer px-4 py-3 bg-white" style="border-top: 1px solid rgba(0,0,0,0.05);">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal" style="font-family: var(--ff-jost);">Close</button>
                        <button type="submit" class="btn-primary-custom border-0 rounded-pill px-4 py-2" style="font-size: 14px; text-decoration: none;">Submit</button>
                    </div>
                </form>
                <div id="thankYouMessage" class="alert alert-success d-none m-4 mt-0" style="border-radius: 10px;">Thank you for your booking request!</div>
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

                // Single instance on page.
                var razorpay = new Razorpay({
                    key: 'rzp_test_bYsAyhU03AYA4j',
                    // logo, displayed in the payment processing popup
                    image: 'http://localhost:8000/frontend/assets/img/logo.png',
                });

                // Fetching the payment.
                razorpay.once('ready', function(response) {
                    console.log(response.methods);
                });

                // Submitting the data.
                var data = {
                    amount: 1000, // in currency subunits. Here 1000 = 1000 paise, which equals to ₹10
                    currency: "INR", // Default is INR. We support more than 90 currencies.
                    email: 'test.appmomos@gmail.com',
                    contact: '9123456780',
                    notes: {
                    address: 'Ground Floor, SJR Cyber, Laskar Hosur Road, Bengaluru',
                    },
                    // order_id: '123',
                    method: 'netbanking',
                    // method specific fields
                    bank: 'HDFC'
                };

                // has to be placed within a user-initiated context, such as click, in order for popup to open.
                razorpay.createPayment(data);

                razorpay.on('payment.success', function(resp) {
                alert("Payment success.");
                alert(resp.razorpay_payment_id);
                alert(resp.razorpay_order_id);
                alert(resp.razorpay_signature);
                }); // will pass payment ID, order ID, and Razorpay signature to success handler.

                razorpay.on('payment.error', function(resp) {
                 alert(resp.error.description);
                }); // will pass error object to error handler



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
