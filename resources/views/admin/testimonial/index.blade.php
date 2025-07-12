@extends('admin.layout.main')
@section('title', 'Testimonials | ')
@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Testimonials</h5>

                    @if (Session::has('msg'))
                    <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif

                    <a class="btn btn-sm btn-outline-success float-end" href="{{ route('testimonials.create') }}">Add Testimonial</a>

                    <table class="table">
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
                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}"><i class="ri-pencil-fill"></i></a>
                                    <form method="POST" action="{{ route('testimonials.destroy', $testimonial->id) }}"
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
                    {{ $testimonials->links() }}
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection