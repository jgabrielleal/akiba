<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.partials.header')
    <!-- Native CSS -->
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>

<body class="app-body">
    @livewire('panel.inline.layout.navbar')

    {{ $slot }}
    @livewire('panel.inline.layout.status')
    @include('components.partials.scripts')
    <script src="{{ asset('js/panel/carrouselLateral.js') }}"></script>
</body>

</html>