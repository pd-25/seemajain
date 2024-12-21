@extends('admin.layout.main')
@section('title', 'Edit Member | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Member</h5>
                        <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Member Name -->
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Member Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Member Designation -->
                            <div class="row mb-3">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text" name="designation" class="form-control" value="{{ $member->designation }}" required>
                                    @error('designation')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Member Image -->
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                    @if ($member->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $member->image) }}" alt="Current Image" width="100">
                                            <p>Current Image</p>
                                        </div>
                                    @endif
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update Member</button>
                                    <a href="{{ route('members.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
