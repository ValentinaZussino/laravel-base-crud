<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Santa\'s List')</title>

    <!-- Fonts -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="sticky-top position-absolute">
        @include('partials.header')
    </header>
    
    <main>
        @yield('snow')
        @yield('countdown')
        @yield('content')
    </main>
    @include('partials.footer')
    
</body>

</html>
