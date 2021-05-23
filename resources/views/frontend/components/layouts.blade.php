<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/frontend/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        @include('frontend.components.header')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-md-8">
                    @yield('content')
                </div>
                <!-- Side widgets-->
                <div class="col-md-4">
                    @include('frontend.components.right-sidebar')
                </div>
            </div>
        </div>
        @include('frontend.components.Footer')
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/assets/frontend/js/scripts.js"></script>
    </body>
</html>
