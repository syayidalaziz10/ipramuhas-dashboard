<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page }} - Sistem Manajemen Anggota Ikatan Pranata Hukum Indonesia</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    @yield('head')
</head>

<body>
    <div class="layer"></div>
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>

    <div class="page-flex">
        @yield('navbar')
        <div class="main-wrapper">
            @yield('header')
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    @yield('content')
                </div>
            </main>
            <footer class="footer">
                @yield('footer')
            </footer>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('plugins/chart.min.js') }}"></script>
    <script src="{{ asset('plugins/feather.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Scripts -->
    @yield('script')
</body>

</html>
