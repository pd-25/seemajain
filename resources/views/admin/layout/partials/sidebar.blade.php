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
                <i class="bi bi-journal-check"></i>
                <span>Paid Courses</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('free-courses*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('free-courses.index') }}">
                <i class="bi bi-journal"></i>
                <span>Free Courses</span>
            </a>
        </li>

        
        <li class="nav-item {{ Route::is('services*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('services.index') }}">
                <i class="bi bi-briefcase"></i>
                <span>Services</span>
            </a>
        </li>
        
        <li class="nav-item {{ Route::is('blogs*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('blogs.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Blog</span>
            </a>
        </li>    
        <li class="nav-item {{ Route::is('testimonials*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('testimonials.index') }}">
                <i class="bi bi-chat-quote"></i>
                <span>Testimonials</span>
            </a>
        </li>    

        <li class="nav-item {{ Route::is('testimonial-video*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('testimonial-video.index') }}">
                <i class="bi bi-play-circle"></i>
                <span>Testimonials Video</span>
            </a>
        </li>   
        <li class="nav-item {{ Route::is('members*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('members.index') }}">
                <i class="bi bi-people"></i>
                <span>Members</span>
            </a>
        </li> 

        <li class="nav-item {{ Route::is('offers*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('offers.index') }}">
                <i class="bi bi-tags"></i>
                <span>Offers</span>
            </a>
        </li> 
        <li class="nav-item {{ Route::is('seo*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('seo.index') }}">
                <i class="bi bi-graph-up"></i>
                <span>Seo</span>
            </a>
        </li> 
    </ul>

</aside>