<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LaraBBS') - Laravel进阶教程</title>
    <meta name="description" content="@yield('description','Laravel进阶教程')">

    <!-- css styles -->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
        @include('common._message')
        @yield('content')
    </div>
    @include('layouts._footer')
</div>

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>