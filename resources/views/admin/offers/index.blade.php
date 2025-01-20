@extends('admin.layout.main')
@section('title', 'Offers | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Offers</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('offers.create') }}">Add Offer</a>
                        
                        <table class="table">
                            <thead>
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
                                            <a href="{{ route('offers.edit', $offer->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('offers.destroy', $offer->id) }}" 
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
                        {{ $offers->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
