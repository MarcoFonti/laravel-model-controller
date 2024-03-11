<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} | @yield('title')</title>

    {{-- VITE --}}
    @vite('resources/js/app.js')
</head>
<body>
    <!-- HEADER -->
    @include('includes.header')

    <!-- MAIN -->
    <main>
        @yield('main-content')
    </main>

    <!-- FOOTER -->
    @include('includes.footer')
</body>
</html>
