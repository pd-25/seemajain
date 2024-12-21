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
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-item position-relative" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('storage/'.$service->background_image) }}" class="services-hover" alt="{{ $service->title }}">
                            <div class="services-item-content position-relative">
                                <img src="{{ asset('storage/'.$service->icon) }}" width="120" alt="{{ $service->title }}">
                                <h2>{{ $service->title }}</h2>
                                <p>{!! $service->description !!}</p>
                                <a href="javascript:void(0)"
                                   class="ma-btn ma-btn-primary ma-btn-sm px-4 rounded-pill ff-jost book-now-btn"
                                   data-bs-toggle="modal"
                                   data-bs-target="#bookingModal"
                                   data-id="{{ $service->id }}" 
                                   data-title="{{ $service->title }}">
                                   Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Free Classes Section -->

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Book Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bookingForm" action="{{ route('bookingstore') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="service_id" id="serviceId">
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
                    const serviceId = event.target.getAttribute('data-id');
                    const serviceTitle = event.target.getAttribute('data-title');

                    document.getElementById('serviceId').value = serviceId;
                    document.getElementById('bookingModalLabel').textContent = `Book Service - ${serviceTitle}`;
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
