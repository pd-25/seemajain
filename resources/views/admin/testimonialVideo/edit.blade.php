@extends('admin.layout.main')
@section('title', 'Edit Testimonial Video | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Testimonial Video</h5>
                        <form action="{{ route('testimonial-video.update', $freeVideo->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                        
                            {{-- Video Title --}}
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Video Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control"
                                           value="{{ old('title', $freeVideo->title) }}" required>
                                    @error('title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            {{-- YouTube Link --}}
                            <div class="row mb-3">
                                <label for="youtube_link" class="col-sm-2 col-form-label">YouTube Link</label>
                                <div class="col-sm-10">
                                    <input type="url" name="youtube_link" id="youtube_link" class="form-control"
                                           value="{{ old('youtube_link', $freeVideo->youtube_link) }}" required>
                                    @error('youtube_link')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            {{-- Type --}}
                            {{-- <div class="row mb-3">
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="type" id="type" class="form-control"
                                           value="{{ old('type', $freeVideo->type) }}" required>
                                    @error('type')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                        
                            {{-- Submit and Cancel Buttons --}}
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update Video</button>
                                    <a href="{{ route('testimonial-video.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
