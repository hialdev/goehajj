<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Owl Carousel 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="{{Voyager::image(setting('site.logo'))}}" type="image/x-icon">

    <!-- Internal CSS -->
    <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
    
    @include('partials.head')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <!-- Internal JS -->
    <script src="/src/js/carousel.js"></script>
    <script src="/src/js/script.js"></script>

    @yield('script')
</body>
</html>