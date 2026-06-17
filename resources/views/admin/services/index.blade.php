@extends('admin.layout.main')
@section('title', 'Services | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Services</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('services.create') }}">Add Service</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    
                                    {{-- <th scope="col">Background Image</th> --}}
                                    <th scope="col">Added On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($services->currentPage() - 1) * $services->perPage() + 1;
                                @endphp
                                @foreach ($services as $service)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>
                                            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="50">
                                        </td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ Str::limit($service->description, 50) }}</td>
                                       
                                       
                                        <td>{{ $service->created_at->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('services.show', $service->id) }}" class="btn btn-sm btn-outline-info d-flex align-items-center" data-bs-toggle="tooltip" title="View">
                                                    <i class="ri-eye-fill"></i>
                                                    <span class="badge bg-info text-dark ms-1">{{$service->serviceRequests->count()}}</span>
                                                </a>
                                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                    <i class="ri-pencil-fill"></i>
                                                </a>
                                                <form method="POST" action="{{ route('services.destroy', $service->id) }}" class="m-0">
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
                            {{ $services->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->             </div>
            </div>
        </div>
    </section>
@endsection
