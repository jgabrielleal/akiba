<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.partials.header')
    <!-- Native CSS -->
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>

<body class="panel-body">
    @livewire('panel.inline.layout.navbar')

    {{ $slot }}
    @include('components.partials.scripts')
    <script src="{{ asset('js/panel/avisosCarrouselLateral.js') }}"></script>
</body>

</html>