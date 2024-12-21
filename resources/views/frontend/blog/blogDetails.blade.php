@extends('frontend.layout.main')
@section('content') 
  <!-- Banner Section -->
  <section class="page-banner">
    <h1>{{$blog->title}}</h1>
</section>
<!-- Popular Classes Section -->
<section class="courses-details sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 mb-4 ">
                <div class="cdc-img mb-4">
                    <img src="{{asset('storage/'.$blog->image_path)}}" alt="Courses Details">
                </div>
                <div class="blog-details-cotent">
                    <div class="content">
                      {!! $blog->description !!}

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 position-relative">
                <div class="courses-details-highlight position-sticky">
                    <div class="cdh-header mb-3">
                        <h2 class="m-0">Related Blog</h2>
                    </div>
                    <ul class="list-group list-group-flush ff-jost">
                        @foreach ($relatedBlogs as $relatedBlog)
                            <li class="list-group-item">
                                <a href="{{ route('blogDetails', $relatedBlog->slug) }}">
                                    {{ $relatedBlog->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Classes -->
@endsection