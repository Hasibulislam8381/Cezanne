<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Cezanne</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/general_info/' . $data->favicon_logo) }}" alt="{{ $data->favicon_logo }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-lightbox.min.css') }}">




    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://kit.fontawesome.com/03f25eb302.js" crossorigin="anonymous"></script>

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    @stack('style')

</head>

<body class="light-version">
    <!-- Preloader -->
  
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

    <!-- Popper js -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.legacy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.jquery.min.js') }}"></script>


    <script src="{{ asset('frontend/js/lightgallery-all.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>
    <script>
        var gallery = $('.gallery a').simpleLightbox({
            sourceAttr: 'href',

            nav: true,
            overlay: true,
            close: true,
            closeText: 'X',
            swipeClose: true,
            showCounter: true,
            fileExt: 'png|jpg|jpeg|gif',


        })
    </script>
    <!-- script js -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    @stack('script')


</body>

</html>
