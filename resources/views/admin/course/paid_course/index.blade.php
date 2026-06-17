@extends('admin.layout.main')
@section('title', 'Courses | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Courses</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('paid-courses.create') }}">Add Course</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Skill Level</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Regular Price</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Added On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($courses->currentPage() - 1) * $courses->perPage() + 1;
                                @endphp
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ ucfirst($course->skill_level) }}</td>
                                        <td>{{ ucfirst($course->language) }}</td>
                                        <td>${{ number_format($course->regular_price, 2) }}</td>
                                        <td>${{ number_format($course->sale_price, 2) }}</td>
                                        <td>{{ \Carbon\Carbon::parse($course->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <a href="{{ route('paid-courses.show', $course->id) }}"><i class="ri-eye-fill">{{$course->courseRequests->count()}}</i></a>
                                            <a href="{{ route('paid-courses.edit', $course->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('paid-courses.destroy', $course->id) }}" 
                                                  class="d-inline-block pl-2">
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
                            {{ $courses->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
