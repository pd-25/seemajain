@extends('admin.layout.main')
@section('title', 'Create SEO Data | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New SEO Data</h5>
                        <form action="{{ route('seo.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="page_name" class="col-sm-2 col-form-label">Page Name</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" name="page_name" class="form-control" required> --}}
                                    <select name="page_name" class="form-control">
                                       
                                        <option value="home">Home</option>
                                        <option value="course">Course</option>
                                        <option value="free-course">Free Course</option>
                                        <option value="services">Services</option>
                                        <option value="blog">Blog</option>
                                        <option value="about-us">About Us</option>
                                        <option value="testimonial">Testimonial</option>
                                        <option value="contact">Contact Us</option>
                                        
                                    </select>
                                    

                                    @error('page_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="meta_title" class="col-sm-2 col-form-label">Meta Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="meta_title" class="form-control" required>
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
                                    <textarea name="meta_description" class="form-control" rows="4" required></textarea>
                                    @error('meta_description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="header_script" class="col-sm-2 col-form-label">Header Script</label>
                                <div class="col-sm-10">
                                    <textarea name="hederscript" class="form-control" rows="4"></textarea>
                                    @error('hederscript')
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
