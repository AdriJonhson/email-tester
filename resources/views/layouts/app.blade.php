<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(Auth::user())
    <meta name="api-token" content="{{ Auth::user()->api_token }}">
    @endif
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/pixeladmin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/widgets.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/themes/clean.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css" rel="stylesheet">

    <script src="{{ asset('pace/pace.min.js') }}"></script>
    <script>
        var _init = [];
    </script>
</head>
<body>
@if(!Auth::guest())
@include('layouts.components.sidemenu')
@include('layouts.components.menubar')
@endif

<!-- Content -->
<div class="px-content">
    @yield('page-header')
    @include('layouts.components.alert_success')
    @include('layouts.components.alert_error')

    <div>
        @yield('content')
    </div>
</div>

<!-- Footer -->
<footer class="px-footer px-footer-bottom">
    Copyright © 2019 {{ config('app.name') }}. All rights reserved.
</footer>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/admin/dropify.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin/bootstrap-tab-history.js') }}"></script>
<script src="{{ asset('js/admin/pixeladmin.min.js') }}"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
<script src="{{ asset('js/admin/app.js') }}"></script>
</body>
</html>
