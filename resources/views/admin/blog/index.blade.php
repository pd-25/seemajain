@extends('admin.layout.main')
@section('title', 'Blogs | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Blogs</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('blogs.create') }}">Add Blog</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Added On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($blogs->currentPage() - 1) * $blogs->perPage() + 1;
                                @endphp
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ Str::limit($blog->description, 50) }}</td>
                                        <td>{{ $blog->meta_title }}</td>
                                        <td>{{ $blog->created_at->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', $blog->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}" 
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
                            {{ $blogs->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
