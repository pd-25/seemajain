@extends('admin.layout.main')
@section('title', 'SEO Management | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">SEO Management</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('seo.create') }}">Add SEO Data</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Page Name</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Meta Description</th>
                                    <th scope="col">Header Script</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($seoData->currentPage() - 1) * $seoData->perPage() + 1;
                                @endphp
                                @foreach ($seoData as $data)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $data->page_name }}</td>
                                        <td>{{ Str::limit($data->meta_title, 50) }}</td>
                                        <td>{{ Str::limit($data->meta_description, 50) }}</td>
                                        <td>{{ Str::limit($data->hederscript, 50) }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('seo.edit', $data->id) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                    <i class="ri-pencil-fill"></i>
                                                </a>
                                                <form method="POST" action="{{ route('seo.destroy', $data->id) }}" class="m-0">
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
                            {{ $seoData->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
