<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

    {{-- Para que nos devuelva la url raíz en la variable base_url --}}
    <meta name="base_url" content="{{ url('/') }}">

    {{-- Para que nos devuelva csrf_token en la variable csrf_token --}}
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <title>{{ __('Learning Platform') }}</title>

    <link rel="icon" type="{{ asset('frontend/assets/images/image/png') }}" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/scroll_button.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/pointer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/range_slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/startRating.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/video_player.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.simple-bar-graph.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sticky_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <link rel=" stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    {{-- Bootstrap Icons fonts --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    {{-- Custom css --}}
    @vite(['resources/css/frontend.css'])

    {{-- dynamic js --}}
    @stack('header-scripts')

</head>

<body class="home_3">

    <!--============ PRELOADER START ===========-->
    <div id="preloader">
        <div class="preloader_icon">
            <img src="{{ asset('frontend/assets/images/preloader.png') }}" alt="Preloader" class="img-fluid">
        </div>
    </div>
    
    
    <!--=== HEADER | MAIN MENU | STICKY MENU ===-->
    @include('frontend.layouts.header')


    <!--=== CONTENT TODAS LAS SECCIONES ESTÁN EN PAGES HOME SECTIONS ===-->
    @yield('content')


    <!--=== FOOTER ===-->
    @include('frontend.layouts.footer')


    <!-- SCROLL BUTTON START -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- SCROLL BUTTON END -->


    <!--jquery library js-->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('frontend/assets/js/Font-Awesome.js') }}"></script>
    <!--marquee js-->
    <script src="{{ asset('frontend/assets/js/jquery.marquee.min.js') }}"></script>
    <!--slick js-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!--countup js-->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countup.min.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('frontend/assets/js/venobox.min.js') }}"></script>
    <!--nice-select js-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!--Scroll Button js-->
    <script src="{{ asset('frontend/assets/js/scroll_button.js') }}"></script>
    <!--pointer js-->
    <script src="{{ asset('frontend/assets/js/pointer.js') }}"></script>
    <!--range slider js-->
    <script src="{{ asset('frontend/assets/js/range_slider.js') }}"></script>
    <!--barfiller js-->
    <script src="{{ asset('frontend/assets/js/animated_barfiller.js') }}"></script>
    <!--calendar js-->
    <script src="{{ asset('frontend/assets/js/jquery.calendar.js') }}"></script>
    <!--starRating js-->
    <script src="{{ asset('frontend/assets/js/starRating.js') }}"></script>
    <!--Bar Graph js-->
    <script src="{{ asset('frontend/assets/js/jquery.simple-bar-graph.min.js') }}"></script>
    <!--select2 js-->
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <!--Video player js-->
    <script src="{{ asset('frontend/assets/js/video_player.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/video_player_youtube.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    {{-- Para el código JS dinámico de las vistas, se puedan ejecutar cuando los llamamos con @push('child-scripts') --}}
    @stack('child-scripts')
    
</body>

</html>
