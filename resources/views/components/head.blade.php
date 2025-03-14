<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ToolGuys - Аренда электроинструмента и других видов строительного оборудования в Москве.</title>
    <!-- ..::Favicon::.. -->
    <link rel="apple-touch-icon"  href="{{ asset('assets/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('assets/images/fav.png') }}">
    <!-- ..::Bootstrap V5 CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- ..::Font Awesome 5 CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/all.min.css') }}">
    <!-- ..::RT Icons CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/rt-icons.css') }}">
    <!-- ..::Animate css::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/animate.min.css') }}">
    <!-- ..::Magnific popup Plugin::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- ..::Swiper Slider Plugin::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- ..::Mobile Menu CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/metisMenu.css') }}">
    <!-- ..::Main Menu CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/rtsmenu.css') }}">
    <!-- ..::Preloader CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/preloader.css') }}">

    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/variables/variable4.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.nstSlider.min.css')}}">

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/ru.js'></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/list/main.min.js'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <!-- ..::Main Stylesheet::.. -->
    <?php echo ($css ?? '')?>
            <!-- ..::Main Stylesheet::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/main.css') }}">

    @vite(['public/assets/sass/main.scss', 'public/assets/js/main.js'])
</head>