@extends('admin.layout.main')
@section('title', 'Edit SEO Data | ')
@section('content')
    <section class="section dashboard">

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit SEO Data</h5>
                        <form action="{{ route('seo.update', $seoData->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="page_name" class="col-sm-2 col-form-label">Page Name</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" name="page_name" class="form-control" value="{{ $seoData->page_name }}" required> --}}
                                    <select name="page_name" class="form-control">
                                        
                                        <option value="home" {{ $seoData->page_name == 'home' ? 'selected' : '' }}>Home</option>
                                        <option value="course" {{ $seoData->page_name == 'course' ? 'selected' : '' }}>Course</option>
                                        <option value="free-course" {{ $seoData->page_name == 'free-course' ? 'selected' : '' }}>Free Course</option>
                                        <option value="services" {{ $seoData->page_name == 'services' ? 'selected' : '' }}>Services</option>
                                        <option value="blog" {{ $seoData->page_name == 'blog' ? 'selected' : '' }}>Blog</option>
                                        <option value="about-us" {{ $seoData->page_name == 'about-us' ? 'selected' : '' }}>About Us</option>
                                        <option value="testimonial" {{ $seoData->page_name == 'testimonial' ? 'selected' : '' }}>Testimonial</option>
                                        <option value="contact" {{ $seoData->page_name == 'contact' ? 'selected' : '' }}>Contact Us</option>
                                       
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
                                    <input type="text" name="meta_title" class="form-control" value="{{ $seoData->meta_title }}" required>
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
                                    <textarea name="meta_description" class="form-control" rows="4" required>{{ $seoData->meta_description }}</textarea>
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
                                    <textarea name="hederscript" class="form-control" rows="4">{{ $seoData->hederscript }}</textarea>
                                    @error('hederscript')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Update Data</button>
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
