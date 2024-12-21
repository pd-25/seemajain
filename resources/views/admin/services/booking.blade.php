@extends('admin.layout.main')

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$service->title}} Booking Request</h5>
                    @if (Session::has('msg'))
                        <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                    {{-- <a class="btn btn-sm btn-outline-success float-end" href="{{ route('services.create') }}">Add Service</a> --}}
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $startIndex = ($bookings->currentPage() - 1) * $bookings->perPage() + 1;
                            @endphp
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $startIndex++ }}</td>
                                <td>{{ $booking->service->title }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm view-booking" 
                                            data-id="{{ $booking->id }}" 
                                            data-service="{{ $booking->service->title }}"
                                            data-name="{{ $booking->name }}"
                                            data-email="{{ $booking->email }}"
                                            data-phone="{{ $booking->phone }}"
                                            data-location="{{ $booking->location }}"
                                            data-message="{{ $booking->message }}">
                                        View
                                    </button>
                                    <button class="btn btn-danger btn-sm delete-booking" 
        data-id="{{ $booking->id }}" 
        data-url="{{ route('bookings.destroy', $booking->id) }}">
    Delete
</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel">Booking Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Service:</strong> <span id="viewService"></span></p>
                <p><strong>Name:</strong> <span id="viewName"></span></p>
                <p><strong>Email:</strong> <span id="viewEmail"></span></p>
                <p><strong>Phone:</strong> <span id="viewPhone"></span></p>
                <p><strong>Location:</strong> <span id="viewLocation"></span></p>
                <p><strong>Message:</strong> <span id="viewMessage"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
    // Handle View button click
    document.querySelectorAll('.view-booking').forEach(button => {
        button.addEventListener('click', function () {
            // Populate the modal fields with booking details
            document.getElementById('viewService').textContent = this.dataset.service || 'N/A';
            document.getElementById('viewName').textContent = this.dataset.name || 'N/A';
            document.getElementById('viewEmail').textContent = this.dataset.email || 'N/A';
            document.getElementById('viewPhone').textContent = this.dataset.phone || 'N/A';
            document.getElementById('viewLocation').textContent = this.dataset.location || 'N/A';
            document.getElementById('viewMessage').textContent = this.dataset.message || 'N/A';

            // Show the modal
            const viewModal = new bootstrap.Modal(document.getElementById('viewModal'));
            viewModal.show();
        });
    });

    // Handle Delete button click
    document.querySelectorAll('.delete-booking').forEach(button => {
        button.addEventListener('click', function () {
            if (confirm('Are you sure you want to delete this booking?')) {
                const deleteUrl = this.dataset.url; // Retrieve delete URL from data-url

                if (!deleteUrl) {
                    alert('Delete URL not found. Please try again.');
                    return;
                }

                fetch(deleteUrl, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to delete the booking.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            alert(data.message);
                            location.reload(); // Reload the page after successful deletion
                        } else {
                            alert(data.message || 'Failed to delete the booking.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the booking. Please try again.');
                    });
            }
        });
    });
});

</script>

@endsection
