<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Gabriel dos Anjos Leal">
    <meta name="description" content="Sua fonte de músicas e notícias sobre animes, mangás e light novels. Tenha acesso também à recomendações, reviews e curiosidades sobre suas obras favoritas. Enquanto isso, na rádio você tem acesso à maior playlist otaku do momento com notícias e programas ao vivo.">
    <meta name="keywords" content="anime, mangá, japão, música, ásia, cosplay, evento">
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        @if(isset($title))
            {{ $title }} | Rede Akiba
        @else
            Rede Akiba - O Paraíso dos Otakus! | Sua Melhor Fonte de Animes (e Mangás) no Brasil!
        @endif
    </title>
    <!-- Bootstrap -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Native CSS -->
    @if (Request::is('*painel*'))
        <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    @endif
</head>
<body>
    @if (!Request::is('painel'))
        @livewire('panel.inline.layout.navbar')
    @endif

    {{ $slot }}

    @if (Request::is('*painel*') && !Request::is('painel'))
        @livewire('panel.inline.layout.status')
    @endif
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @if (Request::is('*painel*'))
        <script src="{{ asset('js/panel/carrouselLateral.js') }}"></script>
    @endif
    @if (Request::is('*painel*'))
        <script src="{{ asset('js/panel/previewImage.js') }}"></script>
    @endif
</body>

</html>