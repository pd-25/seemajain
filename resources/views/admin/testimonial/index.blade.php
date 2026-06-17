@extends('admin.layout.main')
@section('title', 'Testimonials | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Testimonials</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('testimonials.create') }}">Add Testimonial</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Location</th>
                                <th scope="col">Added On</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $startIndex = ($testimonials->currentPage() - 1) * $testimonials->perPage() + 1;
                            @endphp
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <th scope="row">{{ $startIndex++ }}</th>
                                <td>
                                    <img src="{{ asset('storage/' . $testimonial->image_path) }}" alt="{{ $testimonial->name }}"
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>{{ $testimonial->name }}</td>

                                <td>{{ \Illuminate\Support\Str::limit($testimonial->description, 50) }}</td>
                                <td>{{ $testimonial->location ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($testimonial->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                    <i class="ri-pencil-fill"></i>
                                                </a>
                                                <form method="POST" action="{{ route('testimonials.destroy', $testimonial->id) }}" class="m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="ri-delete-bin-2-fill"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            {{ $testimonials->links('pagination::bootstrap-5') }}
                        </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection