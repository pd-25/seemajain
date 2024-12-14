@extends('admin.layout.main')
@section('title', 'Edit Member | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Member</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <form action="{{ route('members.update', $member->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $member->name }}" class="form-control"
                                        required>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" value="{{ $member->email ?? '' }}" name="email"
                                        class="form-control">
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{ $member->phone ?? '' }}" name="phone"
                                        class="form-control" required>
                                    @error('phone')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if (!empty($member->image))
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label"> Current Image</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset('storage/MemberImage/' . $member->image) }}" alt="" height="50px" width="50px">
                                    </div>
                                </div>
                            @endif
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label"> Upload Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="image" type="file" id="formFile">
                                    @error('image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Join Date</label>
                                <div class="col-sm-10">
                                    <input type="date" value="{{ date('Y-m-d', strtotime($member->join_date)) }}" name="join_date"
                                        class="form-control" required>
                                    @error('join_date')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Submit Form</button>
                                    <a href="{{route('members.index')}}" type="submit" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
