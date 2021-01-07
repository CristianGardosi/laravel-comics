<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita:wght@400;700;900&display=swap" rel="stylesheet"> 
        {{-- Font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>DC comics</title>
    </head>

    <body>
        
        {{-- !HEADER --}}
        @include('partials.header')
        {{-- !MAIN --}}
        @yield('content')
        {{-- !FOOTER --}}
        @include('partials.footer')

    </body>

</html>
