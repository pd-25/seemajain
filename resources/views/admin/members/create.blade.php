@extends('admin.layout.main')
@section('title', 'Create Member | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Member</h5>
                        <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Member Name -->
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Member Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required>
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
                                    <input type="text" name="designation" class="form-control" required>
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
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Submit Form</button>
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
