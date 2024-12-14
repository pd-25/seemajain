<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') {{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('admin.layout.partials.headdocs')

    <!-- Add the custom styles here -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        #main {
            flex: 1;
        }

        #footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            position: relative;
            margin-top: auto;
        }
        #sidebar {
            background-color: #eee5e5
        }
    </style>
</head>

<body>

    @include('admin.layout.partials.header')
    @include('admin.layout.partials.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    
    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var showConfirmButtons = document.querySelectorAll('.show_confirm');
            showConfirmButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var form = button.closest('form');
                    var name = button.getAttribute('data-name');
                    event.preventDefault();
                    swal({
                            title: "Are you sure you want to delete this data?",
                            text: "Once deleted, you will not be able to recover this data file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                form.submit();
                            } else {
                                swal("Your data file is safe!");
                            }
                        });
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(() => {
                    flashMessage.remove();
                }, 3000);
            }
        });
    </script>

    @yield('script')
</body>

</html>
