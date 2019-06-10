<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/site/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.png">
</head>

<body>
<!-- Content -->
<main>
    @yield('content')
</main>
<script src="{{ asset('js/site/app.js') }}"></script>
</body>
</html>
