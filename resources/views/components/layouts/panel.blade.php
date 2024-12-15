<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('components.partials.header')
    </head>
    <body>
        {{ $slot }}
        @include('components.partials.scripts')
    </body>
</html>
