@extends('admin.layout.main')
@section('title', 'Edit Offer | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Edit Offer</h5>

                        <form action="{{ route('offers.update', $offer->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" 
                                       value="{{ old('title', $offer->title) }}" required>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $offer->description) }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="course_ids" class="form-label">Courses</label>
                                <select multiple class="form-select" id="course_ids" name="course_ids[]">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ collect(old('course_ids', $offer->course_ids))->contains($course->id) ? 'selected' : '' }}>
                                            {{ $course->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('course_ids')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="active" {{ old('status', $offer->status) === 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ old('status', $offer->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Offer</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
