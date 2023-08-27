<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Irvan Rifa'i">
        <meta name="author" content="Irvan Rifa'i">

        <!-- Favicons -->
        <link href="{{ asset('landing/images/ir.svg') }}" sizes="16x16" rel="icon">
        <link href="{{ asset('landing/images/ir.svg') }}" sizes="16x16" rel="apple-touch-icon">

        <title>Irvan Rifa'i</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('landing/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('landing/css/magnific-popup.css') }}" rel="stylesheet">

        <link href="{{ asset('landing/css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">

    </head>

    <body>

        @include('landing.partials.navbar')
        @include('landing.partials.loader')

        @yield('content')

        @include('landing.partials.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
        <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('landing/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('landing/js/click-scroll.js') }}"></script>
        <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('landing/js/magnific-popup-options.js') }}"></script>
        <script src="{{ asset('landing/js/custom.js') }}"></script>

    </body>
</html>
