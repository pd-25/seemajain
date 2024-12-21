@extends('admin.layout.main')
@section('title', 'Blogs | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Blogs</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('blogs.create') }}">Add Blog</a>
                        
                        <table class="table">
                            <thead>
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
                        {{ $blogs->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
