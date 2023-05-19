<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div id="app">
        <app></app>
    </div>

    <script src={{ asset('static/tinymce4.7.5/tinymce.min.js') }}></script>
    <script src={{ asset('js/vendor.js') }}></script>
    <script src={{ asset('js/manifest.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
</body>
</html>
