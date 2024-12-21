@extends('admin.layout.main')
@section('title', 'Members | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Members</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('members.create') }}">Add Member</a>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Added On</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($members->currentPage() - 1) * $members->perPage() + 1;
                                @endphp
                                @foreach ($members as $member)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->designation }}</td>
                                        <td>
                                            @if($member->image)
                                                <img src="{{ asset('storage/' . $member->image) }}" alt="Image" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($member->created_at)->isoFormat('Do MMMM YYYY') }}</td>
                                        <td>
                                            <a href="{{ route('members.edit', $member->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('members.destroy', $member->id) }}" 
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
                        {{ $members->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
