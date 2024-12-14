<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Administrative / Login - {{env('APP_NAME')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">{{env('APP_NAME')}}</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Administrative
                                            Account</h5>
                                        @if (Session::has('msg'))
                                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                                        @endif
                                    </div>

                                    <form class="auth-form login-form" action="{{ route('admin.login') }}"
                                        method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input name="email" type="email" class="form-control p_input" autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input name="password" type="password" class="form-control p_input">
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center d-grid gap-2 mt-2">
                                            <button type="submit"
                                                class="btn btn-primary btn-block enter-btn">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            {{-- <div class="credits">
                                Designed by <a href="javascript:void(0)">Pradipta</a>
                            </div> --}}

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
