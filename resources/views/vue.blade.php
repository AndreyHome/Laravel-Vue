<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    {{--<link rel="icon" type="image/ico" sizes="32x32" href="/favicon.ico">--}}

    @vite(['resources/sass/app.scss'])

    @php
        $manifest = json_decode(file_get_contents(public_path('/manifest.json')), true);
    @endphp
    <link rel="stylesheet" href="/{{$manifest['src/main.css']['file']}}">
    <script>
        window.photos = {!! json_encode(['siteName' => config('app.name')]) !!};
    </script>
</head>
<body>
@if (Route::has('login'))
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Laravel {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Register</a>
                @endif
            @endauth
        </div>
    </nav>
@endif
<main class="container">
    <div id="app">
    </div>
</main>
<script src="/{{$manifest['src/main.js']['file']}}"></script>
</body>
</html>
