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
                                            <a href="{{ route('services.show', $service->id) }}"><i class="ri-eye-fill">{{$service->serviceRequests->count()}}</i></a>

                                            <a href="{{ route('services.edit', $service->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('services.destroy', $service->id) }}" 
                                                  class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm" 
                                                        data-toggle="tooltip" title="Delete">
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
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
