@extends('admin.layout.main')
@section('title', 'Offers | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Offers</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('offers.create') }}">Add Offer</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Courses</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($offers->currentPage() - 1) * $offers->perPage() + 1;
                                @endphp
                                @foreach ($offers as $offer)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $offer->title }}</td>
                                        <td>{{ Str::limit($offer->description, 50, '...') }}</td>
                                        <td>
                                            @if ($offer->courses->isNotEmpty())
                                            <ul>
                                                @foreach ($offer->courses as $course)
                                                    <li>{{ $course->title }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>No courses associated with this offer.</p>
                                        @endif
                                        </td>
                                        <td>
                                            <span class="badge {{ $offer->status === 'active' ? 'bg-success' : 'bg-secondary' }}">
                                                {{ ucfirst($offer->status) }}
                                            </span>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($offer->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                    <i class="ri-pencil-fill"></i>
                                                </a>
                                                <form method="POST" action="{{ route('offers.destroy', $offer->id) }}" class="m-0">
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
                            {{ $offers->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
