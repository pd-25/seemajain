@extends('admin.layout.main')
@section('title', 'SEO Management | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">SEO Management</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <a class="btn btn-sm btn-outline-success float-end" href="{{ route('seo.create') }}">Add SEO Data</a>
                        
                        <table class="table">
                            <thead>
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
                                            <a href="{{ route('seo.edit', $data->id) }}"><i class="ri-pencil-fill"></i></a>
                                            <form method="POST" action="{{ route('seo.destroy', $data->id) }}" class="d-inline-block pl-2">
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
                        {{ $seoData->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
