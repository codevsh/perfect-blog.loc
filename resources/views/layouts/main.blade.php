<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/app-1f8affc9.css') }}">
    <link rel="icon" href="{{ asset('front/images/fav-icon.png') }}" type="image/x-icon">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @livewireStyles
</head>

<body>
    @if (session('error'))
        <p class="text-danger text-center py-2">{{ session('error') }}</p>
    @endif
    @yield('content')


    <script src="{{ asset('build/assets/app-4ed993c7.js') }}"></script>
    <script src="{{ asset('build/assets/app-ecd146ba.js') }}"></script>
    {{-- @stack('scripts')
    @livewireScripts --}}
</body>

</html>
