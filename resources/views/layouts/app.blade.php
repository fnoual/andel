<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ settings('site_name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
    </div>

<script src="{{ asset('js/app.js') }}" ></script>
@yield('scripts')
</body>
</html>
