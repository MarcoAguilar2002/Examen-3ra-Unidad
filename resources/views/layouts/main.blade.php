<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Examen 3ra</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">Examen 3ra Unidad</h1>
            </a>

            @include('layouts._partials.nav')

        </div>
    </header>

    <main class="main" style="">

        <!-- Hero Section -->
        <div class="container section mt-5">
            @yield('content')
        </div>

    </main>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>



    <script src="{{ url('assets/js/main.js') }}"></script>


</body>

</html>
