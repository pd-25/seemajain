<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $seo->meta_title ?? 'Seemma Jain' }}</title>

    <meta name="description" content="{{ $seo->meta_description ?? 'Seemma Jain' }}">
    <!-- {{ $seo->hederscript ?? '' }} -->
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custome Css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/media.css') }}">
    <style>
        .scrolled {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.6);
            /* or darker for dark theme */
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header id="mainHeader" class="header" style="position: sticky; top: 0; background-color: transparent; transition: background-color 0.3s, backdrop-filter 0.3s;">
        <div class="container">
            <div class="desktop-menu">
                <div class="row align-items-center">
                    <div class="col">
                        <nav>
                            <div class="nav-container">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('course') }}">Courses</a></li>
                                    <li><a href="{{ route('freeCourse') }}">Free Courses</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-center">
                            <div class="brand-d">
                                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Seemma Jain">
                            </div>
                        </div>
                    </div>
                    <div class="col text-end">
                        <nav>
                            <div class="nav-container">
                                <ul>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="{{ asset('frontend/assets/img/logo.png') }}" class="brand" alt="Seemma Jain">
                    </div>
                    <div class="col-auto text-end">
                        <nav>
                            <input type="checkbox" id="nav" class="hidden" />
                            <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
                            <div class="nav-container">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('course') }}">Courses</a></li>
                                    <li><a href="{{ route('freeCourse') }}">Free Courses</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header -->
    @yield('content')


    <!-- Footer Section -->
    <div class="footer-overlay"></div>
    <footer class="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <img src="{{ asset('frontend/assets/img/logo-blue.png') }}" height="70" alt="">
                </div>
            </div>
            <div class="row mb-5">
                <!-- <div class="col-md-3">
                    <div class="foot-sec">
                        <h5>Working Hours</h5>
                        <ul>
                            <li>
                                <a href="#">Monday - Thursday : 7 am - 8 pm</a>
                            </li>
                            <li>
                                <a href="#">Friday : 7 am - 6 pm</a>
                            </li>
                            <li>
                                <a href="#">Saturday : 7 am - 7 pm</a>
                            </li>
                            <li>
                                <a href="#">Sunday : 7 am - 12 pm</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="foot-sec">
                        <h5>Useful Links</h5>
                        <ul>
                            <li>
                                <a href="{{ route('course') }}">Courses</a>
                            </li>
                            <li>
                                <a href="{{ route('freeCourse') }}">Free Courses</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="foot-sec">
                        <h5>Popular Services</h5>
                        <ul>
                            <li>
                                <a href="{{ route('services') }}">Health Yoga Class</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Power Yoga Class</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Pregnancy Yoga</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">Dynamic Meditation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="foot-sec">
                        <h5>Contact Us</h5>
                        <p><i class="bi bi-geo-alt me-2"></i> 121 Kingt Melbourne VIC 3000, Australia</p>
                        <p><i class="bi bi-telephone me-2"></i> +91 98201 27053</p>
                        <p><i class="bi bi-envelope me-2"></i> anubhoooti17@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="border-top text-center py-5">
                        <p>Copyright @2024 seemmajain.in</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Jquery 3.7 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Slick Slider -->
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script type="text/javascript" src="https://checkout.razorpay.com/v1/razorpay.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custome Js -->
    <script src="{{ asset('frontend/assets/js/site.js') }}"></script>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

</body>

</html>