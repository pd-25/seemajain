@extends('admin.layout.main')
@section('title', 'Offers Management | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Offers Management</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('offer.create') }}">Add Offer Data</a>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Percentage</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $startIndex = ($offerData->currentPage() - 1) * $offerData->perPage() + 1;
                                @endphp
                                @foreach ($offerData as $data)
                                    <tr>
                                        <th scope="row">{{ $startIndex++ }}</th>
                                        <td>{{ $data->offer_title }}</td>
                                        <td>{{ Str::limit($data->offer_description, 50) }}</td>
                                        <td>{{ $data->offer_percentage }}</td>
                                        <td>{{ $data->offer_status == '1' ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('offer.edit', $data->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('offer.destroy', $data->id) }}" class="d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete-icon show_confirm" data-toggle="tooltip" title='Delete'>
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $offerData->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
