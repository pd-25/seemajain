@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
    <section class="page-banner position-relative">
        <div class="container text-center position-relative z-3">
            <div class="banner-eyebrow mb-2" data-aos="fade-down" data-aos-duration="1000">WHAT WE OFFER</div>
            <h1 class="display-4 fw-bold mb-3" style="font-family: var(--ff-garamond); color: var(--primary-color);" data-aos="fade-up" data-aos-duration="1500">Our Services</h1>
            <p class="text-muted mx-auto" style="max-width: 600px; font-size: 18px;" data-aos="fade-up" data-aos-duration="2000">Explore our professional offerings designed to bring balance, healing, and clarity into your life.</p>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Services Grid Section -->
    <section class="services-grid py-5" style="background-color: #faf7f2;">
        <div class="container my-5">
            <div class="row g-4 justify-content-center">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card h-100 position-relative bg-white" data-aos="fade-up" data-aos-duration="1000" style="border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease;">
                            <!-- Background Image / Header Area -->
                            <div class="service-img-wrapper position-relative" style="height: 200px; overflow: hidden;">
                                <img src="{{ asset('storage/'.$service->background_image) }}" class="w-100 h-100" style="object-fit: cover; transition: transform 0.5s ease;" alt="{{ $service->title }}">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));"></div>
                            </div>
                            
                            <!-- Icon overlapping -->
                            <div class="service-icon-wrapper position-absolute bg-white shadow-sm d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; border-radius: 50%; top: 160px; left: 50%; transform: translateX(-50%); z-index: 10;">
                                <img src="{{ asset('storage/'.$service->icon) }}" width="45" alt="{{ $service->title }}" style="object-fit: contain;">
                            </div>
                            
                            <!-- Content -->
                            <div class="service-content p-4 text-center mt-4">
                                <h4 class="fw-bold mb-3" style="font-family: var(--ff-jost); color: var(--secondary-color); font-size: 22px;">{{ $service->title }}</h4>
                                <div class="text-muted mb-4" style="font-family: var(--ff-jost); font-size: 15px; line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    {!! $service->description !!}
                                </div>
                                <a href="javascript:void(0)"
                                    class="btn-primary-custom w-100 d-block book-now-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#bookingModal"
                                    data-id="{{ $service->id }}" 
                                    data-title="{{ $service->title }}"
                                    style="font-size: 15px; padding: 12px; border-radius: 30px; text-decoration: none;">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="p-5 bg-white shadow-sm" style="border-radius: 20px; border: 1px solid rgba(0,0,0,0.03);">
                            <i class="bi bi-gear display-1 text-muted mb-3 opacity-25"></i>
                            <h3 class="fw-bold mb-2" style="color: var(--primary-color); font-family: var(--ff-garamond);">No Services Available</h3>
                            <p class="text-muted" style="font-family: var(--ff-jost);">Check back later for our new offerings.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Services Grid Section -->

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; border: none; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
                <div class="modal-header px-4 py-3" style="background: var(--primary-color); border-bottom: none;">
                    <h5 class="modal-title fw-bold text-white" id="bookingModalLabel" style="font-family: var(--ff-jost);">Book Service</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1;"></button>
                </div>
                <form id="bookingForm" action="{{ route('bookingstore') }}" method="POST">
                    @csrf
                    <div class="modal-body p-4 bg-light" style="font-family: var(--ff-jost);">
                        <input type="hidden" name="service_id" id="serviceId">
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
