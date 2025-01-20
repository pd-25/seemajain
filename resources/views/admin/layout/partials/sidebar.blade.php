<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('paid-courses*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('paid-courses.index') }}">
                <i class="bi bi-grid"></i>
                <span>Paid Courses</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('free-courses*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('free-courses.index') }}">
                <i class="bi bi-grid"></i>
                <span>Free Courses</span>
            </a>
        </li>

        
        <li class="nav-item {{ Route::is('services*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('services.index') }}">
                <i class="bi bi-grid"></i>
                <span>Services</span>
            </a>
        </li>
        
        <li class="nav-item {{ Route::is('blogs*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('blogs.index') }}">
                <i class="bi bi-grid"></i>
                <span>Blog</span>
            </a>
        </li>    
        <li class="nav-item {{ Route::is('testimonials*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('testimonials.index') }}">
                <i class="bi bi-grid"></i>
                <span>Testimonials</span>
            </a>
        </li>    

        <li class="nav-item {{ Route::is('testimonial-video*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('testimonial-video.index') }}">
                <i class="bi bi-grid"></i>
                <span>Testimonials Video</span>
            </a>
        </li>   
        <li class="nav-item {{ Route::is('members*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('members.index') }}">
                <i class="bi bi-grid"></i>
                <span>Members</span>
            </a>
        </li> 

        <li class="nav-item {{ Route::is('seo*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('seo.index') }}">
                <i class="bi bi-grid"></i>
                <span>Seo</span>
            </a>
        </li> 

        <li class="nav-item {{ Route::is('offer*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('offer.index') }}">
                <i class="bi bi-grid"></i>
                <span>Offer</span>
            </a>
        </li> 

    </ul>

</aside>