@extends('admin.layout.main')
@section('title', 'Free Videos | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title m-0">All Free Videos</h5>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('free-courses.create') }}">Add Video</a>
                        </div>

                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">YouTube Link</th>
                                    {{-- <th scope="col">Type</th> --}}
                                    <th scope="col">Added On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($videos->currentPage() - 1) * $videos->perPage() + 1;
                                @endphp
                                @foreach ($videos as $video)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $video->title }}</td>
                                        <td><a href="{{ $video->youtube_link }}" target="_blank">Watch</a></td>
                                        {{-- <td>{{ ucfirst($video->type) }}</td> --}}
                                        <td>{{ \Carbon\Carbon::parse($video->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <a href="{{ route('free-courses.edit', $video->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('free-courses.destroy', $video->id) }}" 
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
                            {{ $videos->links('pagination::bootstrap-5') }}
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
