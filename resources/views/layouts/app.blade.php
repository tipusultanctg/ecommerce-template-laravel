<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
</head>
<body>
@include('partials.header')

<main>
        @yield('content')
</main>

@include('partials.footer')
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
@yield('scripts')
</body>
</html>
