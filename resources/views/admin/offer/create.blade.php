@extends('admin.layout.main')
@section('title', 'Create Offers Data | ')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-multiselect.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-multiselect.css') }}" type="text/css"/>

<script type="text/javascript">
    $(document).ready(function() {
        $('#course_id').multiselect({
            buttonWidth: '100%'
        });
    });
</script>

    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Offer Data</h5>
                        <form action="{{ route('offer.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                            
                                <label for="offer_title" class="col-sm-2 col-form-label">Offer Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="offer_title" class="form-control" required>
                                    @error('offer_title')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="offer_description" class="col-sm-2 col-form-label">Offer Description</label>
                                <div class="col-sm-10">
                                    <textarea name="offer_description" class="form-control" rows="4" required></textarea>
                                    @error('offer_description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="offer_percentage" class="col-sm-2 col-form-label">Offer Percentage</label>
                                <div class="col-sm-10">
                                    <input type="number" name="offer_percentage" class="form-control" required>
                                    @error('offer_percentage')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="course_id" class="col-sm-2 col-form-label">Course Name</label>
                                <div class="col-sm-10">
                                    <select name="course_id" class="form-control" id="course_id" multiple="multiple">
                                        @foreach ($courceData as $data)
                                          <option value="{{ $data->id }}">{{ $data->title }}</option>
                                        @endforeach
                                        
                                    </select>
                                    
                                    @error('course_id')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="offer_status" class="col-sm-2 col-form-label">Offer Status</label>
                                <div class="col-sm-10">
                                    <select name="offer_status" class="form-control">
                                       
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                        
                                    </select>

                                    @error('offer_status')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Submit Form</button>
                                    <a href="{{ route('seo.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
