<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.partials.header')
        <!-- Native CSS -->
        <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    </head>
    <body class="app-body">
        {{ $slot }}
        @include('components.partials.scripts')
    </body>
</html>
