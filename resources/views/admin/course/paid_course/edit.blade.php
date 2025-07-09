@extends('admin.layout.main')
@section('title', 'Edit Course | ')
@section('content')

<style>
    .ck-editor__editable {
        min-height: 200px;
    }
</style>

<section class="section dashboard">

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Course</h5>
                    <form action="{{ route('paid-courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Course Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{ old('title', $course->title) }}" required>
                                @error('title')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" class="form-control" value="{{ old('slug', $course->slug) }}" required>
                                @error('slug')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
                            <div class="col-sm-10">
                                <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration) }}">
                                @error('duration')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="skill_level" class="col-sm-2 col-form-label">Skill Level</label>
                            <div class="col-sm-10">
                                <input type="text" name="skill_level" class="form-control" value="{{ old('skill_level', $course->skill_level) }}">
                                @error('skill_level')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="language" class="col-sm-2 col-form-label">Language</label>
                            <div class="col-sm-10">
                                <input type="text" name="language" class="form-control" value="{{ old('language', $course->language) }}">
                                @error('language')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sale_price" class="col-sm-2 col-form-label">Sale Price</label>
                            <div class="col-sm-10">
                                <input type="number" name="sale_price" class="form-control" step="0.01" value="{{ old('sale_price', $course->sale_price) }}">
                                @error('sale_price')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="regular_price" class="col-sm-2 col-form-label">Regular Price</label>
                            <div class="col-sm-10">
                                <input type="number" name="regular_price" class="form-control" step="0.01" value="{{ old('regular_price', $course->regular_price) }}">
                                @error('regular_price')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="overview" class="col-sm-2 col-form-label">Overview</label>
                            <div class="col-sm-10">
                                <textarea id="overview" name="overview" class="form-control" rows="4">{{ old('overview', $course->overview) }}</textarea>
                                @error('overview')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="curriculum" class="col-sm-2 col-form-label">Curriculum</label>
                            <div class="col-sm-10">
                                <textarea id="curriculum" name="curriculum" class="form-control" rows="4">{{ old('curriculum', $course->curriculum) }}</textarea>
                                @error('curriculum')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="instructor" class="col-sm-2 col-form-label">Instructor</label>
                            <div class="col-sm-10">
                                <textarea id="instructor" name="instructor" class="form-control" rows="4">{{ old('instructor', $course->instructor) }}</textarea>
                                @error('instructor')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">
                                @if ($course->image)
                                <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" class="img-thumbnail mt-2" style="max-height: 150px;">
                                @endif
                                @error('image')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="meta_title" class="col-sm-2 col-form-label">Meta Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $course->meta_title) }}">
                                @error('meta_title')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="meta_description" class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $course->meta_description) }}</textarea>
                                @error('meta_description')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hederscript" class="col-sm-2 col-form-label">Header Script</label>
                            <div class="col-sm-10">
                                <textarea name="hederscript" class="form-control" rows="3">{{ old('hederscript', $course->hederscript) }}</textarea>
                                @error('hederscript')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update Course</button>
                                <a href="{{ route('paid-courses.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- CKEditor 5 Classic Build (latest CDN) -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#overview'))
        .catch(error => console.error(error));

    ClassicEditor
        .create(document.querySelector('#curriculum'))
        .catch(error => console.error(error));

    ClassicEditor
        .create(document.querySelector('#instructor'))
        .catch(error => console.error(error));
</script>

@endsection